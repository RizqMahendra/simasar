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
<?php include 'homepage/header.php'?>
<section class="page-header page-header-color page-header-primary page-header-more-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Pasar dalam Berita</li>
			</ul>
			</div>
		</div>
		<div class="row">
            <div class="container">
                <h4>Bandingkan Harga Pasar</h4>
                <div class="col-md-2">
                <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih Pasar
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Pasar Badung</a></li>
    <li><a href="#">Pasar Panjer</a></li>
    <li><a href="#">Pasar Kumbasari</a></li>
  </ul>
</div>
</div>

 <div class="col-md-2">
 <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih Komoditi
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Daging</a></li>
    <li><a href="#">Sayur</a></li>
    <li><a href="#">Buah</a></li>
  </ul>
</div>
 </div>
<div class="col-md-2">
 <button class="btn btn-primary" type="submit"><i></i> Tampil</button>
</div>
</div>
</div>
<hr class="solid">

<div class="row">
            <div class="container">
                <div class="col-md-2">
                <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih Pasar
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Pasar Badung</a></li>
    <li><a href="#">Pasar Panjer</a></li>
    <li><a href="#">Pasar Kumbasari</a></li>
  </ul>
</div>
</div>

 <div class="col-md-2">
 <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih Komoditi
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Daging</a></li>
    <li><a href="#">Sayur</a></li>
    <li><a href="#">Buah</a></li>
  </ul>
</div>
 </div>
<div class="col-md-2">
 <button class="btn btn-primary" type="submit"><i></i> Tampil</button>
</div>
</div>
</div>
<?php include 'homepage/footer.php'?>
</body>
</html>