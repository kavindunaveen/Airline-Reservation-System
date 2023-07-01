<?php @include 'conn.php'; ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel ="stylesheet" href="css/pasindu.css">
</head>
<body>
    <div class="Login-form">
        <h2>ADMIN LOGIN PANEL</h2>
          <form method="POST" autocomplete = "off" action ="">
              <div class="input-field">
                   <i class="fas fa-user"></i>
                   <input type="text" placeholder="User Name" name ="idname">   
              </div>
              
              <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Password" name ="passcode">
              </div>
              
              <button type="submit" name ="submit">Sign In</button>
              
              <div class="fogot">
                  <a href="#">Forgot Password ?</a>
              </div>
          </form>    

        </div>

<?php
    if(isset($_POST['submit']))
    {

        
        $user = input_verifly($_POST['idname']);
        $pass = input_verifly($_POST['passcode']);
        

      $query ="SELECT * FROM admin_login WHERE user_Name = '{$user}' AND pwd = '{$pass}'";
   
      $result = mysqli_query($conn,$query);
      
      
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['AdminLoginID']=$_POST['AdminName'];
            header("location:admin panel.php");  
        }
        else
        {
            echo "incorrect";
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




</body>
</html>
