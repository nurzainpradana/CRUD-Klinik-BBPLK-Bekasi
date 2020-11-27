<?php
    include('koneksi.php');
    include('atas.php');
    $nopasien = $_GET['id'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nopasien='$nopasien'  ");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) { ?>
        

    <form action="updatepasien.php" method="post">
    <h2>Form Update Pasien</h2>
    <br>
    <table border="0" width="350dp">
        <tr>
            <th width="150dp">No Pasien</th>
            <td width="250dp"><input type="number" name="nopasien" value="<?= $r['nopasien'];?>"></td>
        </tr>
        <tr>
            <th>Nama Pasien</th>
            <td><input type="text" name="namapasien" value="<?= $r['namapasien']?>"></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><input type="text" name="jk" value="<?= $r['jk']?>"></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><input type="date" name="tgl_lahir" value="<?= $r['tgl_lahir']?>"></td>
        </tr>
        <tr>
            <th>Agama</th>
            <td><input type="text" name="agama" value="<?= $r['agama']?>"></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><input type="text" name="alamat" value="<?= $r['alamat']?>"></td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td><input type="number" name="telepon" value="<?= $r['telp']?>"></td>
        </tr>
        <tr>
            <td colspan='2' align="center"><br><input type="submit" value="simpan">     <a href="pasien.php">Batal</a></td>
        </tr>
    </table>
    </form>

<?php 
    }
    include('bawah.php');
?>
