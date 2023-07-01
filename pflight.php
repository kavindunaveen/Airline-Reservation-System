<?php 

@include 'conn.php';

   if(isset($_POST['add_Flight']))
   {
      //declaring variables
      $Fno = "";
      $Fcountry = "";
      $Fmodel = "";

      $Fno = input_verifly($_POST['F_No']);
      $Fcountry = input_verifly($_POST['country']);
      $Fmodel = input_verifly($_POST['F_model']);

      $query = "INSERT INTO admin_flight(f_no,f_country,f_model,Reg_DT) VALUES(
         '{$Fno}','{$Fcountry}','{$Fmodel}',NOW()
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
   <title>Flight detail without php</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel ="stylesheet" href="css/pasindu.css">

</head>
<body>


    <div class="container">

        <div class="admin-Flight-form-container">
     
           <form action="pflight.php" method="POST" autocomplete = "off">
              <h3>add a new Flight</h3>
              <input type="text" placeholder="enter Flight No" name="F_No" class="box">
              <input type="text" placeholder="enter Flight Country" name="country" class="box">
              <input type="text" placeholder="enter Flight Model" name="F_model" class="box">
              <input type="submit" class="btn" name="add_Flight" id ="add_Flight" value="add Flight">
           </form>
     
        </div>

     </div>
     
     
</body>
</html>