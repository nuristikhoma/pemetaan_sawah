<head>
  <title>PEMETAAN PERSAWAHAN DI BANTUL</title>
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
<center><h3>TAMBAH DATA BANTUL UTARA</h3>
<form action="tambahut2.php" method="post">
<table width="319" border="0">
<tr>
<td width="152">Alamat	:</td>
<td width="157"><input name="alamat" type="text" id="alamat" size="20" /></td>
</tr>
<tr>
<td width="152">Keterangan Sudut X	:</td>
<td width="157"><input name="sudutx" type="text" id="sudutx" size="20" /></td>
</tr>
<tr>
<td width="152">Keterangan Sudut Y	:</td>
<td width="157"><input name="suduty" type="text" id="suduty" size="20" /></td>
</tr>
<tr>
<td width="152">Sudut X	:</td>
<td width="157"><input name="lat" type="text" id="lat" size="20" /></td>
</tr>
<tr>
<td width="152">Sudut Y</td>
<td width="157"><input name="lng" type="text" id="lng" size="20" /></td>
</tr>
</table>
<table width border="0">
<tr>
<button class="btn btn-warning" type="submit">Simpan</a></button>
<button><a href="bantulutara.php" button class="btn btn-warning" type="button">Batal</a></button>
<center>
	<br>
	<a href="http://geojson.io/#map=13/-7.8906/110.3367">Untuk mencari sudut</a>
	</br>
</center>
</tr>
</table>
</center>
</form>
</div>
</div>
</div>
</body>
<footer>
      <p><a href="index.html">Home</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; Kelompok 4</a></p>
    </footer>
</html>