 <?php
include("con1.php");
$id=$_GET['id'];
$query="DELETE FROM `items` WHERE `items`.`id` = $id";
mysqli_query($con,$query);
header("location:itemmaster.php");
?>


	