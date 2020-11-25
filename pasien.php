<?php
include("koneksi.php");
include("atas.php");
echo "
<h3>Data Pasien</h3>
<a href='forminputpasien.php'> Tambah Pasien </a>
<br><br>
<table border='1' width='100%'>
    <tr>
        <th>No</th>
        <th>Nomor Pasien</th>
        <th>Nama Pasien</th>
        <th>Action</th>
    </tr>";

    $tampil = mysqli_query($koneksi, "SELECT * FROM pasien");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$r[nopasien]</td>
            <td>$r[namapasien]</td>
            <td><a href='formupdatepasien.php?id=$r[nopasien]'> Update </a> | <a href='hapuspasien.php?nopasien=$r[nopasien]'> Hapus </a></td>
        </tr>";
        $no++;
    }
    echo "
</table> ";
include('bawah.php');
?>