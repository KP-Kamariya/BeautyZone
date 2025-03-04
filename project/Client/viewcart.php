<?php
session_start();
if(!isset($_SESSION['username']))
	header("location:login.php");
else
{
?>
<?php include("header1.php")?>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["viewcart"]["quantity"].value;
if (a==null || a=="")

{
  alert("quantity must be filled out");
  return false;
}

</script>

<!-- ##### Call To Action Start ###### -->
    <section class="cta-area d-flex flex-wrap">
        <!-- Cta Thumbnail -->
        <div class="cta-thumbnail bg-image jarallax" style="background-image: url(image/bg-image/21.jpg);"></div>

        <!-- Cta Content -->
<form id="form1" method="post" action="deletecart.php">
<table>
<?php
include("con1.php");
$tot=0;
$username=$_SESSION['username'];
$query="select * from addtocart where username='$username'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<tr><td rowspan="5"><img src="<?php echo $row[5]?>" height="200" width="200"></td></tr>
<tr><td><span style="font-size :25px;">
        <?php echo htmlspecialchars($row['1'], ENT_QUOTES, 'UTF-8'); ?>
   </span></font></td></tr>
<tr><td>
    <span style="font-size :25px;">
        <?php echo htmlspecialchars($row['2'], ENT_QUOTES, 'UTF-8'); ?>
    </span>
</td></tr>
<tr><td>
    <span style="font-size :25px;">
        <?php echo htmlspecialchars($row['3'], ENT_QUOTES, 'UTF-8'); ?>
   </span></td></tr>
<tr><td><span style="font-size :25px;">
        <?php echo htmlspecialchars($row['4'], ENT_QUOTES, 'UTF-8'); ?>
   </span></td></tr>
<tr><td>
<?php echo "<a href='deletecartitem.php?id=".$row['0']."'><h4 ><font color='black'>Delete</font></h4></a>"?>
</td></tr>
<?php
$a=$row['4'];
$tot=$tot+$a;
?><?php
}
?>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='#FF8080' size='+3'>Total Amount=</font>
<td><font color='black' size='+3'><?php echo $tot;?></font></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input align="middle" name="submit" value="purchase"/id="bt" type="submit"class="btn credit-btn box-shadow">
</td>
</tr>
</table>
</form>
</div>
    </section>
<?php include("footer1.php")?>
<?php }?>  