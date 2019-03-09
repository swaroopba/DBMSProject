<?php
$cat=$_POST['cat'];
$subcat=$_POST['subcat'];
include('connect.php');
if($_POST['view']){
echo "<script>location.href='adminhome.php?view=$cat & view1=$subcat'</script>";	
	
}
?>