<?php
include('config.php');
$id=$_GET['id'];

$sql=" DELETE  from topic where id ='$id'";
 mysqli_query($cx, $sql);
header('Location: ../managetopic.php');


?>