<html>
<head>
<title>home</title>
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
	top:23%;
	background-color:#d2b2a7;
	width:30%;
	height:100%;
	
}
.right{
	position:absolute;
	left:30%;
	top:23%;
	background-color:#c4c2c4;
	width:70%;
	height:100%;
	
}
a{
	text-decoration:none;
}
.header{
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
.middle1{
position:absolute;
top:22%;
left:22%;
width:60%;
height:60%;
background-color:LightGreen;
letter-spacing:4px;
line-height:35px;
text-align:center;

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
<div class="middle1">
<h2><center>PAYMENT DETAILS</center></h2>
<form action="addbill.php" method="POST">

<b>Bill Amount:</b></td><td><?php 
session_start();
$bt=$_SESSION['billtotal'];
echo "$bt";
 ?>
<br>
<b>Bank:</b>
<label>
<select name="bank" id="sel2">
        <option value="SBBJ">SBBJ</option>
        <option value="SBI" selected>SBI</option>
        <option value="ICICI">ICICI</option>
        <option value="HDFC">HDFC</option>
        <option value="PNB">PNB</option>
        <option value="Axis Bank"> Axis Bank</option>
</select>
</label>
	  <br>
	  <b>Card No:</b><input type="text" name="cardno"><br>
	  <b>CVV:</b><input type="text" name="cvv"><br>
	  <b>Mobile No:</b><input type="text" name="mobileno"><br>
	<b>Address:</b><textarea name='address'></textarea><br>
<b>City:</b><input type="text" name="city"><br><br>



<input type="submit" name="submit"><br>	
	  



</form>
</div>
<?php
error_reporting(1);
switch($_REQUEST['con']){
	case 'home':include('home.php');break;
	case 'aboutus':include('aboutus.php');break;
	case 'contactus':include('contactus.php');break;
	case 'kart':include('kart.php');break;
	case 'apple':include('apple.php');break;
	case 'mango':include('mango.php');break;
	case 'banana':include('banana.php');break;
	case 'grapes':include('grapes.php');break;
}
?>
</div>
</div>
</div>
</body>
</html>