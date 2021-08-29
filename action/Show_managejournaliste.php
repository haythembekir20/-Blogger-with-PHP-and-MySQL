
<?php
include("config.php");
include('../session.php');
$id=$_GET['id'];
$query = "SELECT * from user  where id='$id' ";
   $result= mysqli_query($cx, $query);
 $data=mysqli_fetch_array($result);
echo '<img src="../images/'.$data['image'].'">';

?>