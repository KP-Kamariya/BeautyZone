 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>BeautyZone</title>
	
	<script type="text/javascript">
function validateForm()
{
var a=document.forms["itm"]["itemname"].value;
var b=document.forms["itm"]["company"].value;
var d=document.forms["itm"]["price"].value;
var e=document.forms["itm"]["image"].value;

if ((a==null || a=="") &&  (d==null || d=="") && 
(e==null || e==""))
{
alert("All Field must be filled out");
return false;	
}
if (a==null || a=="")
{
alert("itemname must be filled out");
return false;
}
if (d==null || d=="")
{
alert("price must be filled out");
return false;
}
if (e==null || e=="")
{
alert("image must be filled out");
return false;
}		
}
</script>   
</head>
<body>
<div align="center" marginheight="1">
     <img src="image_project/LOGO.png"></img></div>   
	  <script src="js/vendor/jquery-1.9.1.min.js"></script>
    
    <script src="js/main.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <script type="text/javascript"> 
    $(function() {
        var Page = (function() {
            var $navArrows = $( '#nav-arrows' ),
            slitslider = $( '#slider' ).slitslider( {
                autoplay : true
            } ),
            init = function() {
                initEvents();
            },
            initEvents = function() {
                $navArrows.children( ':last' ).on( 'click', function() {
                    slitslider.next();
                    return false;
                });
                $navArrows.children( ':first' ).on( 'click', function() {
                    slitslider.previous();
                    return false;
                });
            };
            return { init : init };
        })();
        Page.init();
    });
    </script>
    


<?php
include("con1.php");
$id=$_GET['id'];
$query="select * from items where id=$id";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>

<form action="itemeditsave.php" method="post" enctype="multipart/form-data">

<h1 align="center"><font color='#000000' size='+5'><u> ITEMS EDIT </u></font></h1>
<table align="center" >
<tr>
<td><font color='FF8080' size='+3'> Id </font></td>
<td><input type="text" name="id"value="<?php echo $row['0'];?>"></td>
</tr>
<tr>
<td> <font color='FF8080' size='+3'> Itemname</td>
<td><select name="itemname" value="<?php echo $row['1'];?>">
           <option>--SELECT--  </option>
		 	<option>Compect</option>
		  	<option>Eyeshadow</option>
		  	<option>Foundation</option>
		  	<option>Lipstick</option>
		  
  
        </select> </td>
</tr>
<tr>
<td ><font color='FF8080' size='+3'> Company </font></td>
<td><select name="Company" value="<?php echo $row['2'];?>">
       <option>--SELECT--</option>
          <option>Sugar</option>
          <option>Huda</option>
          <option>Lakme</option>
          <option>Swiss Beauty</option>
  
        </select> </td>
</tr>
<tr>
<td><font color='FF8080' size='+3'> Price </font></td>
<td><input type="text" name="price" value="<?php echo $row['3'];?>"></td>
</tr>
<tr>
<td><font color='FF8080' size='+3'> Image </font></td>
<td><input type="file" name="image" value="<?php echo $row['4'];?>"></td>
</tr>
<tr>
<td  align="center" bgcolor="#FF8080">
        <input name="submit" type="submit" value="update">
       
</td>
<td  align="center" bgcolor="#FF8080">
      <input name="reset" type="reset" value="Cancel">
</td>
</tr>
</table>
<br><br></center>

 
</form>

<?php
}
?>

<?php include("footer.php"); ?>  

	