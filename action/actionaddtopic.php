
<?php

include("config.php");
include('../session.php');
$titre=$_POST['titre'];
$description=$_POST['description'];
$genre=$_POST['genre'];

if(isset($_FILES['img'])){
    $file_name = $_FILES['img']['name'];
    $file_size =$_FILES['img']['size'];
    $file_tmp =$_FILES['img']['tmp_name'];
    $file_type=$_FILES['img']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['img']['name'])));     
    move_uploaded_file($file_tmp,"../images/".$file_name);   
 }

//$_SESSION['username']=$name;
$date=date("Y/m/d");
$query = "INSERT INTO topic (titre, description, genre,journlist,date,img) 
                VALUES('$titre', '$description', '$genre','$email','$date','$file_name')";
                
    mysqli_query($cx, $query);
    header('location: ../topic.php');

?>