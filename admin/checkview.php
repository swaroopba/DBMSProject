<?php

include('connect.php');
$cat=$_POST['view'];
$subcat=$_POST['view1'];
$que=mysql_query("select * from items where category='$cat' and subcategory='$subcat'");
$num=mysql_num_rows($que);
while($arr=mysql_fetch_array($que,MYSQL_ASSOC)){
$i=$arr['itemcode'];
      echo "<table border='1' align='center'>
   <tr><td><font size='+1'><b>Item</b></font></td>
   <td><font size='+1'><b>Description</b></font></td></tr>";
   echo "<tr>
   <tr><td><img src='itempics/$i.jpg' height='200' width='200'></td>
   <td><b>Item Code:</b>".$arr['itemcode'].
   "<br><b>Quantity:</b>(in kg)".$arr['quantity'].
   "<br><b>Price:</b>Rs&nbsp;".$arr['price'].
   "<br><b>Description:</b>".$arr['description'].
   </td>
   </tr></table>";
   	
}
?>