<?php
include("koneksi.php");
	$alamatErr = $sudutxErr = $sudutyErr = $latErr= $lngErr = "";
	$alamat = $sudutx = $suduty = $lat = $lng = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$id=$_POST['id'];
	$alamat=$_POST['alamat'];
	$sudutx=$_POST['sudutx'];
	$suduty=$_POST['suduty'];
	$lat=$_POST['lat'];
	$lng=$_POST['lng'];
	$data="UPDATE bantulutara SET alamat='$alamat', sudutx='$sudutx',suduty='$suduty', lat='$lat', lng='$lng' WHERE id='$id'";
if (empty($_POST["alamat"]) or empty($_POST["sudutx"]) or empty($_POST["suduty"]) or empty($_POST["lat"]) or empty($_POST["lng"])){
function input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
return $data;
}

if (empty($_POST["alamat"])) {
	$alamat = "";
} else {
	$alamat = input($_POST["alamat"]);
}

if (empty($_POST["sudutx"])) {
	$sudutx = "";
} else {
	$sudutx = input($_POST["sudutx"]);
}

if (empty($_POST["suduty"])) {
	$suduty = "";
} else {
	$suduty = input($_POST["suduty"]);
}

if (empty($_POST["lat"])) {
	$lat = "";
} else {
	$lat = input($_POST["lat"]);
}
if (empty($_POST["lng"])) {
	$lng = "";
} else {
	$lng = input($_POST["lng"]);
}
}else{
$hasil=mysql_query($data);
if ($hasil){
header('location:bantulutara.php');
}else{
echo '<script type="text/javascript">
var answer = alert("Sudah ada order dengan nama tersebut")
window.location = "updateutara.php";
</script>';
}
}
}
?>