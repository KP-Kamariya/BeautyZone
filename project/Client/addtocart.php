<?php
session_start();
if(!isset($_SESSION['username']))
	header("location:login.php");
else
{
?>
<?php
include("header1.php") 
?>

<?php

$id=$_GET['id'];
$query="select * from items where id=".$id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<form method="post" action="purchase.php">
<table>
<td>
<input type="hidden" name="id" value="<?php echo $id;?>"/>
<label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;itemname</h4></label>
</td>
<td><input type="hidden" name="itemname" value="<?php echo $row['1'];?>"/>
    <span style="font-size :25px;">
        <?php echo htmlspecialchars($row['1'], ENT_QUOTES, 'UTF-8'); ?>
    </span>
</td>
</tr>
<tr>
<td>
<label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;price</h4></label>
</td>
<td>
<input type="hidden"name="price" height="100%" value="<?php echo $row['3'];?>"/>
    <span style="font-size :25px;">
        <?php echo htmlspecialchars($row['3'], ENT_QUOTES, 'UTF-8'); ?>
    </span>
</td>
</tr>
<tr>
<td>
<label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity</h4></label>
</td>
<td><font size='+2'>
<input type="number" min="1" max="100" value="1" class="qty" name="quantity">
</td>
</tr>
<tr>
<td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="<?php echo "image_project/$row[4]"?>" height=200 width=200 name="image"/>
<?php
$img="image_project/$row[4]";
?>
<input type="hidden" name="image" value="<?php echo $img;?>"/>
</td>
</tr>
<br><br>
<tr>
<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input align="middle" name="Add to cart" type="submit" value="Add to cart"  class="btn credit-btn box-shadow">
</td>
</tr>
</font>
</table>
</form>
</div>
</section> <br><br><br><br><br>
<?php
}
?>
<?php
include("footer1.php") 
?>
<?php }?>
