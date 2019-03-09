<?php

$con=mysql_connect('localhost','root','');
if(!$con){
die("couldn't connect to mysql");
}
$db=mysql_select_db('bigbasket');
if(!$db){
die("couldn't connect to data base");
}
?>