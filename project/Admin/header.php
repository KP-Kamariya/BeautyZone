<html>
<head>
<title>BeautyZone</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body background="back.jpg">
<?php
                        include("con1.php");
                        session_start();
                        $admin_id = $_SESSION['admin_id'];
                        if (!isset($admin_id)) {
                           header('location:login.php');
                        } ?>
<div align="center" marginheight="1">
     <img src="image_project/LOGO.png"></img></div>