<?php
    include('atas.php');
    include('koneksi.php');
?>
    <form action="simpanrekam.php" method="post">
    <h3>Form Input Rekam</h3>
    <table border="0" width="350dp">
        <tr>
            <th width="150dp">No Rekam</th>
            <td width="250dp"><input type="number" name="norekam"></td>
        </tr>
        <tr>
            <th>Nama Pasien</th>
            <td>
            <select name="nopasien">
            <?php 
                $datapasien = mysqli_query($koneksi, "SELECT * FROM pasien");      
                while ($r = mysqli_fetch_array($datapasien)) { ?>

                <option value="<?= $r['nopasien'] ?>"> <?= $r['namapasien'] ?></option>

                <?php } ?>
            </select>
        </tr>

        <tr>
            <th>Nama Dokter</th>
            <td>
            <select name="nodokter">
            <?php 
                $datadokter = mysqli_query($koneksi, "SELECT * FROM dokter");      
                while ($r = mysqli_fetch_array($datadokter)) { ?>
                
                <option value="<?= $r['nodokter'] ?>"> <?= $r['namadokter'] ?></option>

                <?php } ?>
            </select>
        </tr>

        <tr>
            <th>Keluhan</th>
            <td><input type="text" name="keluhan"></td>
        </tr>
        <tr>
            <th>Diagnosa</th>
            <td><input type="text" name="diagnosa"></td>
        </tr>
        <tr>
            <th>Biaya</th>
            <td><input type="number" name="biaya"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><br><input type="submit" value="simpan">  <a href="dokter.php">Batal</a></td>
        </tr>
    </table>
    </form>
<?php
include('bawah.php');
?>