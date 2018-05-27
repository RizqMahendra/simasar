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

  <title>Simasar || Sistem Informasi PD Pasar Kota Denpasar</title>

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="bootstrap/css/style.css" rel="stylesheet">
<!--for Jquery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <style> .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }      
</style>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#">Simasar</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
          <a class="navbar-brand" href="#"style="margin-left:30px;">Tentang Kami</a>
           <a class="navbar-brand" href="#"style="margin-left:30px;">Pasar dalam Berita</a>
            <a class="navbar-brand" href="#"style="margin-left:30px;">Info Lapak</a>
             <a class="navbar-brand" href="#"style="margin-left:30px;">Lokasi Pasar</a>
             <a class="navbar-brand" href="#"style="margin-left:30px;">Tata Kelola</a>
             <a class="navbar-brand" href="#"style="margin-left:30px;">Login</a>
      </div>
    </div>
  </nav>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
      <div class="container">
  <h2>Headline Hari ini</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:90%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="picture/pasarjaya.jpg" alt="Los Angeles"style="opacity:0.5"> <!--style="width:20%;"-->
        <div class="carousel-caption">
        <div align="left"style="color:black;">
            <h3>Simasar</h3>
          <p>Sistem Informasi PD Pasar Kota Denpasar</p>
          <p><a class="btn btn-default" href="#" role="button">Lihat Selengkapnya &raquo;</a></p>
        </div>
            </div>
        </div>
      <div class="item">
        <img src="picture/pasarjaya.jpg" alt="Chicago"><!--style="width:20%;"-->
      </div>
    
      <div class="item">
        <img src="picture/pasarjaya.jpg" alt="New york"><!--style="width:20%;"-->
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
  </div>

<!--  
  <div class="jumbotron">
    <div class="container">
      <h1>Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2>Profil Sekilas Simasar</h2>
        <a class="btn btn-borders btn-default mr-xs mb-sm" 
        href="http://www.pdppjkotabogor.com/post/read/87074162867863540510/profil.pd.pasar.pakuan.jaya.kota.bogor">Read More</a>
      </div>
      <div class="col-md-8">
          <div class="col-md-6">
            <div class="pr-hg">
              <h4 class="mb-sm">Selayang Pandang</h4>
              <p class="mb-lg"align="justify">Simasar merupakan Sistem Informasi PD pasar Kota denpasar
              yang bernaung dibawah pemerintahan kota denpasar. sistem ini bertujuan
              memberikan informasi pasar , mulai dari komoditas dan harga.. </br><a href="#">Selengkapnya</a>
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pr-hg">
              <h4 class="mb-sm">Informasi Harga Komoditas</h4>
              <p class="mb-lg"align="justify">Perkembangan harga sembako dan komoditas lainnya dari berbagai pasar yang
              dikelompokkan bedasarkan beberapa sample yang ada di unit pasar di kota denpasar
              </br><a href="unitpasar.html">Selengkapnya</a>
            </p>
            </div>
          </div>
    <div class="col-md-6">
        <div class="pr-hg">
          <h4 class="mb-sm">Lokasi unit dan informasi Lapak </h4>
          <p class="mb-lg"align="justify">Menyediakan Lokasi dan informasi lapak yang tersedia 
            lebih dari 12 unit pasar yang tersebar di kota denpasar
          </br><a href="unitpasar.html">Selengkapnya</a>
          </p>
      </div>
      </div>
    <div class="col-md-6">
        <div class="pr-hg">
          <h4 class="mb-sm">Call Center</h4>
          <p class="mb-lg"align="justify">Kami menyediakan pelayanan Call Center mengenai keluhan , saran dan kritik kepada sistem kami 
            di nomor layanan (0361)227596
          </p>
      </div>
      </div>
  </div> 
    <div class="col-md-4">
        <h2>Pasar Dalam Berita</h2>
        <figure class="beritapasar">
            <img alt="" src="images/featured_img2.jpg"style="width:90%;"> <span class="overlay"></span> </a>
            <figcaption align="justify">
            <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> 
            </figcaption>
            <p align="justify">Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
        </figure>
        <div class="berita">
            <ul class="spost_nav"style="margin-left:-30px;">
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                    </div>
        <div class="berita">
            <ul class="spost_nav"style="margin-left:-30px;">
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                    </div>
                        </div>
                     <div class="col-md-4">
        <h2>Info Harga Lapak</h2>
  <p>Info terkini harga Lapak</p> 
  <div class="input-group mb-md">
<div class="input-group-btn">
	<button tabindex="-1" class="btn btn-primary" type="button">Pasar Kreneng</button>
	<button tabindex="-1" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
		<span class="caret"></span>
	</button>
		<ul role="menu" class="dropdown-menu">
        <li>Pasar Sukasari</a></li>
        <li>Pasar Sukasari</a></li>
        <li>Pasar Sukasari</a></li>
        <li>Pasar Sukasari</a></li>
			</ul>
	</div>
</div>           
  <table class="table">
    <thead>
      <tr>
        <th>Item</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Ayam Boiler</td>
        <td>Rp 20.000/ekor</td>
      </tr>
      <tr>
        <td>Kopi</td>
        <td>Rp 14.000/250gr</td>
      </tr>
      <tr>
        <td>Gula</td>
        <td>Rp 500/100gr</td>
      </tr>
       <tr>
        <td>Ayam Boiler</td>
        <td>Rp 20.000/ekor</td>
      </tr>
      <tr>
        <td>Kopi</td>
        <td>Rp 14.000/250gr</td>
      </tr>
      <tr>
        <td>Gula</td>
        <td>Rp 500/100gr</td>
      </tr>
    <td><a class="btn btn-default" href="#" role="button">Selengkapnya&raquo;</a></td>
    </tbody>
  </table>
</div>
<div class="col-md-4">
        <h2>Pasar dalam Lokasi</h2>
        <div id="googleMap" style="width:300px;height:300px;background:yellow"></div>
    </div>

    </div>
    </div>

    <hr>

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>Deskripsi</h3>
      <p>Perusahaan Daerah Pasar Pakuan Jaya (PD PPJ) didirikan di Kota Bogor pada tanggal 7 Juli 2009, 
        berdasarkan Peraturan Daerah Kota Bogor Nomor 4 tahun 2009 yang bertujuan untuk mengelola pasar rakyat di Kota Bogor</p>
            </div>
     <div class="col-md-4">
       <h3></h3>
      <p>Di Bootstrap Oleh Fathiyarizq Mahendra Putra</p>
            </div>
     <div class="col-md-4">
       <h3>Kontak Kami</h3>
      <p><strong>Alamat :</strong>Gedung BC ILKOM</p>
      <p><strong>No Telp:</strong>(0361) 27596</p>
      <p><strong>Email :</strong>hendrasatuan@gmail.com</p>
            </div>
          </div>
        </div>
    </footer>
  </div>
  <!-- /container -->
  <script>
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
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>