<html>
<head>
<title>admin home</title>
<style>
body{
background-color:LightGrey;
}
.middle{
background-color:#c4c2c4;
width:70%;
height:100%;
position:relative;
left:15%;
}
.logo{
	position:absolute;
	left:50%;	
}
.left{
	position:absolute;
	left:0%;
	top:20%;
	background-color:#d2b2a7;
	width:30%;
	height:100%;
	
}
.right{
	position:absolute;
	left:30%;
	top:20%;
	background-color:#c4c2c4;
	width:70%;
	height:100%;
	
}
a{
	text-decoration:none;
}
</style>
</head>
<body>
<div class="whole">
<div class="middle">
<img src="../images/fruits.jpg" height="20%" width="50%" align="left">
<div class="logo">
<img src="../images/logo.jpg" height="20%" width="107%">
</div>
<div class="left">
<div style="position:absolute;top:15%;left:25%;">
<h3><a href="?con=add">ADD ITEM</a></h3><br>
<h3><a href="?con=view">VIEW ITEM</a></h3><br>
<h3><a href="?con=modify">MODIFY ITEM</a></h3><br>
<h3><a href="?con=feedback">FEEDBACK</a></h3><br>
<h3><a href="?con=logout">LOGOUT</a></h3>
</div>
</div>
<div class="right">
<?php

error_reporting(1);
switch($_REQUEST['con']){
	case 'add':include('add.php');break;
	case 'view':include('view.php');
	
	break;
	case 'modify':include('modify.php');break;
	case 'feedback':include('feedback.php');break;
    case 'logout':echo"<script>alert('logged out successfully');</script>";
echo"<script>window.location.assign('adminlogin.php');</script>";
	session_destroy();
break;	
}

if($_REQUEST['view']){
	include('viewtable.php');
	}
		
?>
</div>
</div>
</div>
</body>
</html>