<?php
include('koneksi.php');
$norekam = $_POST['norekam'];
$nopasien = $_POST['nopasien'];
$nodokter = $_POST['nodokter'];
$tgl_rekam = $_POST['tgl_rekam'];
$keluhan = $_POST['keluhan'];
$diagnosa = $_POST['diagnosa'];
$biaya = $_POST['biaya'];

$koneksi = mysqli_query($koneksi, "UPDATE rekammedis SET nodokter = '$nodokter', nopasien ='$nopasien', tgl_rekam='$tgl_rekam', keluhan ='$keluhan', diagnosa ='$diagnosa', biaya ='$biaya' WHERE norekam ='$norekam'");

if($koneksi){
    echo "<center> <a href='rekam.php'>Data Berhasil Disimpan</a> </center>";
} else {
    echo "gagal";
}
?>