
<!DOCTYPE html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="apple-touch-icon" sizes="76x76" href="file:///C|/xampp/htdocs/ladies_bags/project/admin/img/g2.png">
	<link rel="shortcut icon" href="file:///C|/xampp/htdocs/ladies_bags/project/admin/images/favicon.png">
	 <header class="navbar navbar-fixed-top">
<div class="navbar-inner">
            <div class="container">
			<link rel="icon" type="image/png" href="file:///C|/xampp/htdocs/ladies_bags/project/admin/img/g2.png">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
 
    <title>BeautyZone</title>
	
	<script type="text/javascript">
function validateForm()
{
var a=document.forms["login"]["username"].value;
var b=document.forms["login"]["password"].value;

if ((a==null || a=="") && (b==null || b=="")


if (a==null || a=="")
{
	alert("username must be filled out");
	return false;
}
if (b==null || b=="")
{
alert("password must be filled out");
return false;
}

if(b.length<5)
{
	alert("password should be atleast 5 characters.");
	return false;
}
if(!(b.match(/^[a-z,0-9][\w-]*$/i)))
{
	alert("Password can not contain any special character or spaces except '_' or '-' . ");
	return false;
}
}
</script>
    
    
</head>

<body>
<div align="center" marginheight="1">
     <img src="image_project/LOGO.png"></img></div>     
	 <script src="file:///C|/xampp/htdocs/ladies_bags/project/admin/js/vendor/jquery-1.9.1.min.js"></script>
    <script src="file:///C|/xampp/htdocs/ladies_bags/project/admin/js/main.js"></script>
    <script src="file:///C|/xampp/htdocs/ladies_bags/project/admin/js/jquery.ba-cond.min.js"></script>
    <script src="file:///C|/xampp/htdocs/ladies_bags/project/admin/js/jquery.slitslider.js"></script>
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
    <!-- /Slider -->



    <br><br>
<center>
<h1 align="center"><font size="+6" color="#000000"><b><u> new admin login </u></b></font></h1>

<form action="loginsave.php" method="post"  name="login"
onSubmit="return validateForm()">

<font size="+2" color="#FFFFFF">
<table align="center" size="80%" >
<tr>
<td><font size="+3" color="#FF8080"><b> Username </b></font></td>
<td><input type="text" name="username" height="50%" width="60%">

</td>
</tr>

<tr>
<td><font size="+3" color="#FF8080"><b> Password </b></font></td>
<td><input type="password" name="password"></td>
</tr>

<tr>
<td align="center" bgcolor="#FF8080" colspan="+2"><input name="submit" type="submit" value="INSERT"> </td>
</tr>
</table>

</form>
</center>
  
<?php include("footer.php"); ?>  
