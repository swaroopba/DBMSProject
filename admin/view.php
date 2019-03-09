
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
<h3>Choose Category to View</h3>
<form method="POST" enctype="multipart/form-data" action="viewtable.php" >
<b>Category:</b><input type="text" name="cat"><br>
<b>Sub Category:</b><input type="text" name="subcat"><br><br>
<input type="submit" name="view" value="View">
</form>
</div>
</body>
</html>