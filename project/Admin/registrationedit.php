


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>BeautyZone</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link rel="shortcut icon" href="images/favicon.png">
</head>

<body>
    

    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    
    <script src="js/main.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <!-- Slider -->
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
$query="select * from registration where id=$id";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>

<form action="registrationeditsave.php" method="post">
<h1 align="center">REGISTRATION</h1>
<font size="+2" color="#FFFFFF">
<table align="center" >
<tr>
<td>Id</td>
<td><input type="text" name="id"value="<?php echo $row['0'];?>"></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="nm"value="<?php echo $row['1'];?>"></td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="address"><?php echo $row['2'];?>"></textarea></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" name="city"value="<?php echo $row['3'];?>"></td>
</tr>
<tr>
<td>Pincode</td>
<td><input type="text" name="pincode"value="<?php echo $row['4'];?>"></td>
</tr>
<tr>
<td>State</td>
<td><input type="text" name="state"value="<?php echo $row['5'];?>"></td>
</tr>
<tr>
<td>Country</td>
<td><input type="text" name="country"value="<?php echo $row['6'];?>"></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username"value="<?php echo $row['7'];?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="password"value="<?php echo $row['8'];?>"></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="text" name="gender"value="<?php echo $row['9'];?>"></td>
</tr>
<tr>
<td>Mno</td>
<td><input type="text" name="mno"value="<?php echo $row['10'];?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email"value="<?php echo $row['11'];?>"></td>
</tr>
<tr>
<td>Dob</td>
<td><input type="text" name="dob"value="<?php echo $row['12'];?>"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="registration" value="update">
<input type="reset" name="cancel" value="cancel"></td>
</table>
<font color="#FFFFFF">
  <div align="center" class="style45" ><h2>If any query,<a href="contact us.php">contact us</a></h2>
<h2><a href="home.php">www.BeautyZone</a></h2>
</div>
  </font>
</form>
<?php
}
?>
</body>
</html>


