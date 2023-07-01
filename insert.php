<?php

include 'config.php';

$user_name= $_POST['username'];
$user_email=$_POST['email'];
$user_password=$_POST['password'];

$sql ="insert into user(user_name,user_email,user_password) values(?,?,?)";
$statment = $connection ->prepare($sql);

$statment->bind_param("sss",$user_name, $user_email,$user_password);

$statment->execute();
?>