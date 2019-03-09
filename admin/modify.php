<html>
<head>
<style>
.left1{
	position:absolute;
	height:40%;
	width:40%;
	top:30%;
	left:7%;
border:2px solid Grey;
letter-spacing:1px;
line-height:30px;	
text-align:center;
background-color:LightGreen;	
}
.right1{
	position:absolute;
	height:40%;
	width:40%;
	top:30%;
	left:50%;
border:2px solid Grey;
letter-spacing:1px;
line-height:30px;	
text-align:center;
background-color:LightGreen;	
}
</style>
</head>
<body>
<div class="left1">
<h3>MODIFY QTY</h3>
<form action="modify_qty.php" method="POST">
Item no:<input type="text" name="itemno1"><br>
New Qty:<input type="text" name="qty"><br><br>
<input type="submit">
</form>
</div>
<div class="right1">
<h3>MODIFY PRICE</h3>
<form action="modify_price.php" method="POST">
Item no:<input type="text" name="itemno2"><br>
New Price:<input type="text" name="price2"><br><br>
<input type="submit">
</form>
</div>
</body>
</html>