<?php
session_start();
if(!isset($_SESSION['username']))
header("location:login.php");
else
{
?>

<?php
include("con1.php");
$user=$_SESSION['username'];
$tot=$_POST['tot'];
$itemname=$_POST['itemname'];
$q1="select * from registration where username='$user'";
$res=mysqli_query($con,$q1);

while($row=mysqli_fetch_array($res))
{
$name= $row['1'];
$add=$row['2'];
$city= $row['3'];
}

mysqli_query($con,"INSERT INTO `purchase` (`name`, `address`, `city`, `itemname`, `total`, `payment`) VALUES ('$name', '$add', '$city', '$itemname', '$tot', '$tot');");
$q="delete from addtocart where username='$user'";
mysqli_query($con,$q);
//header("location:index.php");
?>
<script type="text/javascript">
alert("Congratulations! your order is conformed....");
window.location.href="index.php";
</script>



<?php
}
?>