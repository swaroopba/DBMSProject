<?php
include('connect.php');
$itemno2=$_POST['itemno2'];
$newprice=$_POST['price2'];

$que=mysql_query("update items set price='$newprice' where itemcode='$itemno2'");
if(!$que){
	echo"<script>alert('could not be updated');</script>";
	echo"<script>window.location.assign('adminhome.php');</script>";
}
else{
	echo"<script>alert('updated successfully');</script>";
	echo"<script>window.location.assign('adminhome.php');</script>";
}
?>