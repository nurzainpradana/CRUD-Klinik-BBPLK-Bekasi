<?php
include('koneksi.php');
$norekam = $_POST['norekam'];
$nodokter = $_POST['nodokter'];
$nopasien = $_POST['nopasien'];
$diagnosa = $_POST['diagnosa'];
$keluhan = $_POST['keluhan'];
$biaya = $_POST['biaya'];

$koneksi = mysqli_query($koneksi, "INSERT INTO rekammedis (norekam, nodokter, nopasien, keluhan, diagnosa, biaya) VALUES ('$norekam', '$nodokter', '$nopasien', '$keluhan', '$diagnosa', '$biaya')");

if($koneksi){
    echo "<center> <a href='rekam.php'>Data Berhasil Disimpan</a> </center>";
} else {
    echo "gagal";
}
?>