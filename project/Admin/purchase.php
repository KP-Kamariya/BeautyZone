<?php
session_start();
if(!isset($_SESSION['username']))

	header("location:login.php");
else
{
?>
<?php
include("con1.php");
$id=$_POST['id'];
$itemname=$_POST['itemname'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$tot=$price*$quantity;
$username=$_SESSION['username'];
echo $tot;
$image=$_POST['image'];
$q="INSERT INTO `addtocart` (`itemname`, `price`, `quantity`, `total`, `image`, `username`)VALUES ('$itemname', '$price', '$quantity', '$tot', '$image', '$username');";
mysqli_query($con,$q);
header("location:viewcart.php");
?>
<?php }?>

