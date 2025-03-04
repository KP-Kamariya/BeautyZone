<?php include("header.php"); ?>  
    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    
    <script src="js/main.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <a href="home.php"><h1><b>Home</b></h1></a>  
<?php

include("con1.php");
$query="select * from addtocart";
$result=mysqli_query($con,$query);

echo"<table align='center' border='5' >
<h1 align='center'><font color='#000000' size='+3'><u> ADDTOCART MASTER </u></font></h1>
<th><font color='FF8080' size='+1'><ul>Id</ul></font></th>
<th><font color='FF8080' size='+1'><ul>Itemname</font></ul></th>
<th><font color='FF8080' size='+1'><ul>Price</font></ul></th>
<th><font color='FF8080' size='+1'><ul>Quantity</font></ul></th>
<th><font color='FF8080' size='+1'><ul>Total</font></ul></th>
<th><font color='FF8080' size='+1'><ul>Image</font></ul></th>
<th><font color='FF8080' size='+1'><ul>Username</font></ul></th>
<th><font color='FF8080' size='+1'><ul>Delete</font></ul></th>";
;

while($row=mysqli_fetch_array($result))
{
echo"<tr><td>";
echo $row["id"];
echo "</td><td>";
echo $row["itemname"];
echo "</td><td>";
echo $row["price"];
echo "</td><td>";
echo $row["quantity"];
echo "</td><td>";
echo $row["total"];
echo "</td><td>";
echo "<img src='image_project/$row[5]' height=100 width=100 style='margin-left:5px'>";
echo "</td><td>";
echo $row["username"];
echo "</td><td>
<a href='addtocartdelete.php?id=".$row[0]."'><font color='FF8080'size='5'><ul>Delete</ul></font></a></td>";
}
echo"</tr></table>";
?>


<?php include("footer.php"); ?>  