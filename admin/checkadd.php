<?php

include('connect.php');
$cat=$_POST['category'];
$subcat=$_POST['subcategory'];
$img=$_FILES['image']['tmp_name'];
$itemcode=$_POST['itemcode'];
$price=$_POST['price'];
$qty=$_POST['quantity'];
$desc=$_POST['desc'];

$que=mysql_query("insert into items values('$cat','$subcat','$img','$itemcode','$price','$qty','$desc')");
if(!$que){
	echo"<script>alert('could not be inserted');</script>";
	echo"<script>window.location.assign('adminhome.php');</script>";
}
else{
	move_uploaded_file($_FILES['image']['tmp_name'],"itempics/$itemcode.jpg");
	echo"<script>alert('inserted successfully');</script>";
	echo"<script>window.location.assign('adminhome.php');</script>";
}
?>















