<?php
include('atas.php');
?>
    <form action="simpanpasien.php" method="post">
    <h3>Form Input Pasien</h3>
    <table border="0" width="350dp">
        <tr>
            <th width="150dp">No Pasien</th>
            <td width="250dp"><input type="number" name="nopasien"></td>
        </tr>
        <tr>
            <th>Nama Pasien</th>
            <td><input type="text" name="namapasien"></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><input type="text" name="jk"></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><input type="date" name="tgl_lahir"></td>
        </tr>
        <tr>
            <th>Agama</th>
            <td><input type="text" name="agama"></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td><input type="number" name="telepon"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><br><input type="submit" value="simpan">  <a href="pasien.php">Batal</a></td>
        </tr>
    </table>
    </form>
<?php
include('bawah.php');
?>

