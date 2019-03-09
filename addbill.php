<?php

include('connect.php');
session_start();
$user=$_SESSION['username'];
$bt=$_SESSION['billtotal'];
$bank=$_POST['bank'];
$cardno=$_POST['cardno'];
$cvv=$_POST['cvv'];
$phno=$_POST['mobileno'];
$address=$_POST['address'];
$city=$_POST['city'];

$que=mysql_query("insert into billingdetails(username,billamt,bank,cardno,cvv,phno,address,city) values('$user','$bt','$bank','$cardno','$cvv','$phno','$address','$city')");
if(!$que){
	echo"<script>alert('couldn't be purchased...try again');</script>";
	echo"<script>window.location.assign('kart.php');</script>";
}
else{

$ant=mysql_query("truncate kart");
if(!$ant){
echo"<script>alert('not deleted');</script>";
}
session_destroy();
	echo"<script>alert('thanks for purchasing');</script>";
	echo"<script>window.location.assign('custhome.php');</script>";
}

?>