<html>
<head>
<title>customer registration</title>
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
height:50%;
width:80%;
top:22%;
left:12%;
line-height:20px;
letter-spacing:3px;
text-align:"center";}
</style>
</head>
<body>
<div class="whole">
<div class="middle">

<div class="login" style="border:2px solid Grey;">
<h2><center>CUSTOMER REGISTRATION</center></h2><br>
<form action='registercust.php' method='POST'>
<center><b>Name:</b>
<input type="text" name="custname"></center>
<br>
<center><b>Password:</b>
<input type="password" name="custpass"></center><br>
<center><b>Phone No:</b>
<input type="text" name="phno"></center>
<br>
<center><b>Email ID:</b>
<input type="text" name="email"></center>
<br>
<center><b>Address:</b>
<input type="text" name="address"></center>
<br>
<center><input type="submit" name="submit"></center>
</form>
</div>
</div>
</div>
</body>
</html>