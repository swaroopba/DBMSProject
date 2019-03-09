<?php
include('connect.php');
$itemno=$_POST['itemno1'];
$newqty=$_POST['qty'];

$que=mysql_query("update items set quantity='$newqty' where itemcode='$itemno'");
if(!$que){
	echo"<script>alert('could not be updated');</script>";
	echo"<script>window.location.assign('adminhome.php');</script>";
}
else{
	echo"<script>alert('updated successfully');</script>";
	echo"<script>window.location.assign('adminhome.php');</script>";
}
?>