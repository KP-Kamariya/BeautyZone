


<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>BeautyZone</title>
	
	<script type="text/javascript">
function validateForm()
{
var a=document.forms["regi"]["nm"].value;
var b=document.forms["regi"]["address"].value;
var c=document.forms["regi"]["city"].value;
var d=document.forms["regi"]["pincode"].value;
var e=document.forms["regi"]["state"].value;
var f=document.forms["regi"]["country"].value;
var g=document.forms["regi"]["username"].value;
var i=document.forms["regi"]["password"].value;
var k=document.forms["regi"]["gender"].value;
var l=document.forms["regi"]["mno"].value;
var m=document.forms["regi"]["email"].value;
var n=document.forms["regi"]["dob"].value;


	
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") && (i==null || i=="") && 
(k==null || k=="") && (l==null || l=="")&& (m==null || m=="") && (n==null || n==""))
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
alert("adderss must be filled out");
return false;
}
if (c==null || c=="")
{
alert("city must be filled out");
return false;
}
if (d==null || d=="")
{
alert("pincode must be filled out");
return false;
}
if(d.length<6)
{
	alert("pincode should be atleast 6 characters.");
	return false;
}
if(!(d.match(/^[a-z,0-9][\w-]*$/i)))
{
	alert("Pincode can not contain any special character or spaces except '_' or '-' . ");
	return false;
}
if (e==null || e=="")
{
alert("state must be filled out");
return false;
}
if (f==null || f=="")
{
alert("country must be filled out");
return false;
}
if (g==null || g=="")
{
	alert("username must be filled out");
	return false;
}
if (i==null || i=="")
{
alert("password must be filled out");
return false;
}

if(i.length<5)
{
	alert("password should be atleast 5 characters.");
	return false;
}
if(!(i.match(/^[a-z,0-9][\w-]*$/i)))
{
	alert("Password can not contain any special character or spaces except '_' or '-' . ");
	return false;
}
if (k==null || k=="")
{
alert("gender must be filled out");
return false;
}
if (l==null || l=="")
{
	alert("mobile number must be filled out");
	return false;
}
if(!(l.match(/^\d{10}$/)))
{
	alert("invalid mobile number");
	return false;
}
if (m==null || m=="")
{
alert("email must be filled out");
return false;
}	
if(!(m.match(/^[\w]+([_|\.-][\w]{1,})*@[\w]{2,}([_|\.-][\w]{1,})*\.([a-z]{2,4})$/)))
{
	alert("enter valid email id");
	return false;
}
if (n==null || n=="")
{
alert("dob must be filled out");
return false;
}
}			
	</script>	
			

    
</head>

<body>
   
<img src="image_project/LOGO.png"alt=""width="1500" height="300" align="center">
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



<form action="registrationsave.php" method="post" name="regi"
onSubmit="return validateForm()">
<h1 align="center"><font color='black' size='+5'><u> REGISTRATION </u></font></h1>

<table align="center">
<tr>
<td><font color="#FF8080"> Name </font></td>
<td><input type="text" name="nm"></td>
</tr>
<tr>
<td><font color="FF8080"> Address </font></td>
<td><textarea name="address"></textarea></td>
</tr>
<tr>
<td><font color="FF8080"> City </font></td>
<td><input type="text" name="city"></td>
</tr>
<tr>
<td><font color="FF8080"> Pincode </font></td>
<td><input type="text" name="pincode"></td>
</tr>
<tr>
<td><font color="FF8080"> state </font></td>
<td><input type="text" name="state"></td>
</tr>
<tr>
<td><font color="FF8080"> Country </font></td>
<td><input type="text" name="country"></td>
</tr>
<tr>
<td><font color="FF8080"> Username </font></td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td><font color="FF8080"> password </font></td>
<td><input type="text" name="password"></td>
</tr>
<tr>
<td><font color="FF8080"> Gender </font></td>
<td><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td><font color="FF8080"> Mobileno</font></td>
<td><input type="text" name="mno"></td>
</tr>
<tr>
<td><font color="FF8080"> Email </font></td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td><font color="FF8080"> Dob </font></td>
<td><input type="text" name="dob"></td>
</tr>
<tr>
<td  align="center" bgcolor="#FF6633">
        <input name="submit" type="submit" value="registration">
       
</td>
<td  align="center" bgcolor="#FF6633">
      <input name="reset" type="reset" value="Cancel">
</td>
</tr>
</table>

<br>
<font size="+3" color="white">
<div>
<marquee behavior="alternate" bgcolor="#FF8080" height="+10">
        &copy; BeautyZone, All Right Reserved.
</marquee>
</div>
</font>
</body>

