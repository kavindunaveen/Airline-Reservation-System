<?php
   
$servername = "localhost";
$username = "root";
$password ="";
$database = "revolt airline";

$connection = new mysqli($servername,$username,$password,$database);

if($connection->connect_error){
   die("Connection failed:");
}
else{
   echo"Connection Ok";
}

?>