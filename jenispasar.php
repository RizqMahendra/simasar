<?php
require 'library/koneksi.php';
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://www.iconj.com/ico/k/k/kk66h8j9fa.ico">

  <title>Jumbotron Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="dist/css/main.css" rel="stylesheet">
<!--for Jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <style> .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  }    
    td{
        font-size: 11pt;
    }  

</style>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
 <?php include 'homepage/header.php' ?>
<section class="page-header page-header-color page-header-primary page-header-more-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Informasi Unit Pasar</li>
			</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<h1>Pasar Kreneng</h1>
			</div>
		</div>
	</div>
  </section>
<div class="container">
    <div class="row">
        <div class="col-md-8">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="picture/pasarsayur.JPG" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
          <img src="picture/pasarsayur.JPG" alt="Los Angeles" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="picture/pasarsayur.JPG" alt="Los Angeles" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
<div class="col-md-4">
        <h3>Lokasi</h3>
        <div id="googleMap" style="width:300px;height:300px;background:yellow"></div>
    </div>
    </div>
<div class="col-md-8">
    <h3>Informasi</h3>
    <table>
<tbody>
<tr>
<td>Alamat Unit</td>
<td>&nbsp;: Dangin Puri Kangin, Denpasar Utara, Kota Denpasar, Bali 80236</td>
</tr>
<tr>
<td>Luas Tanah</td>
<td>&nbsp;: 2.495</td>
</tr>
<tr>
<td>Bangunan</td>
<td>&nbsp;: 2.778</td>
</tr>
<tr>
<td>Komoditi Utama</td>
<td>&nbsp;: Sembako, Sayur Mayur, Daging, Komoditi Lainnya</td>
</tr>
<tr>
<td>Jumlah Kios</td>
<td>&nbsp;: 168</td>
</tr>
<tr>
<td>Jumlah Los</td>
<td>&nbsp;: 98</td>
</tr>
<tr>
<td>Jumlah Non Kios Non Los</td>
<td>&nbsp;: 26</td>
</tr>
<tr>
<td><button class="btn btn-primary" type="submit"><i></i> Sewa Sekarang</button></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<script>
<?php include 'homepage/footer.php' ?>
    function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.6469627,115.2186117),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>