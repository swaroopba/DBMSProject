<html>
<head>
<title>admin login</title>
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
.login{
background-color:LightBlue;
position:absolute;
height:30%;
width:50%;
top:40%;
left:28%;
line-height:20px;
letter-spacing:3px;
text-align:"center";}
</style>
</head>
<body>
<div class="whole">
<div class="middle">
<img src="../images/fruits.jpg" height="20%" width="50%" align="left">
<div class="logo">
<img src="../images/logo.jpg" height="20%" width="107%">
</div>
<div class="login" style="border:2px solid Grey;">
<h2><center>ADMIN LOGIN</center></h2><br>
<form action='checklogin.php' method='POST'>
<center><b>Name:</b>
<input type="text" name="aname"></center>
<br>
<center><b>Password:</b>
<input type="password" name="apass"></center><br>
<center><input type="submit" name="submit"></center>
</form>
</div>
</div>
</div>
</body>
</html>