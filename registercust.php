<?php

include('connect.php');
$name=$_POST['custname'];
$password=$_POST['custpass'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$address=$_POST['address'];

$que=mysql_query("insert into users values('$name','$password','$phno','$email','$address')");
if(!$que){
	echo"<script>alert('unable to register...try again');</script>";
	echo"<script>window.location.assign('custhome.php');</script>";
}
else{
	echo"<script>alert('Successfully Registered');</script>";
	echo"<script>window.location.assign('custhome.php');</script>";
}

?>