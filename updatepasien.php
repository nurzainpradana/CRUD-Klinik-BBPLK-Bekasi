<?php
include('koneksi.php');

$nopasien = $_POST['nopasien'];
$namapasien = $_POST['namapasien'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

$koneksi = mysqli_query($koneksi, "UPDATE pasien SET namapasien = '$namapasien', jk ='$jk', tgl_lahir ='$tgl_lahir', agama ='$agama', telp ='$telepon', alamat ='$alamat' WHERE nopasien ='$nopasien'");

if($koneksi){
    header("location:pasien.php");
} else {
    echo "gagal";
}
?>