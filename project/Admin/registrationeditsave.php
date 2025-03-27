 

<?php
include("con1.php");
$id=$_POST['id'];
$name=$_POST['nm'];
$address=$_POST['address'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];
$country=$_POST['country'];
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$mno=$_POST['mno'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$query="UPDATE `registration` SET `name` = '$name', `address` = '$address', 
`city` = '$city', `pincode` = '$pincode', `state` = '$state', `country` = '$country',
 `username` = '$username', `password` = '$password', `gender` = '$gender', `mno` = '$mno', 
 `email` = '$email', `dob` = '$dob' WHERE `registration`.`id` = $id";

mysqli_query($con,$query);
header("location:registrationmaster.php");
?>

