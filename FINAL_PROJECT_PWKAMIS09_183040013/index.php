<?php


require 'function.php';
if (isset($_GET['cari'])){
    $keyword = $_GET['keyword'];
    $mobil = query("SELECT * FROM mobil WHERE
        merek_mobil LIKE '%$keyword%' OR
        warna_mobil LIKE '%$keyword%' OR
        varian_mobil LIKE '%$keyword%' OR
        bahan_bakar LIKE '%$keyword%' OR
        transmisi LIKE '%$keyword%' OR
        mesin LIKE '%$keyword%' OR

        harga LIKE '%$keyword%' ");
} else {
    $mobil = query("SELECT * FROM mobil");
}

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
   <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white ">
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
  <!-- <a class="nav-item  btn btn-primary tombol" href=".php">Log Out</a> -->

 
      </div>
    </div>
  </div>

  </nav>
  
</section>
 
  <!-- slider -->
   <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./assets\img\fortofolio2.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h3 class="display-3">Protected  <span>With</span> <br> Buyback <span>Warranty</span></h1>
            
            <button type="button" class="btn btn-Info tombol ">Contact Us</button>

        
          </div>
    
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./assets\img\portofolio1.jpg" alt="Second slide">

        <div class="carousel-caption d-none d-md-block">
            <h3 class="display-3">Total <span>Owrnership</span> <br> <span>Exprience</span></h1>
            
            <button type="button" class="btn btn-primary  tombol">Our CAR</button>
            <button type="button" class="btn btn-Info tombol ">BOOK NOW</button>

        
          </div>
          </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./assets\img\portofolio3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h3 class="display-3">Enyoy  <span>Your</span>  <span>Driving</span></h1>
            
            <button type="button" class="btn btn-primary  tombol">Our Car</button>
            <button type="button" class="btn btn-Info tombol ">Contact Us</button>

        
          </div>
       
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section id="services" class="services">
  <div class="container">
    <div class="row mb-5">
    <div class="col m6 light text-center">
        <h3 class="center light grey-text text-darken-2 text-center">Cari Mobil Impianmu</h3>
         <div class="row justify-content-center">
  <div class="col-12 col-md-10 col-lg-8">
  <form class="card card-sm">
  <div class="card-body row no-gutters align-items-center">
  <div class="col-auto">
  <i class="fas fa-search h4 text-body"></i></div>
  <div class="col">
   <input class="form-control form-control-lg form-control-borderless" autocomplete="off" type="search" name="keyword" id="keyword"  placeholder="Masukan Merek,Mobil,Tipe ">
    </div>
    <div class="col-auto">
     <button class="btn btn-lg btn-primary" name="cari" type="submit">Search</button>
       </div>
 </div>
</form> 
 </div>
 </div> 
</div>  
  
<section id="portfolio" class="portfolio bg-light text-primary" pb-4>	
<div class="container">
	<div class="row mb-4 pt-4">
	<div class="col text-center">
		<h2>Rekomendasi Mobil
		</div>	
</div>
<div class="card-group">

<?php foreach($mobil as $mbl):?>

     <div class="col-md-3" >
    <div class="card">
        <img class="card-img-top" src="./assets/foto/<?= $mbl['foto']; ?>" alt="mobil">
        <div class="card-body">
<h5 class="card-title" ><?= $mbl['merek_mobil'] . " ". $mbl['varian_mobil']; ?></h5>
<p class="card-text"><?= $mbl['harga']; ?></p>
<a href="detail.php?id_mobil=<?= $mbl['id_mobil'];?>" class="btn btn-primary">Detail</a>        </div>
      </div>
    </div>
    
  <?php endforeach;?>
  </div>

 </section>
</section> 

 <!-- client -->
 <section id="client" class="client">
    <div class="container">
    <div class="row mb-5">
    <div class="col m6 light text-left">
        <h3 class="center light grey-text text-darken-2 text-left">Client & Patners</h3>
        <hr>
</div>
<div class="row mb-5 s12">
<div class="col m6" >
  <img src="./assets/img/fujitsu.png" alt="">

</div>
<div class="col m6 s12 " >
    <img src="./assets/img/logo-pln.png" alt="">
  
  </div>
  <div class="col m6 s12 " >
      <img src="./assets/img/Logo-Kemendikbud.png" alt="">
    
    </div>
    <div class="col m6 s12 " >
        <img src="./assets/img/gojek.png" alt="">
      
      </div>
      <div class="col m6 s12 " >
          <img src="./assets/img/tokopedia.png" alt="">
        
        </div>
        <div class="col m6 s12 " >
            <img src="./assets/img/traveloka.png" alt="">
          
          </div>
                  <hr>
</div>
</section>

<!-- contact -->
<section id="contact" class="contact mb-5 bg-light">
    <div class="container">	
    <div class="row pt-4 mb-4" >
      <div class="col text-center">
    <h3> Contact Us</h3>
    </div>
      </div>
    <div class="row justify-content-center">
    <div class="col-lg-4">
    <div class="card text-white mb-3 " style="background-color: #003366">
      <div class="card-body">
        <h5 class="card-title">Contact Us</h5>
        <p class="card-text">admin@syabab.com</p>
      </div>
    </div>
    <ul class="list-group">
      <li class="list-group-item text-muted"><h1>Location</li>
      <li class="list-group-item">Office</li>
      <li class="list-group-item">Jln Cangkuang kulon no 9, Kab Bandung</li>
      <li class="list-group-item">West Java,Indonesia</li>
    </ul>
    </div>
    <div class="col-lg-6">
    <form>
      <div class="form-group">
          <h4>Please fill out this form</h4>

        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama">
      </div>
      <div class="form-group">
        <label for="email">Email </label>
        <input type="text" class="form-control" id="email" placeholder="Masukan email">
      </div>
    
      <div class="form-group">
        <label for="telp">No Telepon </label>
        <input type="text" class="form-control" id="telp" placeholder="Masukan No Telepon">
      </div>
      <div class="form-group">
        <label for="pesan">Pesan </label>
        <textarea name="pesan" id="pesan" class="form-control" placeholder="Masukan Pesan"></textarea>
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-dark">Kirim Pesan</button>
            </div> 
    </form>
    </div>	
    </div>
    </div>
    </section>
    <footer class=".bg-dark text-info">
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