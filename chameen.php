<?php 
	
	$host = "localhost";
	$username ="root";
	$password ="";
	$database ="revolt airline";
	
	$conn = mysqli_connect($host,$username,$password,$database);
	
	if(!$conn){
		die("Database connection faild " . mysqli_error($conn));
	}else{
		
	}
?>