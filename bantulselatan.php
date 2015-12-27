<?php
  include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
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
	  <?php
		$id=1;
		$sqlCount = "select count(id) from bantulselatan";
		$query = mysql_query($sqlCount) or die(mysql_error());
		$rsCount = mysql_fetch_array($query);
		$banyakData = $rsCount[0];
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit = 20;
		$mulai_dari = $limit * ($page - 1);
		$sql_limit = "select * from bantulselatan order by id limit $mulai_dari, $limit";
		$hasil = mysql_query($sql_limit) or die(mysql_error());
		if(mysql_num_rows($hasil)==0){
			echo "<p class='message'>Data tidak ditemukan!</p>";
		}
		?>
	 
	 <div id="content_item">
	 <body>
	 <center><h1>DATA PERSAWAHAN BANTUL SELATAN</h1>
	 <?php $id=$id+(($page-1)*$limit);
	while ($data=mysql_fetch_array($hasil)){
	?>
	 <tr class="success">
		<td><?php echo $data['id']; ?></td>.
		<td><?php echo $data['alamat']; ?></td>
	<td>
	<a href= "updateselatan.php?id=<?php echo $data['id'];?>" class="update">Update</a>
	<a href= "hapusselatan.php?id=<?php echo $data[0];?>" class="delete" onclick= "return confirm('Anda yakin menghapus data order <?php echo $data['alamat'];?>?')">Hapus</a>
	</td>
		<td><?php echo '<br>' ?></td>
	   </tr>
	 <?php $id++;}
	?>
	<br></br>
	<td>
	 <a class="tambahlokasi" href="tambahsel.php">Tambah Lokasi</a>
	 </td>
	 <br></br>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
       function initialize() {
        var mapOptions = { 
			zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
		
		var mapCanvas = document.getElementById('map-canvas');
		var marker;
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var infoWindow = new google.maps.InfoWindow;      
        var bounds = new google.maps.LatLngBounds();
		
 
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
          function addMarker(lat, lng, info) {
            var pt = new google.maps.LatLng(lat, lng);
            bounds.extend(pt);
            var marker = new google.maps.Marker({
                map: map,
                position: pt,
					
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
          }
 
          <?php
            $query = mysql_query("select * from bantulselatan");
          while ($data = mysql_fetch_array($query)) {
            $lat = $data['lat'];
            $lng = $data['lng'];
            $alamat = $data['alamat'];
			$sudutx = $data['sudutx'];
			$suduty = $data['suduty'];
            echo ("addMarker($lat, $lng, '<b>$alamat</b>'+'<br><b>$sudutx</b>'+'<br><b>$suduty</b>');\n");                        
          }
          ?>
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
 
    <div id="map-canvas"></div>
  </body></div>
  <footer><center>
      <p><a href="index.php">Home</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; Kelompok 4</a></p>
    </center></footer>
</html>