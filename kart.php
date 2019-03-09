<html>
<head>
<style>
.center{
position:absolute;
top:30%;
left:30%;
background-color:LightBlue;

}
</style>
</head>
<body>
<div class="center">
<?php

include('connect.php');

session_start();
$custname=$_SESSION['custname'];

//$billtotal=mysql_query("select sum(total) from kart where ");
//edit here
$que=mysql_query("select * from kart where username='$custname'");
echo "<table border='1' align='center' >
   <tr><td><font size='+1'><b>Item</b></font></td>
   <td><font size='+1'><b>Price(per kg)</b></font></td>
   <td><font size='+1'><b>quantity</b></font></td>
   <td><font size='+1'><b>Total</b></font></td>
   </tr>";
while($arr=mysql_fetch_array($que,MYSQL_ASSOC)){

   echo "<tr><td>".$arr['name']."</td><td>".$arr['price'].
   "</td><td>".$arr['qty']."</td><td>".$arr['total']."</td></tr>";
}
$que2=mysql_query("select sum(total) as billtotal from kart where username='$custname'");
while($arr1=mysql_fetch_array($que2,MYSQL_ASSOC)){
$billtotal=$arr1['billtotal'];
$_SESSION['billtotal']=$billtotal;
}

echo "<tr><td colspan='2'>Total Bill</td><td colspan='2'>$billtotal</td></tr></table>"; 


?>
<br>
<form type="POST" action="billingdetails.php">
<center><input type="submit" value="pay bill"></center>
</form>
<br>	
</div>
</body>
</html>