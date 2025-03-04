<?php 
include("con1.php");
$id=$_POST['id'];
$itemname=$_POST['itemname'];
$Company=$_POST['Company'];
$size=$_POST['size'];
$price=$_POST['price'];
$image=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"image_project/".$image);
$query="UPDATE `items` SET `Itemname` = '$itemname', `Company` = '$Company', `price` = '$price', `image` = '$image' 
WHERE `items`.`id` = $id";
mysqli_query($con,$query);
header("location:itemmaster.php");
if($result==NULL)
{?>
<script>
	alert("Record Not Updated");
	window location="itemmaster.php";
</script>
<?php
}
else
{
	header("location:itemmaster.php");
}
?>