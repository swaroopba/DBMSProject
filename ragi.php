<html>
<div><br/><center><h2><font face="Lucida Handwriting" size="+1" color="#00CCFF">Ragi</font></h2></center></div>
<div style="width:100%;float:left" >
<?php

include("connect.php");
$category='cereals';
$subcategory='ragi';

$sel=mysql_query("select * from items where category='$category' and subcategory='$subcategory'");
   echo"<form method='post'><table border='0' align='center'><tr>";
   $n=1;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['itemcode'];
    if($n%3==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='280' width='240' align='center'><img src='admin/itempics/$i.jpg' height='200' width='200'><br/>
  
 <b>Item No:</b>".$arr['itemcode'].
   "<br><b>Price(per kg):</b>Rs&nbsp;".$arr['price'].
   "<br><b>Quantity:</b>(kg)".$arr['quantity'].
   "<br><b>Description:</b>".$arr['description'].
   "<br><br><a href='buyitem.php?itemno=$i'><img src='images/MetalPlakDa5new.gif' width='70' height='20'/></a>
  
   </td>";
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	   
	   ?>
</div>






</html>