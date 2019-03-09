<?php


$name=$_POST['custname'];
$pass=$_POST['custpass'];

include("connect.php");

$tup=mysql_query("select * from users where name='$name'");
$num=mysql_num_rows($tup);
if($num==0){
	echo"<script>alert('invalid customer name');</script>";
	echo"<script>window.location.assign('custhome.php');</script>";
}
while($rows=mysql_fetch_array($tup,MYSQL_ASSOC)){
$custpass=$rows['password'];
if($custpass==$pass){
	session_start();
	$_SESSION['custname']=$name;
	echo"<script>alert('welcome customer');</script>";
	echo"<script>window.location.assign('custhome.php');</script>";
}	
else{
echo"<script>alert('invalid password');</script>";
	echo"<script>window.location.assign('custhome.php');</script>";
}	

}
?>