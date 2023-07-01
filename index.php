<!DOCTYPE html>
<html>
<head>
  <title>Revolt Airline</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>

  <div id="loader"></div>


  <fieldset>
    <div class= "top bar">
      <div class="title">
        <div>
          <a href="index.php"><img src="img/Untitled-1-Recovered.png" style="width: 400px; height: 110px;"/></a>
        </div>
      </div>

      <div class="logings">
        <ul>
          <li><a href="login.php">Log In</a></li>
          <li><a href="signup.php">Sign Up</a></li>
        </ul>
      </div><!--comment dana widiya-->
    </br></br>
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
        <li><a href="#">Manage</a></li>
        <li><a href="https://www.booking.com/index.en.html">Hotel</a></li>
        <li><a href="login.php">Help</a></li>
        <li><a href="myprof.php">My Profile</a></li>
      </ul>
    </div>
  </center>
</fieldset>


<div class="slider"></div>


<center>
  <br>
  <h2>Book a flight</h2>
  <br>
  <p>Search for Revolt airline flights and book online. See our routes and schedules, and discover more about the experience you can look forward to on board.</p>


<div class="form1">
  <form class="sflight" action="flight.php">
    <ul>
      <li>
        <label style= "font-family: Cascadia Code;  font-size: 20px; " for="cars">Departure airport</label>
        <select name="country" id="country">
          <option value="Afghanistan">Afghanistan</option>
          <option value="Albania">Albania</option>
          <option value="Angola">Angola</option>
          <option value="Austria">Austria</option>
          <option value="Belarus">Belarus</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Canada">Canada</option>
          <option value="China">China</option>
          <option value="Denmark">Denmark</option>
          <option value="Egypt">Egypt</option>
          <option value="Georgia">Georgia</option>
          <option value="Haiti">Haiti</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Libya">Libya</option>
          <option value="Malawi">Malawi</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="Sweden">Sweden</option>
          <option value="Turkey">Turkey</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="Zimbabwe">Zimbabwe</option>
        </select>
      </li>
      <li>
        <label style= "font-family: Cascadia Code;  font-size: 20px;" for="cars">Arrival airport</label>
        <select name="country" id="country">
          <option value="Afghanistan">Afghanistan</option>
          <option value="Albania">Albania</option>
          <option value="Angola">Angola</option>
          <option value="Austria">Austria</option>
          <option value="Belarus">Belarus</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Canada">Canada</option>
          <option value="China">China</option>
          <option value="Denmark">Denmark</option>
          <option value="Egypt">Egypt</option>
          <option value="Georgia">Georgia</option>
          <option value="Haiti">Haiti</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Libya">Libya</option>
          <option value="Malawi">Malawi</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="Sweden">Sweden</option>
          <option value="Turkey">Turkey</option>
          <option value="United Kingdom">United Kingdom</option>
          <option value="Zimbabwe">Zimbabwe</option>
        </select>
      </li>
      <li>
        <label style= "font-family: Cascadia Code;  font-size: 20px; " for="cars">Departure Date</label>
        <input style="text-align: center; color:black; font-size: 20px; background-color: white; font-family: Cascadia Code;height: 50px; width: 250px; border-radius: 30px;" type="date" name="date">
      </li>
      <li>
        <label style= "font-family: Cascadia Code;  font-size: 20px; " for="cars">Arrival Date</label>
        <input style="text-align: center; color:black; font-size: 20px; background-color: white; font-family: Cascadia Code;height: 50px; width: 250px; border-radius: 30px;" type="date" name="date">
      </li>
    </ul><center><input style="color:white; font-size: 20px; background-color: rgba(255,255,255,0.30); font-family:Cascadia Code; height: 50px; width: 300px; border-radius: 30px; border-right: 10px solid white;border-left: 10px solid white;" type="submit" value="Continue"></center>


  </form>
</div>
</center>
<br><br>

<fieldset>
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
  var loader;
  function loadNow(opacity) {
    if(opacity <= 0) {
      displayContent();
    }
    else{
      loader.style.opacity = opacity;
      window.setTimeout(function(){
        loadNow(opacity - 0.05)
      }, 100);
    }
  }

  function displayContent(){
    loader.style.display = 'none';
    document.getElementById('content').style.display = 'block';
  }

  document.addEventListener("DOMContentLoaded", function(){
    loader = document.getElementById('loader');
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