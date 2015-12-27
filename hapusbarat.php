<?php
include("koneksi.php");
	$id=$_GET['id'];
	$query = mysql_query("delete from bantulbarat where id='$id'") or die(mysql_error());
	header('location:bantulbarat.php');
exit;
?>