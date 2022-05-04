
  <!DOCTYPE html>

  <html lang="">
  
  <head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
  <link href="<?php echo base_url('assets/styles/layout.css'); ?>" rel="stylesheet" type="text/css" media="all">
  <link href="<?php echo base_url('assets/css/catalog.css'); ?>" rel="stylesheet" type="text/css">

  </head>
  <div class="wrapper row0"> 
      <div id="topbar" class="hoc clear">
        <div class="fl_left"> 
         
          <ul class="nospace">
            <li><i class="fas fa-phone rgtspace-5"></i>09508375682</li>
            <li><i class="far fa-envelope rgtspace-5"></i> jtechcomputer@gmail.com</li>
          </ul>
        
        </div>
        <div class="fl_right"> 
         
          <ul class="nospace">
              <div>
                <form action="#" method="post">
                  <fieldset>
                  </fieldset>
                </form>
              </div>
            </li>
          </ul>
         
        </div>
      </div>
    </div>
    

<div class="bgded" style="background-image:url('<?php echo base_url('assets/images/hapita.gif'); ?>');"> 
  
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        
        <h1><a href="i"><img src="<?php echo base_url('assets/images/600pixels/logos.png'); ?>" ></a></h1>
        
      </div>
      <nav id="mainav" class="fl_right"> 

        
        <ul class="clear">
          
        </ul>
        
      </nav>
    </header>
  </div>



                <figure>
                 <center><header class="heading"><h1 style="color: white; font-size: 30px;">SIGN UP</h1></header></center>
                      
                  <div class="container-contact100">
                      <div class="wrap-contact100">
                        <form class="contact100-form validate-form" method="post" action="<?php echo site_url('new_rec/save'); ?>">
                          <span class="contact100-form-title">
                          </span>
                          <label class="label-input100" for="first-name">Your Name *</label>
                          <div class="wrap-input100 rs1 validate-input">
                            <input id="first-name" class="input100" type="text" name="fname" placeholder="first name">
                            <span class="focus-input100"></span>
                          </div>
                          <div class="wrap-input100 rs1 validate-input">
                            <input class="input100" type="text" name="lname" placeholder="last name">
                            <span class="focus-input100"></span>
                          </div>
                          <label class="label-input100" for="email">Username *</label>
                          <div class="wrap-input100 validate-input">
                            <input id="email" class="input100" type="text" name="username" placeholder="enter username">
                            <span class="focus-input100"></span>
                          </div>
                  
                  <label class="label-input100" for="email">Phone Number *</label>
                          <div class="wrap-input100 validate-input">
                            <input id="email" class="input100" type="text" name="number" placeholder="enter number">
                            <span class="focus-input100"></span>
                          </div>

                          <label class="label-input100" for="email">Address *</label>
                          <div class="wrap-input100 validate-input">
                            <input id="email" class="input100" type="text" name="address" placeholder="enter address">
                            <span class="focus-input100"></span>
                          </div>
                  
                  <label class="label-input100" for="email">Email Address *</label>
                          <div class="wrap-input100 validate-input">
                            <input id="email" class="input100" type="text" name="email" placeholder="enter email">
                            <span class="focus-input100"></span>
                          </div>
                  
                  <label class="label-input100" for="email">Password *</label>
                          <div class="wrap-input100 validate-input">
                            <input id="email" class="input100" type="password" name="password" placeholder="enter password">
                            <span class="focus-input100"></span>
                          </div>
                      <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn" type="save" >
                              <span>
                                Sign Up
                                <i class="zmdi zmdi-arrow-right m-l-8"></i>
                              </span>
                         </button>
                      </div>
                </form>
              </div>
          </div>
      
        
      </div>
    </div>
  
  </div>

</div>
         
          
</body>
</html>