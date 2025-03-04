<!DOCTYPE html>
<head>
    
    <title>BeautyZone</title>
</head>

<body>
  
<div align="center" >
     <img src="image_project/LOGO.png"></img></div>

    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    
    <script src="js/main.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <a href="home.php"><h1><b>Home</b></h1></a>  
<?php

include("con1.php");
$query="select * from registration";
$result=mysqli_query($con,$query);

echo"<table align='center' border='5' >
<h1 align='center'><font color='black' size='+5'><u> REGISTRATION MASTER </u></font></h1>
<th><font color='FF8080' size='+2'><ul>Id</ul></font></th>
<th><font color='FF8080' size='+2'><ul>Name</font></ul></th>
<th><font color='FF8080' size='+2'><ul>Address</font></ul></th>
<th><font color='FF8080' size='+2'><ul>City</font></ul></th>
<th><font color='FF8080' size='+2'><ul>Pincode</font></ul></th>
<th><font color='FF8080' size='+2'><ul>State</font></ul></th>
<th><font color='FF8080' size='+2'><ul>Country</font></ul></th>
<th><font color='FF8080' size='+2'><ul>Username</font></ul></th>
<th><font color='FF8080' size='+2'><ul>Password</font></ul></th>
<th><font color='FF8080' size='+2'><ul>Gender</font></ul></th>
<th><font color='FF8080' size='+2'><ul>Mobileno</font></ul></th>
<th><font color='FF8080' size='+2'><ul>Email</font></ul></th>
<th><font color='FF8080' size='+2'><ul>Birthdate</font></ul></th>
<th><font color='FF8080' size='+2'><ul>Delete</font></ul></th>";
while($row=mysqli_fetch_array($result))
{
echo"<tr><td>";
echo $row["id"];
echo "</td><td>";
echo $row["name"];
echo "</td><td>";
echo $row["address"];
echo "</td><td>";
echo $row["city"];
echo "</td><td>";
echo $row["pincode"];
echo "</td><td>";
echo $row["state"];
echo "</td><td>";
echo $row["country"];
echo "</td><td>";
echo $row["username"];
echo "</td><td>";
echo $row["password"];
echo "</td><td>";
echo $row["gender"];
echo "</td><td>";
echo $row["mobileno"];
echo "</td><td>";
echo $row["email"];
echo "</td><td>";
echo $row["dob"];     
echo "</td><td>
<a href='registrationdelete.php?id=".$row[0]."'><font color='FF8080'size='5'><ul>Delete</ul></font></a></td>";
}
echo"</tr></table>";
?>


<?php include("footer.php"); ?>  
