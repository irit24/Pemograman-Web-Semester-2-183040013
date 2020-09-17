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
<section id="portfolio" class="portfolio bg-light text-primary" pb-4>	
<div class="container">
	<div class="row mb-4 pt-4">
	<div class="col text-center">
		<h2>Rekomendasi Mobil
		</div>	
</div>

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
