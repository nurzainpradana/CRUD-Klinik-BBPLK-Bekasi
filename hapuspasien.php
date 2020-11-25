<?php
include('koneksi.php');
$nopasien = $_GET['nopasien'];

$koneksi = mysqli_query($koneksi, "DELETE FROM pasien WHERE nopasien = '$nopasien'");

if($koneksi){
    echo "<center> <a href='pasien.php'>Data Berhasil Diupdate</a> </center>";
} else {
    echo "gagal";
}
?>