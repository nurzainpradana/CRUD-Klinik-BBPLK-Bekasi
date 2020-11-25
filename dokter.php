<?php
include("koneksi.php");
include("atas.php");
echo "
<h3>Data Dokter</h3>
<a href='forminputdokter.php'> Tambah Dokter </a>
<br><br>
<table border='1' width='100%'>
    <tr>
        <th>No</th>
        <th>Nomor Dokter</th>
        <th>Nama Dokter</th>
        <th>Action</th>
    </tr>";

    $tampil = mysqli_query($koneksi, "SELECT * FROM dokter");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$r[nodokter]</td>
            <td>$r[namadokter]</td>
            <td><a href='formupdatedokter.php?id=$r[nodokter]'> Update </a> | <a href='hapusdokter.php?nodokter=$r[nodokter]'> Hapus </a></td>
        </tr>";
        $no++;
    }
    echo "
</table> ";
include('bawah.php');
?>