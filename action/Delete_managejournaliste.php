<?php
include("config.php");
include('../session.php');
$id=$_GET['id'];
$query = "DELETE  from user  where id='$id' ";
    mysqli_query($cx, $query);
  header('location: ../adminpanel.php');



?>