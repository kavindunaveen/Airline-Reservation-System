<!DOCTYPE html>
<html>
<head>
		<title>About Us</title>

	<link rel="stylesheet" type="text/css" href="css/chameen.css">
	<style>
.about{
width: 100%;
padding: 78px 0px;
background-color: #191919;
}
.about img{
	height: auto;
	width:420px;
}
.about-text{
	width:550px;
}
.main{
	width:1130px;
	max-width: 95%;
	margin: 0 auto;
	display: flex;
	align-items:center;
	justify-content: space-around;
}
.about-text h1{
	color:white;
	font-size:80px;
	text-transform:capitalize;
	margin-bottom:20px;
}
.about-text h5{
	color:white;
	font-size:25px;
	text-transform:capitalize;
	margin-bottom:25px;
	letter-spacing:2px;
}
span{
	color:#f9004d;
}
.about-text p{
	color:#fcfc;
	letter-spacing:1px;
	line-height:28px;
	font-size:18px;
	margin-bottom:45px;
}
button{
	 background:#f9004d;
	 color:white;
	 text-decoration:none;
	 border: 2px solid transform;
	 font-weight: bold;
	 padding: 13px 30px;
	 border-radius: 30px;
	 transition:.4s;
}
button:hover{
	background: transparent;
	border: 2px solid #f9004d;
	cursor: pointer;
}
	
	
	</style>
</head>
<body>
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
      </div>
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
        <li><a href="login.php">Manage</a></li>
        <li><a href="https://www.booking.com/index.en.html">Hotel</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="myprof.php">My Profile</a></li>
      </ul>
    </div>
  </center>
</fieldset>




	<section class="about">
		<div class="main">
			<img src="img/Untitled-1-Recovered.png">
			<div class="about-text">
				<h1>About us</h1>
				<h5>REVOLT<span> AIRLINE</span></h5>
				<p>Revolt Airline is very reliable and safe and our staff are eager to make life easier for passengers and to lovingly care for them from the beginning to the end of the journey.<br>
		<br><span>Board of Directors</span><br>
Dr. Chameen  – Director<br>
Dr. Poornaka – Director<br>
Dr. Pasindu	 – Director<br>
Dr. Kavindu	 – Director<br>
Dr. Isara	 – Director<br>
</p>
				<button type="button" id="bu" >Learn more</button>
				<script>
					document.getElementById("bu").onclick = function(){
						
						alert("✈✈✈ARE YOU SURE!✈✈✈");
					}
				
				</script>
			</div>
		</div>
	</section>
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
