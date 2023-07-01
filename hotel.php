

<?php 

@include 'conn.php';


   if(isset($_POST['add_Hotel']))
   {
      //Declaring variables
      $hotelNo = "";
      $country = "";
      $hotelname = "";


      $hotelNo =input_verifly($_POST['Hotel_No']); 
      $country = input_verifly($_POST['Country']);
      $hotelname = input_verifly($_POST['Hotel_name']);

      $query ="INSERT INTO admin_hotel(hotel_no,hotel_name,hotel_country,Reg_DT) VALUES(
         '{$hotelNo}','{$hotelname}','{$country}',NOW()
         )";
   

      $result = mysqli_query($conn,$query);

      if(!$result){
            echo "User Registrantion Success!";
      }
      else{
         echo mysqli_error($conn);
      }

      
   }

   function input_verifly($data){
      $data = trim($data);
      //Remove Empty space from user input
      $data = stripcslashes($data);
      //Remove back slash from user input
      $data = htmlspecialchars($data);
      //convert special chars to html enetities

      return $data;
   }




?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hotel detail without php</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel ="stylesheet" href="css/pasindu.css">

</head>
<body>


    <div class="container">

        <div class="admin-Hotel-form-container">
     
           <form action="hotel.php" method="post">
              <h3>add a new Hotel</h3>
              <input type="text" placeholder="enter Hotel No" name="Hotel_No" class="box">
              <input type="text" placeholder="enter Hotel Country" name="Country" class="box">
              <input type="text" placeholder="enter Hotel name" name="Hotel_name" class="box">
              <input type="submit" class="btn" name="add_Hotel" value="add Hotel">
           </form>
     
        </div>     
     </div>
     
     
</body>
</html>