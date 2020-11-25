<?php
include('koneksi.php');
$nodokter = $_POST['nodokter'];
$namadokter = $_POST['namadokter'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$spesialis = $_POST['spesialis'];
$tarif = $_POST['tarif'];

$koneksi = mysqli_query($koneksi, "INSERT INTO dokter (nodokter, namadokter, jk, tgl_lahir, email, telp, alamat, spesialis, tarif) VALUES ('$nodokter', '$namadokter', '$jk', '$tgl_lahir', '$email', '$telepon', '$alamat', '$spesialis', '$tarif')");

if($koneksi){
    echo "<center> <a href='pasien.php'>Data Berhasil Disimpan</a> </center>";
} else {
    echo "gagal";
}
?>