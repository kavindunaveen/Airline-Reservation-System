

<?php

@include 'conn.php';

 if(isset($_POST['add_Emp']))
 {
    //Declaring varibles
      $empName = "";
      $empNo ="";
      $empfNo ="";
     

      $empName = input_verifly($_POST['Emp_name']);
      $empNo = input_verifly($_POST['Emp_No']);
      $empfNo = input_verifly($_POST['Emp_PhoneNo']);
   

      $query ="INSERT INTO admin_emp(emp_no,name,phone,Reg_DT) VALUES(
         '{$empNo}','{$empName}',{$empfNo},NOW()
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
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel ="stylesheet" href="css/pasindu.css">

</head>
<body>

   <div class="container">

      <div class="admin-Emp-form-container">

         <form action="emp.php" method="POST" autocomplete = "off" >
            <h3>add a new Employee</h3>
            <input type="text" placeholder="enter Emp name" name="Emp_name" id = "Emp_name"  class ="box">
            <input type="text" placeholder="enter Emp No" name="Emp_No" id = "Emp_No"  class="box">
            <input type="tel" placeholder="enter Emp Phone Number" name="Emp_PhoneNo" id ="Emp_PhoneNo" class="box">
            <input type="submit" class="btn" name="add_Emp" id = "add_Emp"  value="add Emp">
         </form>

      </div>


   </div>


</body>
</html>