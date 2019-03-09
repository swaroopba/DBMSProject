<html>
*<head>
<title>home</title>
<style>
body{
background-image:url("images/baground.jpeg");
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
	top:23%;
	background-color:#d2b2a7;
	width:30%;
	height:120%;
	
}
.right{
	position:absolute;
	left:30%;
	top:23%;
	background-color:#c4c2c4;
	width:70%;
	height:120%;
	
}
a{
	text-decoration:none;
}
.header,.healeft{
position:absolute;
top:18%;
width:101%;
height:5%;
background-color:LightGreen;
letter-spacing:4px;
word-spacing:7px;
}
.title{
background-color:LightYellow;
text-align:left;
}
</style>
</head>
<body>
<div class="whole">
<div class="middle">
<img src="images/fruits.jpg" height="20%" width="50%" align="left">
<div class="logo">
<img src="images/logo.jpg" height="20%" width="107%">
</div>
<div class="header" align="right">
<font size="+1">
<div align="left" class="healeft">
<a href="?con=register"><b>Register</b></a>|
<a href="?con=login"><b>Login</b></a>
</div>

<a href="?con=home"><b>HOME</b></a>|
<a href="?con=aboutus"><b>ABOUT US</b></a>|
<a href="?con=contactus"><b>CONTACT US</b></a>|
<a href="?con=kart"><b>KART</b></a>
</font>
</div>
<div class="left">
<div class="title">
<font size="+1">
<b>FRUITS:</b>
</font>
</div>
<img src="images/fruitss.jpg" width="100%" height="20%">
<center>
<a href="?con=apple"><span>APPLE</span></a><br>
<a href="?con=mango"><span>MANGO</span></a><br>
<a href="?con=banana"><span>BANANA</span></a><br>
<a href="?con=grapes"><span>GRAPES</span></a><br>
<a href="?con=orange"><span>ORANGE</span></a><br>
</center>
<div class="title">
<font size="+1">
<b>VEGETABLES:</b>
</font>
</div>
<img src="images/vegetables.jpg" width="100%" height="20%">
<center>
<a href="?con=tomato"><span>TOMATO</span></a><br>
<a href="?con=potato"><span>POTATO</span></a><br>
<a href="?con=brinjal"><span>BRINJAL</span></a><br>
<a href="?con=onion"><span>ONION</span></a><br>
<a href="?con=capsicum"><span>CAPSICUM</span></a><br>

</center>
<div class="title">
<font size="+1">
<b>CEREALS:</b>
</font>
</div>
<img src="images/cereals.jpg" width="100%" height="20%">
<center>
<a href="?con=rice"><span>RICE</span></a><br>
<a href="?con=wheat"><span>WHEAT</span></a><br>
<a href="?con=ragi"><span>RAGI</span></a><br>
<a href="?con=barley"><span>BARLEY</span></a><br>
<a href="?con=jowar"><span>JOWAR</span></a><br>

</center>
</div>
<div class="right">



<?php
error_reporting(1);
switch($_REQUEST['con']){
	case 'register':include('register.php');break;
	case 'login':include('login.php');break;
	case 'home':include('home.php');break;
	case 'aboutus':include('aboutus.php');break;
	case 'contactus':include('contactus.php');break;
	case 'kart':include('kart.php');break;
	case 'apple':include('apple.php');break;
	case 'mango':include('mango.php');break;
	case 'banana':include('banana.php');break;
	case 'grapes':include('grapes.php');break;
	case 'orange':include('orange.php');break;
	case 'tomato':include('tomato.php');break;
	case 'potato':include('potato.php');break;
	case 'brinjal':include('brinjal.php');break;
	case 'onion':include('onion.php');break;
	case 'capsicum':include('capsicum.php');break;
	case 'rice':include('rice.php');break;
	case 'wheat':include('wheat.php');break;
	case 'ragi':include('ragi.php');break;
	case 'barley':include('barley.php');break;
	case 'jowar':include('jowar.php');break;
}
?>
</div>
</div>
</div>
</body>
</html>