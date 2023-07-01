<?php include_once('chameen.php');?>
<?php
	
	if(isset($_POST['submit'])){
		
		$username ="";
		$email ="";
		$mobile ="";
		$dob ="";
		$gender ="";
		
		$username = input_varify($_POST['username']);
		$email = input_varify($_POST['email']);
		$mobile = input_varify($_POST['phone']);
		$dob = input_varify($_POST['dob']);
		$gender = input_varify($_POST['gender']);
		
		$query = "INSERT INTO myprof(username,email,phone,dob,gender) 
		VALUES('{$username}','{$email}','{$mobile}','{$dob}','{$gender}')";
		
		$result = mysqli_query($conn, $query);
		
		if($result){
			
		}else{
			echo mysqli_error($conn);
		}
	}
	
	function input_varify($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		
		return $data;
	}




?>
<!DOCTYPE html>
<html>
<head>
		<title>My Profile</title>
	 <link rel="stylesheet" type="text/css" href="css/yprof.css">
	 <link rel="stylesheet" type="text/css" href="css/chameen.css">
	 <style>
.box{
	
	box-sizing: border-box;
	width: 360px;
	height: 600px;
	border:2px solid #3498db; 
	box-shadow: -3px -3px 7px #ffffff73,
				3px 3px 5px rgba(94,104,121,0.288);
	border-radius: 5px;
	background-color: black;
	margin-top: 50px;
	overflow: hidden;

}
.about{
	width: 100%;
	padding: 78px 0px;
	background-color: #191919;
}
*:focus{
	outline: nine;
}
.logo h1 a{
     color: white;
  text-align:left;
font-size: 50px; 
font-family: "Broadway regular";

}

.box img{
	box-sizing: border-box;
	width:149px;
	height:149px;
	border-radius:50px;
	margin:0;
	border:5px solid #0082e6;
	padding: 3px;
	background-color:white;
}
 input[type="text"],
 input[type="email"]{
	display:block;
	box-sizing:border-box;
	background:none;
	color:#3498db;
	margin-bottom: 30px;
	padding:4px;
	width:220px;
	height: 32px;
	border:none;
	border-bottom: 1px solid #0082e6;
	font-family: 'Roboto', sans-serif;
	font-size:15px;
	transition:0.2s ease;
	
}
input[type="text"]:focus,
input[type="email"]:focus{
	border-bottom: 2px solid #3498db;
	border-bottom-right-radius: 20px;
	color:#3498db;
	transition: 0.2 ease;
}
button{
	border:1px solid #3498db;
	background-color:black;
	color:white;
	height:30px;
	width:100px;
	border-radius:5px;
	margin:0px;
	transition: all 0.3s;
}
button:hover{
	transform: scale(1.1);
}
input[type="file"]{
	display:none;
}
label{
	box-sizing: border-box;
	font-size:20px;
	background-color:black;
	color:white;
	border:1px solid #3498db;
	padding: 2px 15px;
	border-radius:5px;
	transition:all 0.3s;
}
label:hover{
	background-color:#3498db;
	color:black;
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
      </div><!--comment dana widiya-->
    </br></br>
    <div class= "search">
      <form >
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
        <li><a href="#">Help</a></li>
        <li><a href="myprof.php">My Profile</a></li>
      </ul>
    </div>
  </center>
</fieldset>

	
			
			<div class="about">
			<center>
			
			
			<div class="box">
			
			<img src="img/image1.jpg"></image>
			
			<form action="myprof.php" method="POST" autocomplete="off">
			<input type="text"  name="username" placeholder="User Name" required>
			<input type="email" name="email" placeholder="Email ID" required>
			<input type="text"  name="phone" placeholder="Mobile Number" required>
		    <input type="text"  name="dob" placeholder="Date of Birth" required>
			<input type="text"  name="gender" placeholder="GENDER" required>
			<button type="submit" name="submit" id="al" >DONE</button>
			
		    
			</form>
			<script>
					document.getElementById("al").onclick = function(){
						
						alert("😎😎Details Added Successfully😎😎");
					}
			</script>
		    </div>
		
			</center>
			</div>
			
			<footer style="background-color:#323232;">
  <center>
    <div class = "f">
      <ul>
        <li><a href="Aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="contactus.php">Admin login</a></li>
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