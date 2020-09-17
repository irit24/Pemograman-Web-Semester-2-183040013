<?php
require 'function.php';
$id = $_GET['id_mobil'];
$mbl = query("SELECT * FROM mobil WHERE id_mobil = $id") [0];

?>
<!doctype html>
<html lang="en" id="1">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">


    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<!-- css -->



    <!--JavaScript-->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title> My Portfolio</title>
    </head>
    <body>

  <!-- navbar -->
<section id="navbar">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
          <a class="navbar-brand" href="index.php">KEMUDI CAR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#about">About</a>
        <a class="nav-item nav-link" href="#services">Services</a>
        <a class="nav-item nav-link " href="#portfolio">Portfolio</a>
        <a class="nav-item nav-link " href="#client">Clients</a>
        <a class="nav-item  btn btn-primary tombol" href="login.php">SIGN IN</a>

      </div>
    </div>
  </div>
</div>
</section>
<section id="portfolio" id="portfolio">  
<div class="container">
    <div class="row portfolio " id="portfolio">
<div class="col-lg-6">
<img src="./assets/foto/<?= $mbl['foto']; ?>" alt="" class="img-fluid">
</div>
<div class="col-lg-6">
  <h2><span><?= $mbl['merek_mobil'] . " ". $mbl['varian_mobil'] ;?></span> </h2>
  <h3><span></span><?=$mbl['harga'];?></span> </h3>
  <hr>


  <a href="https://about.me/ilyasaridho" class="btn btn-primary booking" target="blank">Booking now</a>
  </div>
</div>
 </div>
 <hr>
 </section>
 <section id="detail" class="detail">
   <div class="container">

<div class="row mr-5 mb-5 s12">
<div class="col m6 s12 " >
<img src="./assets/img/icon1.png" alt="">
<h6>Bahan Bakar</h6>
<p><?= $mbl['bahan_bakar']; ?></p>
  </div>
  <div class="col m6 s12 " >
  <img src="./assets/img/icon2.png" alt="">
<h6>Kapasitas Mesin</h6>
<p><?= $mbl['mesin']; ?></p>
    </div>
    <div class="col m6 s12 " >
    <img src="./assets/img/icon3.png" alt="">
<h6>Transmisi</h6>
<p><?= $mbl['transmisi']; ?></p>

      </div>
      <div class="col m6 s12 " >
      <img src="./assets/img/icon4.png" alt="">
<h6>Warna</h6>
<p><?= $mbl['warna_mobil']; ?></p>
        </div>
       </div>
</div>

<hr>

</section>




<footer class=".bg-dark text-primary">
	<div class="container">	
<div class="row">
	<div class="col text-center">
			<p>Copyright &copy; 2019. Ilyasa Ridho Universitas Pasundan Bandung</p>
	
</footer>

<!-- Optional Javascript -->
<!-- jQuery first, then Popper.js, then Bootsrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $('.carousel').carousel()

    </script>
  </body>
</html>