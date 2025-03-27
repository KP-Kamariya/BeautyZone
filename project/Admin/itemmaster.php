
<?php include("header.php"); ?>  
<?php
?>
</body>
</html>
<a href="home.php"><h1><b>Home</b></h1></a>  
<?php
include("con1.php");
$query="select *from items";
$result=mysqli_query($con,$query);
echo"<table border='5' align='center'>
<h1 align='center'><font color='000000' size='+5'><u> ITEM MASTER </u></font></h1>

<th><font color='FF8080' size='+2'><ul>Id</font></ul></th>
<th><font color='FF8080' size='+2'><b><ul>Itemname</font></ul></th>
<th><font color='FF8080' size='+2'><b><ul>Company</font></ul></th>
<th><font color='FF8080' size='+2'><b><ul>Price</font></ul></th>
<th><font color='FF8080' size='+2'><b><ul>Image</font></ul></th>
<th><font color='FF8080' size='+2'><b><ul>Edit</font></ul></th>
<th><font color='FF8080' size='+2'><b><ul>Delete</font></ul></th>";
while($row=mysqli_fetch_array($result))
{
echo"<tr><td>";
echo $row["id"];
echo "</td><td>";
echo $row["itemname"];
echo "</td><td>";
echo $row["company"];
echo "</td><td>";
echo $row["price"];
echo "</td><td>";
echo "<img src='image_project/$row[4]' height=100 width=100 style='margin-left:5px'>";    
echo "</td><td><a href='itemedit.php? id=".$row[0]."'><font color='FF8080'><ul> Edit </ul></font></a></td>
<td><a href='itemdelete.php?id=".$row[0]."'><font color='FF8080'><ul> Delete </ul></font></a></td>";
}
echo"</tr>";
echo"<br>";
echo"<td colspan='10' align='center'><a href='item.php'><h1><font color='FF8080'><ul> Insert New Item </ul></font></h1></a></td>";
echo"</table>";
?>

<?php include("footer.php"); ?>  


	