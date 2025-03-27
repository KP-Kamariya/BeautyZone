 


<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>BeautyZone</title>
	
	<script type="text/javascript">
function validateForm()
{
var a=document.forms["loin"]["username"].value;
var b=document.forms["login"]["password"].value;

if ((a==null || a=="") && (b==null || b=="")


if (a==null || a=="")
{
	alert("username must be filled out");
	return false;
}
if (b==null || b=="")
{
alert("password must be filled out");
return false;
}

if(b.length<5)
{
	alert("password should be atleast 5 characters.");
	return false;
}
if(!(b.match(/^[a-z,0-9][\w-]*$/i)))
{
	alert("Password can not contain any special character or spaces except '_' or '-' . ");
	return false;
}
}
</script>
   
</head>

<body>
    
<?php include("header.php"); ?>
    <!-- /Slider -->

<?php
include("con1.php");
$id=$_GET['id'];
$query="select * from login where id=$id";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<br><br>
<form action="logineditsave.php" method="post" enctype="multipart/form-data"
name="login" onSubmit="return validateForm()">

<h1 align="center"><font size="+6" color="#000000"><b><u> Admin login </u></b></font></h1>

<table align="center">
<tr>
<td><font size="+3" color="#FF8080"><b> Username </b></font></td>
<td><input type="text" name="username" value="<?php echo $row['1'];?>"></td>
</tr>
<tr>
<td><font size="+3" color="#FF8080"><b> Password </b></font></td>
<td><input type="password" name="password" value="<?php echo $row['2'];?>"></td>
</tr>

<tr>
<td align="center" bgcolor="#FF8080" colspan="+2"><input name="submit" type="submit" value="UPDATE"> 
      </td>
</tr>
</table>
<br><br><br>
<font size="+3" color="white">
<div>
<marquee behavior="alternate" bgcolor="#FF8080" height="+10">
        &copy; BeautyZone, All Right Reserved.
</marquee>
</div>
</font>
</form>
<?php
}
?>
</html>
</body>
</html>

