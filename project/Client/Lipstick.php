<?php
include("header1.php") 
?>

      <!-- items -->
        
  <br>      
<?php
include("con1.php");
$query="select *from items where itemname='Lipstick'";
$result=mysqli_query($con,$query);

echo"<table align='center' style='margin-left:100px'>
<h1 align='center'><font color='#FF8080' size='+3'>Lipstick</h1>";
while($row=mysqli_fetch_array($result))
{

echo "<td>";
echo " <img src='image_project/$row[4]' height=300 width=300 >"; 
echo "<br>";
echo "<font size='+2'>";
echo $row["itemname"];
echo "<br>";



echo $row["price"];
echo "<br>";
echo "</font>";
echo "<a href='addtocart.php?id=".$row[0]."'><font color='#FF8080' size='+3'><ul>Add to Cart</ul></font></a>";
echo "</td>";

}


echo"</tr>";
echo"<br>";

echo"</table>";
?>
  
<?php
include("footer1.php") 
?>
