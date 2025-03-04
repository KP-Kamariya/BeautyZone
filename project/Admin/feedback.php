

 
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>BeautyZone</title>
	
	<script type="text/javascript">
function validateForm()
{
var a=document.forms["feedback"]["nm"].value;
var b=document.forms["feedback"]["city"].value;
var c=document.forms["feedback"]["mno"].value;
var d=document.forms["feedback"]["email"].value;
var e=document.forms["feedback"]["feed"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") &&
 (e==null || e=="") )
{
alert("All Field must be filled out");
return false;	
}
if (a==null || a=="")
{
alert("name must be filled out");
return false;
}
if (b==null || b=="")
{
alert("city must be filled out");
return false;
}
if (c==null || c=="")
{
alert("mno must be filled out");
return false;
}
if(!(c.match(/^\d{10}$/)))
{
	alert("invalid mobile number");
	return false;
}
if (d==null || d=="")
{
alert("email must be filled out");
return false;
}
if(!(d.match(/^[\w]+([_|\.-][\w]{1,})*@[\w]{2,}([_|\.-][\w]{1,})*\.([a-z]{2,4})$/)))
{
	alert("enter valid email id");
	return false;
}
if (e==null || e=="")
{
alert("feedback must be filled out");
return false;
}

}
</script>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link rel="shortcut icon" href="img/g2.png">
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
    

<form action="feedbacksave.php" method="post" name="feedback" onSubmit="return validateForm()">

<h1 align='center'><font color='black' size='+5'><u> feedback </u></font></h1>
<table align="center">
<tr>
<td><font size="+2" color="#FF9900">Name</td></font>
<td><input type="text" name="nm"></td>
</tr>
<tr>
<td><font size="+2" color="#FF9900">City</td>
<td><input type="text" name="city"></td>
</tr>
<tr>
<td><font size="+2" color="#FF9900">Mno</td>
<td><input type="text" name="mno"></td>
</tr>
<tr>
<td><font size="+2" color="#FF9900">Email</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td><font size="+2" color="#FF9900">Feedback</td>
<td><textarea name="feed"></textarea></td>
</tr>

<tr>

<td colspan="+2" align="center"><button style="width:40%; height:60%;"><input type="submit" name="feedback" value="FEEDBACK"></button>
 <button style="width:40%; height:60%;"><input type="reset" name="cancel" value="CANCEL"></td>
 </button>
</tr>

</table>
</form>
</body>
</html>
<br><br>


	
  


