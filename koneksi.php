<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dbklinik";

$koneksi = mysqli_connect($server, $username, $password, $database)
or die ("Database tidak bisa dibuka");
?>