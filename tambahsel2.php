<?php
include("koneksi.php");
$alamat=$_POST['alamat'];
$sudutx=$_POST['sudutx'];
$suduty=$_POST['suduty'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];
$input="insert into bantulselatan(alamat,sudutx,suduty,lat,lng) values ('$alamat','$sudutx','$suduty','$lat','$lng')";
if ($alamat=="" or $sudutx==""){
echo '<script type="text/javascript">
var answer = alert("Data masih belum lengkap")
window.location = "tambahsel.php";
</script>';
}else{
$hasil=mysql_query($input);
if ($hasil){
header('location:bantulselatan.php?update=2');
}else{
echo '<script type="text/javascript">
var answer = alert("Sudah ada user dengan username tersebut")
window.location = "tambahsel.php";
</script>';
}
}
?>