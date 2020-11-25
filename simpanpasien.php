<?php
include('koneksi.php');
$nopasien = $_POST['nopasien'];
$namapasien = $_POST['namapasien'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

$koneksi = mysqli_query($koneksi, "INSERT INTO pasien (nopasien, namapasien, jk, tgl_lahir, agama, telp, alamat) VALUES ('$nopasien', '$namapasien', '$jk', '$tgl_lahir', '$agama', '$telepon', '$alamat')");

if($koneksi){
    echo "<center> <a href='pasien.php'>Data Berhasil Disimpan</a> </center>";
} else {
    echo "gagal";
}
?>