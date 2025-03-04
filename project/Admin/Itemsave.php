<?php
include("con1.php");
$itemname=$_POST['itemname'];
$category=$_POST['Company'];
$price=$_POST['price'];
$image=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"image_project/".$image);
mysqli_query($con,"INSERT INTO `items`( `itemname`,`Company`, `price`, `image`) 
VALUES ('$itemname','$Company', '$price', '$image')"); 
header("location:itemmaster.php");
?>
 

	