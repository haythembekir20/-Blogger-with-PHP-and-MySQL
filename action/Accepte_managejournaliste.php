
<?php
include("config.php");
include('../session.php');
$id=$_GET['id'];
$query = "UPDATE user SET active='1'  where id='$id' ";
    mysqli_query($cx, $query);
  header('location: ../adminpanel.php');




?>