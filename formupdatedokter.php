<?php
    include('koneksi.php');
    include('atas.php');
    $nodokter = $_GET['id'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM dokter WHERE nodokter='$nodokter'");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) { ?>
        

    <form action="updatedokter.php" method="post">
    <h2>Form Update Dokter</h2>
    <br>
    <table border="0" width="350dp">
        <tr>
            <th width="150dp">No Dokter</th>
            <td width="250dp"><input type="number" name="nopasien" value="<?= $r['nodokter'];?>"></td>
        </tr>
        <tr>
            <th>Nama Dokter</th>
            <td><input type="text" name="namadokter" value="<?= $r['namadokter']?>"></td>
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
            <th>Email</th>
            <td><input type="text" name="agama" value="<?= $r['email']?>"></td>
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
            <th>Spesialis</th>
            <td><input type="text" name="spesialis" value="<?= $r['spesialis']?>"></td>
        </tr>
        <tr>
            <th>Tarif</th>
            <td><input type="number" name="tarif" value="<?= $r['tarif']?>"></td>
        </tr>
        <tr>
            <td colspan='2' align="center"><br><input type="submit" value="simpan">     <a href="dokter.php">Batal</a></td>
        </tr>
    </table>
    </form>

<?php 
    }
    include('bawah.php');
?>
