
<?php
include('../session.php');
include("config.php");

$comment=$_POST['comment'];
$idtopic=$_GET['idtopic'];

$sql="INSERT INTO comments ( `name`, `comment`, `idtopic`) VALUES($email','$comment','$idtopic') ";
mysqli_query($cx, $sql);
header("location: ../post.php?id=".$idtopic);

?>