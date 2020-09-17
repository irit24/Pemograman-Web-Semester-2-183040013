<?php


require 'function.php';
if (isset($_GET['cari'])){
    $keyword = $_GET['s'];
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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style>
    .background{
        background-color: rgba(50, 115, 220, 0.3);    }
    </style>
</head>


<body class="background">
    <h1 align="center">Kemudi Indonesia </h1>
    <a href="tambah.php"> <button class="tambah"> Tambahkan </button> </a>
        <a href="index.php"><button class="logout">Logout</button></a>


<form align ="center" action="" method="get">
        <input type="text" name="s" id="s" class="form-control" placeholder="Search...">
        <button type="submit" name="cari" id="cari">Cari</button>
    </form>
    <br>
    

    
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


    <td><img src="./assets/foto/<?= $mbl['foto']; ?>"></td>
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

    
</body>
</html>