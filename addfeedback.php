<?php

include('connect.php');
$name=$_POST['name'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$sub=$_POST['sub'];
$message=$_POST['message'];

$que=mysql_query("insert into feedback values('$name','$phno','$email','$sub','$message')");
if(!$que){
	echo"<script>alert('sorry try again');</script>";
	echo"<script>window.location.assign('custhome.php');</script>";
}
else{
	echo"<script>alert('your feedback is received ');</script>";
	echo"<script>window.location.assign('custhome.php');</script>";
}
?>