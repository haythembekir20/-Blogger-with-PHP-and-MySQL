<?php
session_start();
include('config.php');
$titre=$_POST['titre'];
$des=$_POST['description'];
$id=$_SESSION['id'];
echo $titre ;
echo $des ; 
echo $id ;
$query = "UPDATE topic SET titre='$titre' , description='$des'  where id='$id' ";
    mysqli_query($cx, $query);
  header('location: ../managetopic.php');

?>