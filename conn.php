<?php 

    //defining host
    $host = "localhost";
    //define username
    $username = "root";
    //define password
    $password = "";
    //define database
    $database ="revolt airline";

    $conn = mysqli_connect($host,$username,$password,$database);


    if(!$conn){
        die("<script>alert('Connection Failed.')</script>");
    }
    else{
        echo "Connected";
    }
?>