<?php

session_start();
if (!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

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
   <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
          <a class="navbar-brand" href="menuadmin.php">KEMUDI CAR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link " href="menuadmin.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="tambah.php">Tambah Mobil</a>
        <a class="nav-item nav-link" href="#services">Merk</a>
        <a class="nav-item  btn btn-primary tombol" href="logout.php">Log out</a>

      </div>
    </div>
  </div>

  </nav>

  
</section>


<section id="table" class="table">

<form align ="center" action="" method="get">
        <input type=" text" autocomplete="off" name="keyword" id="keyword" class="form-control" placeholder="Search...">
        <button type="submit" name="cari" id="cari">Cari</button>
    </form>

<div class="jumbotron">

    <div class="card">
        <div class="card-header">
            Kemudi Car
        </div>
    <div class="card-body">
        
    <table border="1px" cellpadding="2"> 
<thead>
<tr>
<th>No</th>
<th>Foto</th>
           <th>Merek Mobil</th>
                <th>Varian Mobil</th>
                <th>Warna Mobil</th>

                <th>Bahan Bakar</th>
                <th>Transmisi</th>
                <th>Mesin</th>

                <th>Harga</th>
                <th>Opsi</th>



</tr>

</thead>

<tbody>
<?php if(empty($mobil)) : ?>
            <tr>
                <td colspan="7">
                    <h1 align="center">Data Tidak Ditemukan</h1>
                </td>
            </tr>

            <?php else : ?>

  
<?php $i =1;?>
<?php foreach($mobil as $mbl):?>
<tr>
     <td><?= $i++; ?></td>


    <td ><img style="width:100px" src="./assets/foto/<?= $mbl['foto']; ?>"></td>
                <td><?= $mbl["merek_mobil"] ?></td>
                <td><?= $mbl["varian_mobil"]; ?></td>
                <td><?= $mbl["warna_mobil"]; ?></td>

                <td><?= $mbl["bahan_bakar"]; ?></td>
                <td><?= $mbl["transmisi"]; ?></td>
                <td><?= $mbl["mesin"]; ?></td>

                <td><?= $mbl["harga"]; ?></td>

                <td>

        <a href="ubah.php?id_mobil=<?=$mbl['id_mobil'];?>">Ubah</a>
        <a href="hapus.php?id_mobil=<?= $mbl['id_mobil']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>


    </td>




</tr>
<?php endforeach;?>
<?php endif ?>
</tbody>

    </table>


    </div>
    
    </div>
</div>


</div>


</section>
 <section id="footer">
 <footer class=".bg-dark text-info">
	<div class="container">	
<div class="row">
	<div class="col text-center">
			<p>Copyright &copy; 2018. Ilyasa Ridho Universitas Pasundan Bandung</p>
	
</footer>
  

 </section>
   
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