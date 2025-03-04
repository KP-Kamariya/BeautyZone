<html>
	<head>
		<title>BeautyZone</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<script type="text/javascript">
    function validateForm() {
      var a = document.forms["login"]["username"].value;
      var b = document.forms["login"]["password"].value;

      if ((a == null || a == "") && (b == null || b == ""))
        if (a == null || a == "") {
          alert("username must be filled out");
          return false;
        }
      if (b == null || b == "") {
        alert("password must be filled out");
        return false;
      }

      if (b.length < 5) {
        alert("password should be atleast 5 characters.");
        return false;
      }
      if (!(b.match(/^[a-z,0-9][\w-]*$/i))) {
        alert("Password can not contain any special character or spaces except '_' or '-' . ");
        return false;
      }
    }
  </script>
	</head>
	<body>
		<div align="center" marginheight="1">
     		<img src="image_project/LOGO.png"></img></div>

		<br>     
		<center>
			<h1 align="center"><font size="+6" color="#000000"><b><u>LOGIN HERE...</u></b></font></h1>

			<form action="loginsave.php" method="post"  name="login" onSubmit="return validateForm()">
				<font size="+2" color="#FFFFFF">
				<table align="center" size="80%" >
					<tr>
						<td><font size="+3" color="#FF8080"><b> Username </b></font></td>
						<td><input type="text" name="username" height="50%" width="60%"></td>
					</tr>

					<tr>
						<td><font size="+3" color="#FF8080"><b> Password </b></font></td>
						<td><input type="password" name="password"></td>
					</tr>

					<tr>
						<td align="center" bgcolor="#FF8080" colspan="1"><input name="submit" type="submit" value="login"> </td>
						<td align="center" bgcolor="#FF8080" colspan="1"><input name="submit" type="reset" value="cancel"> </td>
					</tr>
				</table>
			</form>
		</center>
  		</font>
		<tr>
			<td>&nbsp;</td>
		</tr>

		</table>
  		<p>&nbsp;</p>
		<div class="footer">
		<font size="+3" color="white">
		<div>
			<marquee behavior="alternate" bgcolor="FF8080" height="+10">
        		&copy; BeautyZone, All Right Reserved.
			</marquee>
		</div>
	</font>
  </body>
</html>

