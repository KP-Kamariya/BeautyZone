

<?php
include("header1.php") 
?>
<html>
<!-- Header Start -->
	 <div class="bg-light" style="margin-bottom: 100px;">
        <div class="container text-center py-5">
            <h3 class="text-black display-3 mb-4">REGISTRATION</h3>
            <div class="d-inline-flex align-items-center text-black">
                <p class="m-0"><a class="text-black" href="">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">REGISTRATION</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

<
<form action="registrationsave.php" method="post" name="regi"
onSubmit="return validateForm()">


<table align="center" border="5" bordercolor="#000000" cellpadding="5" cellspacing="5">
<tr>
<td><font color="#000000"> Name </font></td>
<td><input type="text" name="nm"></td>
</tr>
<tr>
<td><font color="#000000"> Address </font></td>
<td><textarea name="address"></textarea></td>
</tr>
<tr>
<td><font color="#000000"> City </font></td>
<td><input type="text" name="city"></td>
</tr>
<tr>
<td><font color="#000000"> Pincode </font></td>
<td><input type="text" name="pincode"></td>
</tr>
<tr>
<td><font color="#000000"> state </font></td>
<td><input type="text" name="state"></td>
</tr>
<tr>
<td><font color="#000000"> Country </font></td>
<td><input type="text" name="country"></td>
</tr>
<tr>
<td><font color="#000000"> Username </font></td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td><font color="#000000"> password </font></td>
<td><input type="text" name="password"></td>
</tr>
<tr>
<td><font color="#000000"> Gender </font></td>
<td><input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<td><font color="#000000"> Mobileno</font></td>
<td><input type="text" name="mno"></td>
</tr>
<tr>
<td><font color="#000000"> Email </font></td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td><font color="#000000"> Dob </font></td>
<td><input type="text" name="dob"></td>
</tr>
<tr>
<td  align="center" bgcolor="#FF8080">
        <input name="submit" type="submit" value="registration">
       
</td>
<td  align="center" bgcolor="#FF8080">
      <input name="reset" type="reset" value="Cancel">
</td>
</table>

 
</body>
</html>
<?php
include("footer1.php") 
?>

