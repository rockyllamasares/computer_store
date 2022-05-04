
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="<?php echo base_url('assets/styles/layout.css'); ?>" rel="stylesheet" type="text/css" media="all">
  <link href="<?php echo base_url('assets/css/cart.css'); ?>" rel="stylesheet" type="css/text">
</head>
<body>
  <div class="row">
    <div class="col-75">
      <div class="container"> 
        <form action="/action_page.php">
  
          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="john@example.com">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="New York">
  
              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" id="state" name="state" placeholder="NY">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001">
                </div>
              </div>
            </div>
  
            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="John More Doe">
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September">
  
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>
  
          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <input type="submit" value="Continue to checkout" class="btn">
        </form>
      </div>
    </div>
  
    <div class="col-25">
      <div class="container">
        <h4>Cart
          <span class="price" style="color:black">
            <i class="fa fa-shopping-cart"></i>
            <b>4</b>
          </span>
        </h4>
        <p><a href="#">Product 1</a> <span class="price">$15</span></p>
        <p><a href="#">Product 2</a> <span class="price">$5</span></p>
        <p><a href="#">Product 3</a> <span class="price">$8</span></p>
        <p><a href="#">Product 4</a> <span class="price">$2</span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
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