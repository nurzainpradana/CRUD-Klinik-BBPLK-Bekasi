<?php
include("koneksi.php");
include("atas.php");
echo "
<h3>Data Rekam Medis</h3>
<a href='forminputrekam.php'> Tambah Rekam Medis </a>
<br><br>
<table border='1' width='100%'>
    <tr>
        <th>No</th>
        <th>Nomor Rekam</th>
        <th>Nama Pasien</th>
        <th>Nama Dokter</th>
        <th>Action</th>
    </tr>";

    $tampil = mysqli_query($koneksi, "SELECT * FROM rekammedis as R JOIN pasien as P ON R.nopasien = P.nopasien JOIN dokter as D ON R.nodokter = D.nodokter");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$r[nopasien]</td>
            <td>$r[namapasien]</td>
            <td>$r[namadokter]</td>
            <td><a href='formupdaterekam.php?id=$r[norekam]'> Update </a> | <a href='hapusrekam.php?norekam=$r[norekam]'> Hapus </a></td>
        </tr>";
        $no++;
    }
    echo "
</table> ";
include('bawah.php');
?>