<body>
<br>
<center><font color="#660066" size="+3">Feedback</font></center>
<br>
</body>
<?php
include("connect.php");
$sel=mysql_query("select * from feedback");
while($arr=mysql_fetch_array($sel))
  {
     $i=$arr['itemno'];
	
	echo "<center><fieldset style='width:60%'><table border='0'>
	<tr>
	
	<td><h3>Details</h3><b>Buyer:</b> ".$arr['name']."<br>
	<b>Phone No:</b> ".$arr['phno']."<br>
	<b>Email:</b> ".$arr['email']."<br>
	<b>Subject:</b> ".$arr['subject']."<br>
	<b>Message:</b> ".$arr['message']."<br></td>
</tr>
	</table>
</fieldset><br>
</center>";
}

	
	?>