<?php include_once('isara.php');?>
<?php

 if(isset($_POST['sub'])){
    //Declaring varibles
      $fn = "";
      $ln ="";
      $phone ="";
      $country ="";
      $seatNo ="";
	  $gender ="";
      

      $fn= input_verifly($_POST['fn']);
      $ln = input_verifly($_POST['ln']);
      $phone = input_verifly($_POST['mobile']);
      $country = input_verifly($_POST['country']);
      $seatNo = input_verifly($_POST['seatno']);
	  $gender = input_verifly($_POST['gen']);
	  
		$query = "INSERT INTO seatbook(f_name,l_name,phone,country,seatNo,gender) 
		VALUES('{$fn}','{$ln}',{$phone},'{$country}','{$seatNo}','{$gender}')";
		
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
  <link rel="stylesheet" type="text/css" href="css/SeatStyles.css">
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

</fieldset>


<body style = "background-repeat:no-repeat; background-size:cover"  background="img\FeatureLanding_1920x1080_Scarpa.jpg" width ="1000" height = "800" >
    
  <h1 align = "center" style="color:white;"> Seat Booking </h1>
   
  <h2 align ="center" style="color:greenyellow;"> Please Select <br> a Seat </h2>
  <br>
  <br>
  <center>
  <div class = "DP">
  <tabel border ="2">
         
      <tr>
          <td> <input type="checkbox" id="1A" />
              <label for="1A">1A</label> </td>
          <td> <input type="checkbox" id="1B" />
              <label for="1B">1B</label> </td>   
          <td> <input type="checkbox" id="1C" />
              <label for="1C">1C</label> </td> 
          <td> <input style ="margin-left: 60px;" type="checkbox" id="1D" />
              <label for="1A">1D</label> </td>
          <td> <input type="checkbox" id="1E" />
              <label for="1E">1E</label> </td>
          <td> <input type="checkbox" id="1F" />
              <label for="1F">1F</label> </td>
      </tr>
      <br>
      <tr>
          <td> <input type="checkbox" id="2A" />
              <label for="2A">2A</label> </td>
          <td> <input type="checkbox" id="2B" />
              <label for="2B">2B</label> </td>
          <td> <input type="checkbox" id="2C" />
              <label for="2C">2C</label> </td>
          <td> <input style ="margin-left: 60px;" type="checkbox" id="2D" />
              <label for="2A">2D</label> </td>
          <td> <input type="checkbox" id="2E" />
              <label for="2E">2E</label> </td>
          <td> <input type="checkbox" id="2F" />
              <label for="2F">2F</label> </td>
      </tr>
      <br>
      <tr>
          <td> <input type="checkbox" id="3A" />
              <label for="3A">3A</label> </td>
          <td> <input type="checkbox" id="3B" />
              <label for="3B">3B</label> </td>
          <td> <input type="checkbox" id="3C" />
              <label for="2C">3C</label> </td>
          <td> <input style ="margin-left: 60px;" type="checkbox" id="3D" />
              <label for="3A">3D</label> </td>
          <td> <input type="checkbox" id="3E" />
              <label for="3E">3E</label> </td>
          <td> <input type="checkbox" id="3F" />
              <label for="3F">3F</label> </td>
      </tr>
      <br>
      <tr>
          <td> <input type="checkbox" id="4A" />
              <label for="4A">4A</label> </td>
          <td> <input type="checkbox" id="4B" />
              <label for="4B">4B</label> </td>
          <td> <input type="checkbox" id="4C" />
              <label for="4C">4C</label> </td>
          <td> <input style ="margin-left: 60px;" type="checkbox" id="4D" />
              <label for="4A">4D</label> </td>
          <td> <input type="checkbox" id="4E" />
              <label for="4E">4E</label> </td>
          <td> <input type="checkbox" id="4F" />
              <label for="4F">4F</label> </td>
      </tr>
      <br>
      <tr>
          <td> <input type="checkbox" id="5A" />
              <label for="5A">5A</label> </td>
          <td> <input type="checkbox" id="5B" />
              <label for="5B">5B</label> </td>
          <td> <input type="checkbox" id="5C" />
              <label for="5C">5C</label> </td>
          <td> <input style ="margin-left: 60px;" type="checkbox" id="5D" />
              <label for="5A">5D</label> </td>
          <td> <input type="checkbox" id="5E" />
              <label for="5E">5E</label> </td>
          <td> <input type="checkbox" id="5F" />
              <label for="5F">5F</label> </td>
      </tr>
      <br>
      <tr>
          <td> <input type="checkbox" id="46" />
              <label for="6A">6A</label> </td>
          <td> <input type="checkbox" id="6B" />
              <label for="6B">6B</label> </td>
          <td> <input type="checkbox" id="6C" />
              <label for="6C">6C</label> </td>
          <td> <input style ="margin-left: 60px;" type="checkbox" id="6D" />
              <label for="6A">6D</label> </td>
          <td> <input type="checkbox" id="6E" />
              <label for="6E">6E</label> </td>
          <td> <input type="checkbox" id="6F" />
              <label for="6F">6F</label> </td>
      </tr>
      <br>
      <tr>
          <td> <input type="checkbox" id="7A" />
              <label for="7A">7A</label> </td>
          <td> <input type="checkbox" id="7B" />
              <label for="7B">7B</label> </td>
          <td> <input type="checkbox" id="7C" />
              <label for="7C">7C</label> </td>
          <td> <input style ="margin-left: 60px;" type="checkbox" id="7D" />
              <label for="3A">7D</label> </td>
          <td> <input type="checkbox" id="7E" />
              <label for="7E">7E</label> </td>
          <td> <input type="checkbox" id="7F" />
              <label for="7F">7F</label> </td>
      </tr>
      <br>
      <tr>
          <td> <input type="checkbox" id="8A" />
              <label for="8A">8A</label> </td>
          <td> <input type="checkbox" id="8B" />
              <label for="8B">8B</label> </td>
          <td> <input type="checkbox" id="8C" />
              <label for="8C">8C</label> </td>
          <td> <input style ="margin-left: 60px;" type="checkbox" id="8D" />
              <label for="8A">8D</label> </td>
          <td> <input type="checkbox" id="8E" />
              <label for="8E">8E</label> </td>
          <td> <input type="checkbox" id="8F" />
              <label for="8F">8F</label> </td>
      </tr>
      <br>
      <tr>
          <td> <input type="checkbox" id="9A" />
              <label for="9A">9A</label> </td>
          <td> <input type="checkbox" id="4B" />
              <label for="9B">9B</label> </td>
          <td> <input type="checkbox" id="9C" />
              <label for="9C">9C</label> </td>
          <td> <input style ="margin-left: 60px;" type="checkbox" id="9D" />
              <label for="9A">9D</label> </td>
          <td> <input type="checkbox" id="9E" />
              <label for="9E">9E</label> </td>
          <td> <input type="checkbox" id="9F" />
              <label for="9F">9F</label> </td>
      </tr>
      <br>
    </tabel>
    <br>


  <form action="SeatBooking.php" method="POST">
    <fieldset>
        <legend style="color:red" >Sign Up Form</legend>
        <table style="color:blue">
            <tr>
                <td colspan="6">First Name <br>
                    <input type="text" name="fn">
                </td>
            </tr>
            <tr>
                <td colspan="6">Last Name <br>
                    <input type="text" name="ln">	
                </td>
            </tr>
            <tr>
                <td colspan="2">Email Address<br>
                    <input type="text" name="email">
                </td>
                <td colspan="2">Mobile Number<br>
                    <input type="text" name="mobile">
                </td>
            </tr>
            
            <tr>
                <td colspan="2">Country<br>
                    <input type="text" name="country">

                    </td>
                <td colspan="2">Seat No:<br>
                    <input type="text" name="seatno">
                </td>

                </td>
                <td>
                    <input type="radio" name="gen" value="Male"> Male
                    <input type="radio" name="gen" value="Female"> Female
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="sub"  style="color:blue" >Confirm</button>
					
                </td>
                <td colspan="3">
                    <input type="reset" name="res" value="Clear All" style="color:blue">
                </td>
            </tr>
        </table>
    </fieldset>
</form>

  </div>
  </center>
  <br>
  <div class="ibutton">
  <input type="submit" name="Confirm" value = "Confirm" style="color:red;">
  <input type="submit" name="Back" value = "Back" style="color:red;">
  </div>




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