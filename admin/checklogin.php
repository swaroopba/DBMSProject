<?php


$name=$_POST['aname'];
$pass=$_POST['apass'];

include("connect.php");

$tup=mysql_query("select * from admin where aname='$name'");
$num=mysql_num_rows($tup);
if($num==0){
	echo"<script>alert('invalid admin name');</script>";
	echo"<script>window.location.assign('adminlogin.php');</script>";
}
while($rows=mysql_fetch_array($tup,MYSQL_ASSOC)){
$apass=$rows['apass'];
if($apass==$pass){
	session_start();
	$_SESSION['aname']=$name;
	echo"<script>alert('welcome admin');</script>";
	echo"<script>window.location.assign('adminhome.php');</script>";
}	
else{
echo"<script>alert('invalid password');</script>";
	echo"<script>window.location.assign('adminlogin.php');</script>";
}	

}
?>