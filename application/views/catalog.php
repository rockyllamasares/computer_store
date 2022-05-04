<!DOCTYPE html>

<html lang="">

<head>
<title>Catalog</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
        
        <h1><a href="<?php echo site_url('Login/index'); ?>"><img src="<?php echo base_url('assets/images/600pixels/logos.png'); ?>"></a></h1>
        
      </div>
      <nav id="mainav" class="fl_right"> 
        
        <ul class="clear">
          <li><a href="<?php echo site_url('User'); ?>">Home</a></li>
          <li class="active"><a href="<?php echo site_url('Login/catalog');?>">Catalog</a></li>
          <li><a href="<?php echo site_url('Login/contact'); ?>">Contact Us</a></li>
          <li><a href="<?php echo site_url('Login/about'); ?>">About</a></li>
        </ul>
        
      </nav>
    </header>
  </div>
 
  <div class="overlay">
    <div id="pageintro" class="hoc clear"> 
     
      <article>
        <h3 class="heading">Please Feel Free To Choose Your Ideal Items Below!</h3>
        <p>Customize and upgrade your computer according to your will, JTech will be the first support to upgrade your system to lead you into an upgraded life.</p>
      </article>
      
    </div>
  </div>

</div>

<div class="wrapper row3" style="background-image: url('<?php echo base_url('assets/images/blur.jpg'); ?>  ">
  <main class="hoc container clear"> 
   
    <div class="content"> 
     
      <div id="gallery">
        <figure>
          <header class="heading"><h1 style="color: white; font-size: 30px;">List Of Items:</h1></header>
                  <li class="one_third">
                    <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">9th Gen Intel Core i9</center>
                    <figure><a class="imgover" href="<?php echo site_url('Login/item14'); ?>"><img src="<?php echo base_url('assets/images/600pixels/core i9.jpg'); ?>" alt=""></a>
                    </figure>
                  </li>
                  <li class="one_third">
                    <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">B360M Intel Motherboard</center>
                    <figure><a class="imgover" href="<?php echo site_url('Login/item8.html'); ?>"><img src="<?php echo base_url('assets/images/600pixels/Gigabyte B360M D3h Intel Motherboard.jpg'); ?>" alt=""></a>
                    </figure>
                 </li>
                 <li class="one_third">
                  <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">RADEon RX Video Card 4GB</center>
                  <figure><a class="imgover" href="<?php echo site_url('Login/item23'); ?>"><img src="<?php echo base_url('assets/images/600pixels/sapphire pulse radeon RX Video Card $gb.jpg'); ?>" alt=""></a>
                  </figure>
                  </li> 
                  <li class="one_third">
                    <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">6 LED Night Vision Webcam</center>
                    <figure><a class="imgover" href="<?php echo site_url ('Login/item4'); ?>"><img src="<?php echo base_url('assets/images/600pixels/6 led Night Vision Webcam.JPG'); ?>" alt=""></a>
                    </figure>
                  </li>
                  <li class="one_third">
                    <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">1TB WD Purple HDD</center>
                    <figure><a class="imgover" href="<?php echo site_url('Login/item1'); ?>"><img src="<?php echo base_url('assets/images/600pixels/1TB Western Purple HDD.jpg'); ?>" alt=""></a>
                    </figure>
                  </li>
                  <li class="one_third">
                      <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">4Pin CPU Fan With Heat Sink</center>
                      <figure><a class="imgover" href="<?php echo site_url('Login/item2'); ?>"><img src="<?php echo base_url('assets/images/600pixels/2019 snowman 4pin cpu cooler.jpg'); ?>" alt=""></a>
                      </figure>
                  </li>
                  <li class="one_third">
                        <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">Memory Stick(RAM)</center>
                        <figure><a class="imgover" href="<?php echo site_url('Login/item3'); ?>"><img src="<?php echo base_url('assets/images/600pixels/4gb ddr2.jpg'); ?>" alt=""></a>
                        </figure>
                  </li>
                  
                  <li class="one_third">
                        <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">AMD Acota Core 7</center>
                        <figure><a class="imgover" href="<?php echo site_url('Login/item5'); ?>"><img src="<?php echo base_url('assets/images/600pixels/AMD Octa Core Ryzen 7.jpg'); ?>" alt=""></a>
                        </figure>
                  </li>
                  <li class="one_third">
                      <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">ATX 600wh Power Supply</center>
                      <figure><a class="imgover" href="<?php echo site_url('Login/item6'); ?>"><img src="<?php echo base_url('assets/images/600pixels/ATX.jpg'); ?>" alt=""></a>
                      </figure>
                    </li>
                    <li class="one_third">
                        <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">EATON UPS</center>
                        <figure><a class="imgover" href="<?php echo site_url('Login/item7'); ?>"><img src="<?php echo base_url('assets/images/600pixels/EATON UPS.jpg'); ?>" alt=""></a>
                        </figure>
                    </li>
                    
                    <li class="one_third">
                        <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">Microteck Digital AVR</center>
                        <figure><a class="imgover" href="<?php echo site_url('Login/item9'); ?>"><img src="<?php echo base_url('assets/images/600pixels/Microteck Digital avr.jpg'); ?>" alt=""></a>
                        </figure>
                    </li>
                    <li class="one_third">
                          <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">Nektech External HDD</center>
                          <figure><a class="imgover" href="<?php echo site_url('Login/item10'); ?>"><img src="<?php echo base_url('assets/images/600pixels/Nektech 2.5-inch USBH Type externalhdd.jpg'); ?>" alt=""></a>
                          </figure>
                    </li>
                    <li class="one_third">
                        <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">PX1000 Lan Card</center>
                        <figure><a class="imgover" href="<?php echo site_url('Login/item11'); ?>"><img src="<?php echo base_url('assets/images/600pixels/PX1000 Lan Card.jpg'); ?>" alt=""></a>
                        </figure>
                      </li>
                      <li class="one_third">
                          <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">AERO Sytem Unit Case</center>
                          <figure><a class="imgover" href="<?php echo site_url('Login/item12'); ?>"><img src="<?php echo base_url('assets/images/600pixels/aero-300 case.jpg'); ?>" alt=""></a>
                          </figure>
                      </li>
                      <li class="one_third">
                            <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">Smooth Wireless Mouse</center>
                            <figure><a class="imgover" href="<?php echo site_url('Login/item13'); ?>"><img src="<?php echo base_url('assets/images/600pixels/wireless mouse.jpg'); ?>" alt=""></a>
                            </figure>
                      </li>
                      
                      <li class="one_third">
                            <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">System Unit Cooler Fan</center>
                            <figure><a class="imgover" href="<?php echo site_url('Login/item15'); ?>"><img src="<?php echo base_url('assets/images/600pixels/chasis fan.jpg'); ?>" alt=""></a>
                            </figure>
                      </li>
                      <li class="one_third">
                          <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">DVI to HDMI Cable</center>
                          <figure><a class="imgover" href="<?php echo site_url('Login/item16'); ?>"><img src="<?php echo base_url('assets/images/600pixels/dvi.jpg'); ?>" alt=""></a>
                          </figure>
                        </li>
                        <li class="one_third">
                            <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">External USB CDROM</center>
                            <figure><a class="imgover" href="<?php echo site_url('Login/item17'); ?>"><img src="<?php echo base_url('assets/images/600pixels/external CDROM.jpg'); ?>" alt=""></a>
                            </figure>
                        </li>
                        <li class="one_third">
                              <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">Foxin HD Monitor</center>
                              <figure><a class="imgover" href="<?php echo site_url('Login/item18'); ?>"><img src="<?php echo base_url('assets/images/600pixels/foxin 18.5 inch HD Monitor.jpg'); ?>" alt=""></a>
                              </figure>
                        </li>
                        <li class="one_third">
                            <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">Video Graphic Array Cable</center>
                            <figure><a class="imgover" href="<?php echo site_url('Login/item19'); ?>"><img src="<?php echo base_url('assets/images/600pixels/vga.jpg'); ?>" alt=""></a>
                            </figure>
                        </li>
                        <li class="one_third">
                              <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">LG Internal DVD Writer</center>
                              <figure><a class="imgover" href="<?php echo site_url('Login/item20'); ?>"><img src="<?php echo base_url('assets/images/600pixels/internal Cd ro.jpg'); ?>" alt=""></a>
                              </figure>
                        </li>
                        <li class="one_third">
                            <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">Keyboard</center>
                            <figure><a class="imgover" href="<?php echo site_url('Login/item21'); ?>"><img src="<?php echo base_url('assets/images/600pixels/keyboard.png'); ?>" alt=""></a>
                            </figure>
                          </li>
                          <li class="one_third">
                              <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">Molex Pin Adopter</center>
                              <figure><a class="imgover" href="<?php echo site_url('Login/item22'); ?>"><img src="<?php echo base_url('assets/images/600pixels/molex pin adopter.jpg'); ?>" alt=""></a>
                              </figure>
                          </li>
                          
                          <li class="one_third">
                              <center style="color: white; border: 2px solid white; background-color: rgb(56, 137, 243); font-size: 20px;">SATA Serial Cable</center>
                              <figure><a class="imgover" href="<?php echo site_url('Login/item24'); ?>"><img src="<?php echo base_url('assets/images/600pixels/sataserial cable.jpg'); ?>" alt=""></a>
                              </figure>
                            </li>
                          </ul>
                        </div>
                      </div>
    
    <div class="clear"></div>
  </main>
</div>

<div class="clear"></div>
  </main>
</div>

<div class="wrapper coloured" >
  <section id="ctdetails" class="hoc clear"> 
        <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong>09508375682</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="https://www.gmail.com"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong>jtechcomputer@gmail.com</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Saturday:</strong>7:30am - 8:00pm</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="https://www.google.com/maps/d/viewer?mid=17d8xNuIGX6ioFw1v5FIQdyJU7zE&gl=us&ptab=2&ie=UTF8&oe=UTF8&msa=0&ll=13.147833789868162%2C123.7353717924666&z=14"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong>Legazpi City</span></div>
      </li>
    </ul>
    
  </section>
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