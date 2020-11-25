<?php
include('koneksi.php');
$nodokter = $_GET['nodokter'];

$koneksi = mysqli_query($koneksi, "DELETE FROM dokter WHERE nodokter = '$nodokter'");

if($koneksi){
    echo "<center> <a href='dokter.php'>Data Berhasil Dihapus</a> </center>";
} else {
    echo "gagal";
}
?>