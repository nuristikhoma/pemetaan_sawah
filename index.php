<!DOCTYPE HTML>
<html>

<head>
  <title>PEMETAAN PERSAWAHAN DI BANTUL</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <title>Persawahan di Bantul</title>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <script>
    function initialize() {
      var posisi = new google.maps.LatLng(-7.877666, 110.327797);
      var pengaturan = {
        zoom: 8,
        center: posisi
      }
      var map = new google.maps.Map(document.getElementById('peta'), pengaturan);
 
      var tanda = new google.maps.Marker({
         map: map,
        position: posisi,
       
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <!-- class="logo_colour", allows you to change the colour of the text -->
        <h1><center><a href="index.html">PEMETAAN PERSAWAHAN DI BANTUL</a></center></h1>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="homesawah.php">Home</a></li>
		  <li><a href="#">Location</a>
            <ul>
              <li><a href="bantulutara.php">Bantul Utara</a></li>
              <li><a href="bantulselatan.php">Bantul Selatan</a></li>
              <li><a href="bantultimur.php">Bantul Timur</a></li>
              <li><a href="bantulbarat.php">Bantul Barat</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </nav>
    </header>
	<div id="site_content">
	 <div id="peta"></div>
    </div>
    <footer>
      <p><a href="homesawah.php">Home</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; Kelompok 4</a></p>
    </footer>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
