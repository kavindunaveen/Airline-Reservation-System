<!DOCTYPE html>
<html>
<head>
  <title>Flight booking</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

  <div id="flightloader"></div>


  <fieldset>
    <div class= "top bar">
      <div class="title">
        <div>
          <a href="index.php"><img src="img/Untitled-1-Recovered.png" style="width: 400px; height: 110px;"/></a>
        </div>
      </div>

      <h2 style="margin-left: 75%;">Hello</h2>

    <div class= "search">
      <form>
        <input type="search" placeholder="Search.." name="search-box">
        <button >Go</button>
      </form>
    </div>
  </div>
</fieldset>
<br>

<fieldset>
  <center>
    <div class="nav">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="login.php">Manage</a></li>
        <li><a href="https://www.booking.com/index.en.html">Hotel</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="myprof.php">My Profile</a></li>
      </ul>
    </div>
  </center>
</fieldset>




  <br>

  <center><h2>Select your departing flight</h2></center>
  <br>
  <div>

    <center>


    <fieldset class="flight">
      <a href="SeatBooking.php">
        <ul>
          <li><div class="lflight"><h2>05:30</h2><p>G234</p></div></li>
          <li><img style="width: 400px" src="img/arrow.png"></li>
          <p style="position: absolute; bottom:80px;left: 33%; font-size: 15px;">12 hour(s) 10 minute(s) / 1 stop</p>
          <li><div class="rflight"><h2>14:30</h2><p>G234</p></div></li>
        </ul>
      </a>
    </fieldset>
    <br>
    <fieldset class="flight">
      <a href="SeatBooking.php">
        <ul>
          <li><div class="lflight"><h2>10:45</h2><p>G204</p></div></li>
          <li><img style="width: 400px" src="img/arrow.png"></li>
          <p style="position: absolute; bottom:80px;left: 33%; font-size: 15px;">10 hour(s) 10 minute(s) / 1 stop</p>
          <li><div class="rflight"><h2>20:30</h2><p>G204</p></div></li>
        </ul>
      </a>
    </fieldset> 
    <br>   
    <fieldset class="flight">
      <a href="SeatBooking.php">
        <ul>
          <li><div class="lflight"><h2>15:30</h2><p>G114</p></div></li>
          <li><img style="width: 400px" src="img/arrow.png"></li>
          <p style="position: absolute; bottom:80px;left: 33%; font-size: 15px;">09 hour(s) 10 minute(s) / 1 stop</p>
          <li><div class="rflight"><h2>12:45</h2><p>G114</p></div></li>
        </ul>
      </a>
    </fieldset>
    <br>
    <fieldset class="flight">
      <a href="SeatBooking.php">
        <ul>
          <li><div class="lflight"><h2>09:35</h2><p>G987</p></div></li>
          <li><img style="width: 400px" src="img/arrow.png"></li>
          <p style="position: absolute; bottom:80px;left: 33%; font-size: 15px;">-08 hour(s) 10 minute(s) / 1 stop</p>
          <li><div class="rflight"><h2>17:05</h2><p>G987</p></div></li>
        </ul>
      </a>
    </fieldset>

<br><br>
  </center>
    
  </div>

  <fieldset>
    
  

 


  </form>
</div>
</center>

  <div class="container">
    <img src="img/Untitled-5.png" alt="Notebook" style="width:100%;">
    <div class="content">
      <h2>Enhanced measures for a safe travel</h2>
       <p>At Revolt Airline safety is paramount for us. We are continuously monitoring all the guidelines provided by GCAA, ICAO, WHO and relevant Health Authorities to ensure our passengers' safety.</p>
    </div>
  </div>


<br><br>
<p class="prg">Dear passengers,<br> <br> We recommend that you review our important announcements page for developments related to domestic and international travel due to COVID-19, including flights suspended between countries and similar information. Please see our Revolt Airline Travel Rules page for information regarding the rules applicable to arrival in Sri Lanka and country-specific travel restrictions page for travel requirements for other countries.</p>
<br>
 </fieldset>
<script type="text/javascript">
  var flightloader;
  function loadNow(opacity) {
    if(opacity <= 0) {
      displayContent();
    }
    else{
      flightloader.style.opacity = opacity;
      window.setTimeout(function(){
        loadNow(opacity - 0.05)
      }, 100);
    }
  }

  function displayContent(){
    flightloader.style.display = 'none';
    document.getElementById('content').style.display = 'block';
  }

  document.addEventListener("DOMContentLoaded", function(){
    flightloader = document.getElementById('flightloader');
    loadNow(1);
  });
</script>






</body>
<br>
  
<br><br>

<footer style="background-color:#323232;">
  <center>
    <div class = "f">
      <ul>
        <li><a href="Aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="admin login.php">Admin login</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
    </div>
  </center>

<center><hr class="line"></center>
<br>

<div class= "both">
  <div style="float: left";>
    <p>Revolt App</p>
    <p class="low">Book and manage your flights on the go.</p>
    <a href="https://www.apple.com/app-store/"><img src="img/Available_on_the_App_Store_logo.png" style="width: 200px; height: 60px;"/></a>
    <a href="https://play.google.com/store/movies"><img src="img/Google_Play_Store_badge_EN.svg.png" style="width: 200px; height: 60px;"/></a>
  </div>

<div style="float: right;">
  <p>Connect with us</p>
  <p class="low">Share your Emirates experience.</p><br>
  <a href="https://www.twitter.com"><img src="img/twitter.png" style="background-size: cover;  width: 40px; height: 40px; border-radius: 50%;"/></a>
  <a href="https://www.whatsapp.com"><img src="img/whatsapp.png" style="background-size: cover; width: 40px; height: 40px; border-radius: 50%;"/></a>
  <a href="https://www.facebook.com"><img src="img/facebook.png" style="background-size: cover; width: 40px; height: 40px; border-radius: 50%;"/></a>
  <a href="https://www.youtube.com"><img src="img/youtube.jpg" style="background-size: cover; width: 40px; height: 40px; border-radius: 50%;"/></a>
</div>

</div>
<br><br><br><br><br><br><br><br><br>

<center><p style="font-size: 15px;">Copyright 2022 © Revolt Airline.</p></center>
</footer>

</body>
</html>