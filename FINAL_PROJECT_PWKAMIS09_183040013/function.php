<?php
function koneksi(){
    $conn= mysqli_connect("localhost","root","") or die("koneksi ke db gagal");
    mysqli_select_db($conn,"pw_183040013") or die("database salah");
    return $conn;
}
function    query($sql){
    $conn = koneksi();
    $results = mysqli_query($conn,"$sql");
    $rows =[];
    while ($row = mysqli_fetch_assoc($results)){
        $rows[] = $row;
    };
    return $rows;
}



function tambah($data){
    $conn = koneksi();
    // $foto = htmlspecialchars($data['foto']);
    $foto = upload();
    if (!$foto){
        return false;
    }

    $merek_mobil = htmlspecialchars($data['merek_mobil']);
    $varian_mobil = htmlspecialchars($data['varian_mobil']);
    $warna_mobil = htmlspecialchars($data['warna_mobil']);
    $bahan_bakar = htmlspecialchars($data['bahan_bakar']);
    $transmisi = htmlspecialchars($data['transmisi']);
    $harga = htmlspecialchars($data['harga']);

    $mesin = htmlspecialchars($data['mesin']);

    $query_tambah = "INSERT INTO mobil VALUES ('','$foto','$merek_mobil','$varian_mobil','$warna_mobil',
   '$bahan_bakar','$transmisi','$harga','$mesin' )";
mysqli_query($conn, $query_tambah);
return mysqli_affected_rows($conn);
}
function hapus($id_mobil){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mobil WHERE id_mobil = $id_mobil");

    return mysqli_affected_rows($conn);
}
function ubah($data) {
    $conn = koneksi();


    $id_mobil= $data['id_mobil'];

$fotolama = htmlspecialchars($data['fotolama']);

//cek apakah user memilih nama baru apa tidak
if($_FILES['foto']['error'] ===4){
    $foto = $fotolama;
}else{
$foto = upload();
}

    $merek_mobil = htmlspecialchars($data['merek_mobil']);
    $varian_mobil = htmlspecialchars($data['varian_mobil']);
    $warna_mobil = htmlspecialchars($data['warna_mobil']);
    $bahan_bakar = htmlspecialchars($data['bahan_bakar']);
    $transmisi = htmlspecialchars($data['transmisi']);
    $harga = htmlspecialchars($data['harga']);

    $mesin = htmlspecialchars($data['mesin']);

    $queryubah = "UPDATE mobil 
                    SET foto = '$foto',
                    merek_mobil = '$merek_mobil',
                    varian_mobil = '$varian_mobil',
                    warna_mobil = '$warna_mobil',
                    bahan_bakar = '$bahan_bakar',
                    transmisi = '$transmisi',
                    harga = '$harga',
                     mesin = '$mesin'
                    WHERE id_mobil = '$id_mobil'";
    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);

}

function upload (){
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];
//cek apakah gambae yang tidak diupload

if ($error ===4){
    echo "<script>
    alert('pilih gambar terlebih dahulu
    </script>";
    return false;
}
//cek apakah gambar yang diupload adalah gambar

$ekstensiGambarValid =['jpg','jpeg','png'];
$ekstensiGambar = explode('.',$namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if (!in_array($ekstensiGambar,$ekstensiGambarValid)){
    echo "<script>
    alert('yang anda upload bukan gambar');
    </script>";
    return false;
} //cek jika ukuranya terlalu besar
if($ukuranFile >3000000 ){
    echo "<script>
    alert('yang anda upload terlalu besar');
    </script>";
    return false;

}
//lolos pengecekan,gambar siap diupload
//generate nama gambar baru
$namaFileBaru = uniqid();
$namaFileBaru .='.';
$namaFileBaru .=$ekstensiGambar;


move_uploaded_file ($tmpName,'assets/foto/'.$namaFileBaru);
return $namaFileBaru;

}
function registrasi($data){
    $conn=koneksi();
    $username=strtolower(stripslashes($data['user']));
    $password=mysqli_real_escape_string($conn,$data['password']);
    $password2=mysqli_real_escape_string($conn,$data['password2']);
    
    //cek usernaame sudah ada atau belum
    $result=mysqli_query ($conn,"SELECT username FROM user WHERE username='$username'");
    
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah trdaftar !');
            document.location.href='register.php';
            </script>";
            return false;
    }
    //cek konfirmasi password
    if ($password !==$password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
            document.location.href='register.php';
            </script>";
            return false;
    }
    
    
    //enskripsi password
    $password =  password_hash($password,PASSWORD_DEFAULT);
    $created_at = time();
    //tambahkan userbaru kedatabase
    mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password', '$created_at')");
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
    }
    
    ?>

