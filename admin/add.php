
<html>
<head>
<style>
.main{
height:60%;
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
<center><h3>ADD ITEM</h3></center>
<form action="checkadd.php" method="POST" enctype="multipart/form-data">
<b>Category:<b><input type="text" name="category"><br>
<b>Sub Category:<b><input type="text" name="subcategory"><br>
<b>Image:<b><input type="file" name="image"><br>
<b>Item Code:<b><input type="text" name="itemcode"><br>
<b>Price:<b><input type="text" name="price"><br>
<b>Quantity(kg):<b><input type="text" name="quantity"><br>
<b>Description:<b><input type="text" name="desc"><br><br>
<center><input type="submit" name="submit"></center>
</form>
</div>
</body>
</html>