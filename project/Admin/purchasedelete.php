

<?php
include("con1.php");
$id=$_GET['id'];
$name=$_GET['name'];
$address=$_GET['address'];
$city=$_GET['city'];
$itemname=$_GET['itemname'];
$total=$_GET['total'];
$payment=$_GET['payment'];
$query="DELETE FROM `purchase` WHERE `purchase`.`id` = '$id'";
mysqli_query($con,$query);
header("location:purchasemaster.php");
?>

