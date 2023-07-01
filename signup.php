<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
	<div class="logo">
		<a href="index.php"><img src="img/Untitled-1-Recovered.png" style="width: 300px; height: 70px;"/></a>
	</div>

	<div class="login">

		<form method="post" action="insert.php">
			<h3>Sign Up Here</h3>
			<label>Type username</label>
			<input type="text" id="username" name="username" placeholder="User Name" required>

			<label>Enter email</label>
			<input type="email" id="eml" name="email" placeholder="Type Email" required></br>

			<lable>Type a password</label>
			<input type="password" id="passcode" name="password" placeholder="Password" required></br>



			<input type="submit" id="msg" value="Sign Up">
			<input type="reset" value="Clear"></br>


			<script>
				document.getElementById("msg").onclick = function(){
				alert("Details Added Successfully");
					}
			</script>

			<center><a href="login.php">Log In</a></center>
		</form>
	</div>
</body>


</html>