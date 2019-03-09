<?php

include('connect.php');
session_start();
$ino=$_SESSION['itemno'];
$username=$_SESSION['custname'];
if(!$username){
echo"<script>alert('please login');</script>";
echo"<script>window.location.assign('custhome.php');</script>";
}
else{
$sel=mysql_query("select * from items where itemcode='$ino'");
while($arr=mysql_fetch_array($sel)){
$name=$arr['description'];
$price=$arr['price'];
}
$qty=$_REQUEST['qty'];
$total=$price*$qty;

$que=mysql_query("insert into kart values('$username','$name','$price','$qty','$total')");
if(!$que){
	echo"<script>alert('couldn't be added to kart');</script>";
	echo"<script>window.location.assign('custhome.php');</script>";
}
else{
	echo"<script>alert('inserted successfully');</script>";
	echo"<script>window.location.assign('custhome.php');</script>";
$que1=mysql_query("update items set quantity=quantity-'$qty' where itemcode='$ino'");
}
}
?>