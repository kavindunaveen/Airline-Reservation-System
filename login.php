<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="logo">
        <a href="index.php"><img src="img/Untitled-1-Recovered.png" style="width: 300px; height: 70px;"/></a>
    </div>

<div class="login">
    <form name="loginForm" method = "post">
        <h3>Login Here</h3>
        <label for="username">Username</label>
            <input type="text" id="username" placeholder="Email or Phone" required></br>

        <lable for="password">Password</label>
            <input type="password" id="password" placeholder="Password" required></br>

            <input type="submit" onclick="login(loginForm)" value="Log In">
            <input type="reset" value="Clear"></br></br>

            <center><a href="signup.php">Sign Up</a></center>
        </form>
</div>

</body>

<script type="text/javascript">
    function login(loginForm)
    {
        if(loginForm.username.value && loginForm.password.value)
        {
            var username=document.getElementById("username").value;
document.write('<html><body style="background-image: url(img/12_Edits-stock-background-Editing-background-download-free.jpg);background-repeat: no-repeat;background-size: cover;"><h1 style="color:white; font-size: 30px; font-family: "Cascadia Code";"><center>')
document.write("Welcome" + " ");
document.write(username);
document.write('</br></br><a style=" font-size: 20px; color: #DBDADA;" href="home.php">Press continue</a>');
document.write('</center></h1></body></html>');
        }
        else
            alert("Please enter your username and password");
    }
</script>
</html>