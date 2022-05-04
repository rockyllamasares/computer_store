<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function _construct(){
		parent::_construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	function auth(){
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$result   = $this->Login_model->check_user($username, $password);
		if ($result->num_rows() > 0){
			$data = $result->row_array();
			$name = $data['username'];
			$email = $data['email'];
			$level = $data['level'];
			$sesdata = array( 
				'username' => $username,
				'email' => $email,
				'level' => $level,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);

			if($level === '1'){
				redirect('Admin');
			}

			elseif($level === '0'){
				redirect('User');
			}

			}else{
				echo"<script>alert('Access Denied, Wrong Username or Password');history.go(-1);</script>";

			}

			$this->load->view('login');
		}

	function logout(){
			$this->session->sess_destroy();
			redirect('Login');
		}


	function sign_in()
	{
		$this->load->view('sign');
	}
	function about()
	{
		$this->load->view('about');
	}
	function contact()
	{
		$this->load->view('contact');
	}
	function cart()
	{
		$this->load->view('cart');
	}
	function catalog()
	{
		$this->load->view('catalog');
	}
	function checkout()
	{
		$this->load->view('buy');
	}



	function item1()
	{
		$this->load->view('item1');
	}
	function item2()
	{
		$this->load->view('item2');
	}
	function item3()
	{
		$this->load->view('item3');
	}
	function item4()
	{
		$this->load->view('item4');
	}
	function item5()
	{
		$this->load->view('item5');
	}
	function item6()
	{
		$this->load->view('item6');
	}
	function item7()
	{
		$this->load->view('item7');
	}
	function item8()
	{
		$this->load->view('item8');
	}
	function item9()
	{
		$this->load->view('item9');
	}
	function item10()
	{
		$this->load->view('item10');
	}
	function item11()
	{
		$this->load->view('item11');
	}
	function item12()
	{
		$this->load->view('item12');
	}
	function item13()
	{
		$this->load->view('item13');
	}
	function item14()
	{
		$this->load->view('item14');
	}
	function item15()
	{
		$this->load->view('item15');
	}
	function item16()
	{
		$this->load->view('item16');
	}
	function item17()
	{
		$this->load->view('item17');
	}
	function item18()
	{
		$this->load->view('item18');
	}
	function item19()
	{
		$this->load->view('item19');
	}
	function item20()
	{
		$this->load->view('item20');
	}
	function item21()
	{
		$this->load->view('item21');
	}
	function item22()
	{
		$this->load->view('item22');
	}
	function item23()
	{
		$this->load->view('item23');
	}
	function item24()
	{
		$this->load->view('item24');
	}
	}