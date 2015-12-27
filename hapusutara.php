<?php
include("koneksi.php");
	$id=$_GET['id'];
	$query = mysql_query("delete from bantulutara where id='$id'") or die(mysql_error());
	header('location:bantulutara.php');
exit;
?>