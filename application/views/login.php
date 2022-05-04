<!DOCTYPE html>

<html lang="">
<head>
<title>JTech Computer Parts</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo base_url('assets/styles/layout.css'); ?>" rel="stylesheet" type="text/css" media="all">
<style>
body{
       background-image: url("<?php echo base_url('assets/images/bg2.jpg'); ?>");
       height: 100vh;
       background-size: cover;
     }
 </style>
</head>
<body id="top">



  <br><br><br><br><br><br><br>
      <form action="<?php echo site_url('Login/auth'); ?>" method="POST">

    <center>

          <p class="lead" style="color: #ffffff;"></p><br><br>
      

        <div class="card border-dark mb-3" style="width: 100%; height: 530px;">
          <div class="card-header" style="color: skyblue;"><img style="height: 80px; width: 85px;" src="<?php echo base_url('assets/images/user.png'); ?>"></div>
          <div class="card-body">
            <div class="form-group">
              <br>
                <label ><h5 >Username</h5></label>
                <center>
                <input style="height: 45px; width: 30%; font-size: 15px; color: black;" type="username" class="form-control"  name="username" placeholder="Enter Username">
              
            </div>

          
            <div class="form-group">
                <label ><h5>Password</h5></label>
                <input style="height: 45px; width: 30%; font-size: 15px; color: black;" type="password" class="form-control" name="password" placeholder="Password">
            </div><br><br><br>
          
            <button style="height: 45px; width: 100px;font-size: 15px" type="submit" class="btn btn-primary">Log In</button>

            
        </div><br><br>
        <p class="lead" style="color: #ffffff;">Don't have an account?<a  href="<?php echo site_url('Login/sign_in'); ?>">Sign Up</a></p>

    </div>

    </div>


  
  

  

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>

<script src="<?php echo base_url('assets/scripts/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/scripts/jquery.backtotop.js'); ?>"></script>
<script src="<?php echo base_url('assets/scripts/jquery.mobilemenu.js'); ?>"></script>
</body>
</html>