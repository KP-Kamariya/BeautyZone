
<?php

include('header1.php');
if (isset($_SESSION['id'])) {
	header("location:index.php");
}
?>
<!-- Header Start -->
	 <div class="bg-light" style="margin-bottom: 100px;">
        <div class="container text-center py-5">
            <h3 class="text-black display-3 mb-4">LOGIN</h3>
            <div class="d-inline-flex align-items-center text-black">
                <p class="m-0"><a class="text-black" href="">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">LOGIN</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

<script type="text/javascript">
function validateForm()
{
var a=document.forms["login"]["username"].value;
var b=document.forms["login"]["password"].value;

if ((a==null || a=="") && (b==null || b==""))


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

     <!-- ##### Newsletter Area Start ###### -->
    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image:  url(file:///E|/hiral/project/Sample-Project&amp;workbook/POOJARA/project/client/img/bg-img/6.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    
 <center>
<br>


<br>
<form action="checklogin.php" method="post"  name="login"
onSubmit="return validateForm()">

<font size="+2" color="#FF8080">
<table align="center" size="80%"border="5" bordercolor="#000000" cellpadding="5" cellspacing="5" >
<tr>
<td><h3><font color="#000000">Username</font></h3></td>
<td><font size="+2"><input type="text" name="username" height="50%" width="60%" required></font>
</td>
</tr>
<tr>
<td ><h3><font color="#000000">Password</font></h3></td>
<td><input type="password" name="password" required></td>
</tr>
<tr>
<td  align="center" bgcolor="#FF8080">
        <input name="submit" type="submit" value="login">
       
</td>
<td  align="center" bgcolor="#FF8080">
      <input name="reset" type="reset" value="Cancel">
</td>
</tr>
      </table>
</form>
</center>

<tr><center>
							<td colspan="2" align="center"><br>
								<h3>Need an account? <a href="registration.php" class="">Sign up now!</a></h3>
</center></td>
						</tr>
  
                    </div>
                </div>
            </div>
        </div>
    </section>
   <?php
include("footer1.php") 
?>
