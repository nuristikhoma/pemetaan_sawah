<?php
include("koneksi.php");
	$id=$_GET['id'];
	$query = mysql_query("delete from bantulselatan where id='$id'") or die(mysql_error());
	header('location:bantulselatan.php');
exit;
?>