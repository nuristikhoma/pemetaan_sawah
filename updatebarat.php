<!DOCTYPE html>
<html
<head>
  <title>PEMETAAN PERSAWAHAN DI BANTUL</title>
    <style>
      #map-canvas {
        width: 100%;
        height: 500px;
		position: relative;
		margin: auto;
      }
    </style>
	
	<div id="logo">
        <!-- class="logo_colour", allows you to change the colour of the text -->
        <h1><center><a href="index.html">PEMETAAN PERSAWAHAN DI BANTUL</a></center></h1>
		<meta name="description" content="website description" />
		  <meta name="keywords" content="website keywords, website keywords" />
		  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		  <link rel="stylesheet" type="text/css" href="css/style.css" />
      </div>
      <nav><center>
        <ul class="sf-menu" id="nav">
          <li><a href="index.php">Home</a></li>
		  <li><a href="#">Location</a>
            <ul>
             <li><a href="bantulutara.php">Bantul Utara</a></li>
              <li><a href="bantulselatan.php">Bantul Selatan</a></li>
              <li><a href="bantultimur.php">Bantul Timur</a></li>
              <li><a href="bantulbarat.php">Bantul Barat</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul></center>
      </nav>
	  
	  
	 </head>
<body>
<?php
include("koneksi.php");
?>
	<div class="container">
	<div class="row">
	<div class="span2"></div>
	<div class="span8">
<center><h3>UPDATE DATA BANTUL BARAT</h3>
<form action="updatebar.php" method="post">
<?php
$id = $_GET['id'];
?>
<td width="100"><input name="id" type="hidden" id="id" value="<?php echo $id; ?>" size="30" /></td>
<?php
//lakukan query SELECT
$data = mysql_query("SELECT * from bantulbarat where id=$id");
$id = mysql_fetch_array($data);
?>
<table width="" border="0">
<div>
	<td>Alamat</td><td>:</td>
	<td width="85px"><input name="alamat" type="text" id="alamat" value="<?php echo $id['alamat']; ?>" size="50" /></td>
	<input name="id" type="hidden" id="id" value="<?php echo $id['id']; ?>" size="50" />
</div>
<tr>
	<td>Keterangan Sudut X</td><td>:</td>
		<td><input name="sudutx" type="text" id="sudutx" value="<?php echo $id['sudutx']; ?>" size="50" /></td>
</tr>
<tr>
	<td>Keterangan Sudut Y</td><td>:</td>
		<td><input name="suduty" type="text" id="suduty" value="<?php echo $id['suduty']; ?>" size="50" /></td>
</tr>
<tr>
	<td>Sudut X</td><td>:</td>
		<td><input name="lat" type="text" id="lat" value="<?php echo $id['lat']; ?>" size="50" /></td>
</tr>
<tr>
	<td>Sudut Y</td><td>:</td>
		<td><input name="lng" type="text" id="lng" value="<?php echo $id['lng']; ?>" size="50" /></td>
</tr>
</table>
<table width border="0">
<tr>
		<center><button class="btn btn-warning" type="submit">Simpan</a></button>
		<button><a href="bantulbarat.php" button class="btn btn-warning" type="button">Batal</a></button></center>
</tr>
</table>
</center>
</form>
</div>
</div>
</div>
</body>
<footer><center>
      <p><a href="index.php">Home</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; Kelompok 4</a></p>
    </center></footer>
</html>