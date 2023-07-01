<?php include_once('kconn.php');?>

<?php

    if(isset($_POST['submit'])){

	 
      $name = "";
      $email ="";
      $address ="";
	  $city = "";
	  $stat = "";
	  $zipcode = "";
	  $cardnumber = "";
	  $month = "";
	  $ea = "";
	  $cvv = "";
	  
      $name = input_varify($_POST['name']);
      $email = input_varify($_POST['email']);
      $address = input_varify($_POST['address']);
	  $city = input_varify($_POST['city']);
	  $stat = input_varify($_POST['stat']);
	  $zipcode = input_varify($_POST['zipcode']);
	  $cardnumber = input_varify($_POST['cardnumber']);
	  $month = input_varify($_POST['month']);
	  $ea = input_varify($_POST['ea']);
	  $cvv = input_varify($_POST['cvv']);

	  $query ="INSERT INTO payment(name,email,address,city,stat,zipcode,cardnumber,month,ea,cvv) 
	  VALUES('{$name}','{$email}','{$address}','{$city}','{$stat}','{$zipcode}','{$cardnumber}','{$month}','{$ea}','{$cvv}')";


	  $result = mysqli_query($conn, $query);

	        if(!$result){
            echo "User Registrantion Success!";
            }
			
            else{
            echo mysqli_error($conn);
            }
	  
	 
	 }
	

?>




<!DOCTYPE html>
<html>
<head>

	<fieldset>

		<div class="top bar">
			<div class="title">

				<div>
					<a href="index.php"><img src="img/Untitled-1-Recovered.png" style="width: 400px; height: 110px;" /></a>
				</div>


			</div>

			<div class="logings">
				<ul>
					<li><a href="login.php">Log In</a></li>
					<li><a href="signup.php">Sign Up</a></li>
				</ul>
			</div>
			</br></br>

			<div class="search">
				<form>
					<input type="search" placeholder="Search.." name="search-box">
					<button>Go</button>
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


	</fieldset>





	<title> Payment Page </title>
	<link rel="stylesheet" type="text/css" href="css/kavindu.css">
	
</head>

 <body>

	<header>

		<div class="payment">
			<h1> <center> MAKE YOUR PAYMENT</center></h1>
		</div>

	</header>
		<div class="box1">
			<div class="box2">
				<h3>BILLING ADDRESS</h3>

					<form action="payment.php" method="POST" autocomplete="off">

						Full name
						<input style="background-color:#96C3EB; color:black;   type="text" name="name" id="name"  placeholder= "Enter name"  width="10" height="20">

						Email
						<input style="background-color:#96C3EB; color:black;   type="text" name="email" id="email" placeholder="Enter email">

						Address
						<input style="background-color:#96C3EB; color:black;   type="text" name="address" id="address" placeholder="Enter address">

						City
						<input style="background-color:#96C3EB; color:black;   type="text" name="city" id="city" placeholder="Enter City">
                        <div id="zip">
						
							       <label>

								           <div class="stateclr">
									        State
								         </div>
								        <div class="box3">
									     <select name="stat">
										<option>Choose State..</option>
										<option>Western Province</option>
										<option>Central Province</option>
										<option>Southern Province</option>
										<option>Uva Province</option>
										<option>Sabaragamuwa Province</option>
										<option>North Western Province</option>
										<option>North Central Province</option>
										<option>Nothern Province</option>

									     </select>
								  </div>
							    </label>

							<label>

								<div class="zipclr">
									Zip code
								</div>
								<input style="background-color:#96C3EB; color:black; type="text" name="zipcode" id="zipcode" placeholder="Zip code">
							</label>
						</div>
					
				


				        <h3>PAYMENT</h3>
				
					Accepted Card <br>
					<img src="img/card1.png" width="100">
					<img src="img/card2.png" width="50">
					<br><br>

					Credit card number
					<input style="background-color:#96C3EB; color:black; type="text" name="cardnumber" id="cardnumber" placeholder="Enter card number">

					Exp month
					<input style="background-color:#96C3EB; color:black; type="number" name="month" id="month" placeholder="Enter Month">
					<div id="zip">
						<label>

							<div class="expclr">
								Exp year
							</div>
							<div class="box4">
								<select name="ea">
									<option>Choose Year..</option>
									<option>2022</option>
									<option>2023</option>
									<option>2024</option>
									<option>2025</option>
								</select>
							</div>
						</label>

						<label>

							<div class="cvvclr">
								CVV
							</div>
								<input style="background-color:#96C3EB; color:black; type="number" name="cvv" id="cvv" placeholder="CVV">
							
						</label>

						<div >
							<button type="submit" id="notv" name="submit">Proceed to Checkout</button>

								<script>
									document.getElementById("notv").onclick = function(){
										alert("Thank You! Your order has been successfully placed.");
									}
								</script>

						</div>


						
					</div>
				</form>
			</div>
		</div>



	



	<footer style="background-color:#323232;">
		<center>

			<div class="f">
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

		<div class="both">
			<div style="float: left" ;>
				<p>Revolt App</p>
				<p class="low">Book and manage your flights on the go.</p>
				<a href="https://www.apple.com/app-store/"><img src="img/Available_on_the_App_Store_logo.png" style="width: 200px; height: 60px;" /></a>
				<a href="https://play.google.com/store/movies"><img src="img/Google_Play_Store_badge_EN.svg.png" style="width: 200px; height: 60px;" /></a>
			</div>

			<div style="float: right;">
				<p>Connect with us</p>
				<p class="low">Share your Emirates experience.</p><br>
				<a href="https://www.twitter.com"><img src="img/twitter.png" style="background-size: cover;  width: 40px; height: 40px; border-radius: 50%;" /></a>
				<a href="https://www.whatsapp.com"><img src="img/whatsapp.png" style="background-size: cover; width: 40px; height: 40px; border-radius: 50%;" /></a>
				<a href="https://www.facebook.com"><img src="img/facebook.png" style="background-size: cover; width: 40px; height: 40px; border-radius: 50%;" /></a>
				<a href="https://www.youtube.com"><img src="img/youtube.jpg" style="background-size: cover; width: 40px; height: 40px; border-radius: 50%;" /></a>
			</div>

		</div>
		<br><br><br><br><br><br><br><br><br>

		<center><p style="font-size: 15px;">Copyright 2022 © Revolt Airline.</p></center>
	</footer>
</body>
</html>