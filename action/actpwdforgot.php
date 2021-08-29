<?php
include("config.php");

$email=$_POST['email'];

$sql = "SELECT * FROM user WHERE email = '$email' ";
$result = mysqli_query($cx, $sql);
$data = mysqli_fetch_array($result);
$pwd=$data['pwd'];

// the message
$msg = "Hello your email is $email and your password is  $pwd ";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,1500);

// send email
mail($email,"My subject",$msg);
header('location: ../index.php');

?>