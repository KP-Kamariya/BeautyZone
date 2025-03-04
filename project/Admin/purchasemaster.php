<!DOCTYPE html>
<head>
    
    <title>BeautyZone</title>
</head>

<body>
  
<div align="center" marginheight="1">
     <img src="image_project/LOGO.png"></img></div>    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    
    <script src="js/main.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <a href="home.php"><h1><b>Home</b></h1></a>  
<?php

include("con1.php");
$query="select * from purchase";
$result=mysqli_query($con,$query);

echo"<table align='center' border='5' >
<h1 align='center'><font color='000000' size='+3'><u> PURCHASE MASTER </u></font></h1>
<th><font color='FF8080' size='+1'><ul>Id</ul></font></th>
<th><font color='FF8080' size='+1'><ul>Name</font></ul></th>
<th><font color='FF8080' size='+1'><ul>Address</font></ul></th>
<th><font color='FF8080' size='+1'><ul>City</font></ul></th>
<th><font color='FF8080' size='+1'><ul>Itemname</font></ul></th>
<th><font color='FF8080' size='+1'><ul>Total</font></ul></th>
<th><font color='FF8080' size='+1'><ul>Payment</font></ul></th>
<th><font color='FF8080' size='+1'><ul>Delete</font></ul></th>";

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
echo $row["itemname"];
echo "</td><td>";
echo $row["total"];
echo "</td><td>";
echo $row["payment"];
echo "</td><td>
<a href='purchasedelete.php?id=".$row[0]."'><font color='FF8080'size='5'><ul>Delete</ul></font></a></td>";
}
echo"</tr></table>";
?>


</div>
<br><br><br><br><br>
<font size="+3" color="white">
<div>
<marquee behavior="alternate" bgcolor="#FF8080" height="+10">
        &copy; BeautyZone, All Right Reserved.
</marquee>
</div>
</font>
</body>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

</body>
</html>
