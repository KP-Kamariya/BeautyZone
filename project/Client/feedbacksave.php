
 
<?php
include("con1.php");
$name=$_POST['nm'];
$city=$_POST['city'];
$mno=$_POST['mno'];
$email=$_POST['email'];
$feedback=$_POST['feed'];
mysqli_query($con,"INSERT INTO `feedback` (`name`, `city`, `mno`, `email`, `feedback`)VALUES ( '$name', '$city', '$mno', '$email', '$feedback')");
header("location:index.php");
?>


	
