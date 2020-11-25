<?php
include('koneksi.php');
$nopasien = $_GET['nopasien'];

$koneksi = mysqli_query($koneksi, "DELETE FROM pasien WHERE nopasien = '$nopasien'");

if($koneksi){
    header("location:pasien.php");
} else {
    echo "gagal";
}
?>