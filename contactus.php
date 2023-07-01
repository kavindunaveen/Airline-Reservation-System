<?php include_once('isara.php');?>

<?php  
if(isset($_POST['submit'])){
   //Declaring varibles
     $sub = "";
     $mgs ="";
     
    

     $sub = input_verifly($_POST['subject']);
     $mgs = input_verifly($_POST['massage']);
     
	 $query = "INSERT INTO contact(c_subject,c_massage) 
		VALUES('{$sub}','{$mgs}')";
		
		$result = mysqli_query($conn, $query);
		
		if($result){
			
		}else{
			echo mysqli_error($conn);
		}
  
	}
 


   function input_verifly($data){
        
         $data = stripcslashes($data);
         //Remove back slash from user input

         return $data;
      }

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/isara.css">
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
  <li><a href="#">Manage</a></li>
  <li><a href="https://www.booking.com/index.en.html">Hotel</a></li>
  <li><a href="#">Help</a></li>
  <li><a href="myprof.php">My Profile</a></li>
</ul>
</div>
</center>
</fieldset>

</fieldset>


<h1 class = "CU" style="color: white;"> <center> Contact Us  </center> </h1> 
<center>
<div class="IPI"> 
<img src="img\image 2.jpg" width ="1300" height = "200">
</div>
</center>
<form action="contactus.php" method = "POST" >
 
     <div class = "Label"> 
     <label for="subject" style="color:white;" > Subject </label>
     <input type="text" style="color: white;" placeholder="Enter subject" name = "subject"  required>
     </br>
     <lable for="massage" style="color:white;"> Massage </label>
     <input type="text" style="color:white;" placeholder="Type your massage" name = "massage" required>
     </br>
     </div>

     <button style = "width:100px;" style = "height:20px;" type="submit" name = "submit" style="color:black;" >submit</button>
     </br>
     <p style ="color:greenyellow;"> If you have any issue or anything to share with us, you can contact us without any hesitation. </p>
     </br></br>
 </form>


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