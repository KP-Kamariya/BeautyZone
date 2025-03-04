 

<!DOCTYPE html><head>
<body>
<div align="center" marginheight="1">
     <img src="image_project/LOGO.png"></img></div>

				
    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    
    <a href="home.php"><h1><b>Home</b></h1></a>  
<?php
include("con1.php");
$query="select * from feedback";
$result=mysqli_query($con,$query);

echo"<table border='5' align='center'>
<h1 align='center'><font color='black' size='+5'><u> FEEDBACK MASTER </u></font></h1>
<th><font color='FF8080' size='+2'><ul >Id </font></ul></th>
<th><font color='FF8080'  size='+2'><ul> Name </font></ul></th>
<th><font color='FF8080'  size='+2'><ul> City </font></ul></th>
<th><font color='FF8080'  size='+2'><ul> Mo.no </font></ul></th>
<th><font color='FF8080'  size='+2'><ul> Email </font></ul></th>
<th><font color='FF8080'  size='+2'><ul> Feedback </font></ul></th>
<th><font color='FF8080'  size='+2'><ul> Delete </font></ul></th>";
while($row=mysqli_fetch_array($result))
{
echo"<tr><td>";
echo $row["id"];
echo "</td><td>";
echo $row["name"];
echo "</td><td>";
echo $row["city"];
echo "</td><td>";
echo $row["mno"];
echo "</td><td>";
echo $row["email"];
echo "</td><td>";
echo $row["feedback"];     
echo"</td>
<td><a href='feedbackdelete.php? id=".$row[0]."'><font color='#FF8080'><ul> Delete </ul></font></a></td>";
}
echo"</tr></table>";
?>


<br><br><br><br>
<font size="+3" color="white">
<div>
<marquee behavior="alternate" bgcolor="#FF8080" height="+10">
        &copy; BeautyZone, All Right Reserved.
</marquee>
</div>
</font>
</body>
</html>

	