
  <!DOCTYPE html>

  <html lang="">
  
  <head>
  <title>JTech - Payment Form</title>
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
<link href="<?php echo base_url('assets/css/catalog.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/styles/layout.css'); ?>" rel="stylesheet" type="text/css" media="all">
  </head>
  <body id="top">
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
          
          <li id="searchform">
            <div>
              <form action="" method="post">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input type="text" placeholder="Enter search term&hellip;">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
              </form>
            </div>
          </li>
          <a href="<?php echo site_url('Login/logout'); ?>"><img style="height: 30px; width: 30px;" src="<?php echo base_url('assets/images/logout.png'); ?>" ></a>
        </ul>
       
      </div>
    </div>
  </div>
  
    

<div class="bgded" style="background-image:url('<?php echo base_url('assets/images/hapita.gif'); ?>"> 
  
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
        
        <h1><a href="index.html"><img src="<?php echo base_url('assets/images/600pixels/logos.png'); ?>" ></a></h1>
        
      </div>
      <nav id="mainav" class="fl_right"> 
        
        <ul class="clear">
            <li><a href="<?php echo site_url('User'); ?>">Home</a></li>
            <li class="active"><a href="<?php echo site_url('Login/catalog'); ?>">Catalog</a></li>
            <li><a href="<?php echo site_url('Login/contact'); ?>">Contact Us</a></li>
            <li><a href="<?php echo site_url('Login/about'); ?>">About</a></li>
          </ul>
        
      </nav>
    </header>
  </div>
                <figure>
                 <center><header class="heading"><h1 style="color: white; font-size: 30px;">PAYMENT FORM</h1></header></center>
                      
                  <div class="container-contact100">
                      <div class="wrap-contact100">
                        <form class="contact100-form validate-form">
                          <span class="contact100-form-title">
                          </span>
                          <label class="label-input100" for="first-name">Your Name *</label>
                          <div class="wrap-input100 rs1 validate-input">
                            <input id="first-name" class="input100" type="text" name="first-name" placeholder="First name">
                            <span class="focus-input100"></span>
                          </div>
                          <div class="wrap-input100 rs1 validate-input">
                            <input class="input100" type="text" name="last-name" placeholder="Last name">
                            <span class="focus-input100"></span>
                          </div>
                  
                          <label class="label-input100" for="email">Email Address *</label>
                          <div class="wrap-input100 validate-input">
                            <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                            <span class="focus-input100"></span>
                          </div>
                  
                          <label class="label-input100" for="phone">Phone Number</label>
                          <div class="wrap-input100">
                            <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
                            <span class="focus-input100"></span>
                          </div>

                          <label class="label-input100" for="first-name">Card Payment</label>
                          <div class="wrap-input100 rs1 validate-input">
                            <input id="first-name" class="input100" type="text" name="first-name" placeholder="Credit Card Number">
                            <span class="focus-input100"></span>
                          </div>
                          <div class="wrap-input100 rs1 validate-input">
                            <input class="input100" type="text" name="password" placeholder="Security Code">
                            <span class="focus-input100"></span>
                          </div>

                          <label class="label-input100" for="first-name">Expiration Date</label>
                          <div class="wrap-input100 rs1 validate-input">
                            <input id="first-name" class="input100" type="text" name="first-name" placeholder="Expiration Month">
                            <span class="focus-input100"></span>
                          </div>
                          <div class="wrap-input100 rs1 validate-input">
                            <input class="input100" type="text" name="last-name" placeholder="Expiration Year">
                            <span class="focus-input100"></span>
                          </div>
      
                          <label class="label-input100" for="phone">Address</label>
                          <div class="wrap-input100">
                            <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. St.Home Number">
                            <span class="focus-input100"></span>
                          </div>
      
                          <label class="label-input100" for="phone">Zip Code</label>
                          <div class="wrap-input100">
                            <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. 4534">
                            <span class="focus-input100"></span>
                          </div>
                         
                  
                          <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn">
                              <span>
                                ADD To Cart
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
<div class="bgded overlay row4" style="background-image:url('<?php echo base_url('assets/images/image.png'); ?>">
  <footer id="footer" class="hoc clear"> 
    
    <div class="one_quarter first">
      <h6 class="heading">You can also follow us:</h6>
      <ul class="nospace linklist">
        <li><a href="https://www.facebook.com">FACEBOOK</a></li>
        <li><a href="https://www.twitter.com">TWITTER</a></li>
        <li><a href="https://www.instagram.com">INSTAGRAM</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Send Your Opinion</h6>
      <p class="nospace btmspace-15">Fill up this form.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Opinions">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Other Activities</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">We have a mandatory training for IT security at JTech  Bldg. 88.</a></p>
            <time class="block font-xs" datetime="2045-04-06">Every 10<sup>th</sup> of the month.</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Actual performance of JTech organizing method at JTech Bldg. 18.</a></p>
            <time class="block font-xs" datetime="2045-04-05">Every 4<sup>th</sup>of the month.</time>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">JTech</h6>
      <ul class="nospace clear latestimg">
        <li><a class="imgover" href="<?php echo site_url('Login/catalog'); ?>"><img src="<?php echo base_url('assets/images/600pixels/dvi.jpg'); ?>" height="100" width="100" alt=""></a></li>
        <li><a class="imgover" href="<?php echo site_url('Login/catalog'); ?>"><img src="<?php echo base_url('assets/images/600pixels/external CDROM.jpg'); ?>" height="100" width="100" alt=""></a></li>
        <li><a class="imgover" href="<?php echo site_url('Login/catalog'); ?>"><img src="<?php echo base_url('assets/images/600pixels/internal Cd ro.jpg'); ?>" height="100" width="100" alt=""></a></li>
        <li><a class="imgover" href="<?php echo site_url('Login/catalog'); ?>"><img src="<?php echo base_url('assets/images/600pixels/wireless mouse.jpg'); ?>" height="100" width="100" alt=""></a></li>
        <li><a class="imgover" href="<?php echo site_url('Login/catalog'); ?>"><img src="<?php echo base_url('assets/images/600pixels/sapphire pulse radeon RX Video Card $gb.jpg'); ?>" height="100" width="100" alt=""></a></li>
        <li><a class="imgover" href="<?php echo site_url('Login/catalog'); ?>"><img src="<?php echo base_url('assets/images/600pixels/ATX.jpg'); ?>" height="100" width="100" alt=""></a></li>
      </ul>
    </div>
   
  </footer>
</div>
  <div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved<a href="#"></a></p>
    <p class="fl_right"><a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates"></a></p>
  </div>
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>

<script src="<?php echo base_url('assets/scripts/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/scripts/jquery.backtotop.js'); ?>"></script>
<script src="<?php echo base_url('assets/scripts/jquery.mobilemenu.js'); ?>"></script>
         
          
</body>
</html>