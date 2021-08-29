<?php
   if (session_id() == "")
   {
      session_start();
   }
   include("config.php");
$email=$_POST['email'];
$pass = $_POST['password'];
$sql = "SELECT username FROM user WHERE email = '$email' and pwd = '$pass'";
$result = mysqli_query($cx, $sql);
$data = mysqli_fetch_array($result);
$username=$data['username'];
session_start();

$count = mysqli_num_rows($result);
$_SESSION["username"]=$username;

if($count == 1){
   $session_timeout = 600;
   $_SESSION['expires_by'] = time() + $session_timeout;
   $_SESSION['expires_timeout'] = $session_timeout;

   $_SESSION["username"]=$username;
   setcookie('username', $username, time() + 3600*24*30);
  
   header('location: ../home.php');

} 
else{
   header('location: ../index.php');
}

  
?>