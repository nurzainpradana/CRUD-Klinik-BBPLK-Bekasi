<?php
include('koneksi.php');
$norekam = $_POST['norekam'];
$nodokter = $_POST['nodokter'];
$namadokter = $_POST['namadokter'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$spesialis = $_POST['spesialis'];
$tarif = $_POST['tarif'];

$koneksi = mysqli_query($koneksi, "UPDATE dokter SET namadokter = '$namadokter', jk ='$jk', tgl_lahir ='$tgl_lahir', email ='$email', telp ='$telepon', alamat ='$alamat', spesialis='$spesialis', tarif='$tarif' WHERE nodokter ='$nodokter'");

if($koneksi){
    echo "<center> <a href='dokter.php'>Data Berhasil Disimpan</a> </center>";
} else {
    echo "gagal";
}
?>