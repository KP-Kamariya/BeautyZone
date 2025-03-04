<?php include("header.php"); ?>
<?php
include("con1.php");
$id=$_GET['id'];
$query="select*from iteams where id=".$id;
$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){ ?>
	<script type="text/javascript">
function validateForm()
{
var a=document.forms["addtocart"]["quantity"].value;

if ((a==null||a==""))
{
	alert("Quantity must be filled out");
 	 return false;
}
if(!(a.match(/^\d{1,3}$/)))
{
  alert("invalid quantity");
  return false;
}
}
</script>

<form id="form1" method="post" action="purchase.php"name="addtocart" onSubmit="return validateForm()">
                  <p> <table border="2" align="center" background="img/d13.jpg" ><tr><td>
                    <label><font size="+3"color="#000033">&nbsp;Name</font></label></td><td>
<font color="#000000"><input type="hidden" name="id" value="<?php echo $id;?>" /></font>
                    <font color="#000000"><input type="text" name="name"  value="<?php echo $row['1'];?>" /></font>
</td></tr><tr><td>                   
                    <label><font size="+3" color="#000033">&nbsp;Price</font></label>
                  </td><td>
                    <font color="#000000"><input type="text" name="price"  value="<?php echo $row['2'];?>" /></font>
                    </td></tr><tr><td>
                    <label><font size="+3"color="#000033">&nbsp;Quantity</font></label>
                    </td><td>
                   <font color="#000000"><input type="text" name="quantity"  /></font>
                    </td></tr>
                    <tr><td colspan="2">
				

                    <img src="<?php echo "../client/image_project/$row[4]" ?>" height=440 width=440>

<input type="hidden" name="image" value="<?php echo"../client/image_project/$row[4]"?>"/>
</td></tr>
<tr><td colspan="3" align="center" color="#000033">
<input  align="middle" name="purchase" type="submit" value="purchase" id="bt">
</td></tr>
</table></form>
<?php }?>
</table><?php include("footer.php"); ?>