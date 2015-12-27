<?php
include("koneksi.php");
	$id=$_GET['id'];
	$query = mysql_query("delete from bantultimut where id='$id'") or die(mysql_error());
	header('location:bantultimur.php');
exit;
?>