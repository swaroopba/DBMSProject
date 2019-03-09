<html>
<head>
<style>
.main{
height:40%;
width:50%;
position:absolute;
top:22%;
left:25%;
border:2px solid Grey;
letter-spacing:1px;
line-height:30px;	
text-align:center;
background-color:LightGreen;	
}
</style>
</head>
<body>
<div class="main">
<center><h3>CONTACT US</h3></center>
<form action="addfeedback.php" method="POST">
<b>Name:</b><input type="text" name="name"><br>
<b>Phone No:</b><input type="text" name="phno"><br>
<b>Email:</b><input type="text" name="email"><br>
<b>Subject:</b><input type="text" name="sub"><br>
<b>Message:</b><input type="text" name="message"><br>
<br>
<center><input type="submit" name="submit"></center>
</form>
</div>
</body>
</html>