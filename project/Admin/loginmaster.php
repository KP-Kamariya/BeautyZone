 <?php include("header.php"); ?>  
	<script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.ba-cond.min.js"></script>
    <script src="js/jquery.slitslider.js"></script>
    <a href="home.php"><h1><b> Home </b></h1></a>  
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

<?php
include("con1.php");
$query="SELECT * FROM `login` ";
$result=mysqli_query($con,$query);

echo"<table border='5' align='center' >
<h1 colspan='1' align='center'><font color='black' size='+5'><u> LOGIN MASTER </u></font></h1>
<th><font color='FF8080' size=+2><ul>Id</font></ul></th>
<th><font color='FF8080' size=+2><ul>Username</font></ul></th>
<th><font color='FF8080' size=+2><ul>Password</font></ul></th>
<th><font color='FF8080' size=+2><ul>Edit</font></ul></th>
<th><font color='FF8080' size=+2><ul>Delete</font></ul></th>";
while($row=mysqli_fetch_array($result))
{
echo"<tr><td>";
echo $row["id"];
echo "</td><td>";
echo $row["username"];
echo "</td><td>";
echo $row["password"];
echo "</td><td><a href='loginedit.php?id=".$row[0]."'><font color='#FF8080'><ul>Edit</ul></font></a></td>";
echo  "<td>
<a href='logindelete.php?id=" . $row[0] . "' 
   style='color: #FF8080; text-decoration: none;' 
   onclick='return confirm(\"Are you sure you want to delete this?\");'>
   Delete
</a>
</td>";

echo"</tr>";
//echo "<a href='loginmaster.php?delete=".$row[0]."'><font color='#FF8080'><ul>X</ul></font></a></td>";
}
echo"</table>";
?>
<?php include("footer.php"); ?>  

