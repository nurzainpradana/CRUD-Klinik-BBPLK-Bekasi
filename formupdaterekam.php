<?php
    include('koneksi.php');
    include('atas.php');
    $norekam = $_GET['id'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM rekammedis as R JOIN dokter as D ON R.nodokter = D.nodokter JOIN pasien as P ON R.nopasien = P.nopasien WHERE R.norekam='$norekam'");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) { ?>
        

    <form action="updaterekam.php" method="post">
    <h2>Form Update Rekam Medis</h2>
    <br>
    <table border="0" width="350dp">
        <tr>
            <th width="150dp">No Rekam</th>
            <td width="250dp"><input type="number" name="norekam" value="<?= $r['norekam'];?>"></td>
        </tr>
        <tr>
            <th>Tanggal Rekam</th>
            <td><input type="date" name="tgl_rekam" value="<?= $r['tgl_rekam']?>"></td>
        </tr>
        <tr>
            <th>Nama Pasien</th>
            <td>
            <select name="nopasien">
            <?php 
                $datapasien = mysqli_query($koneksi, "SELECT * FROM pasien");      
                while ($p = mysqli_fetch_array($datapasien)) { ?>
                <option value="<?php $p['nopasien']?>" <?php echo ($r['nopasien'] == $p['nopasien']) ? "selected" : "" ; ?> > <?= $p['namapasien'] ?></option>
                <?php } ?>
            </select>
            </td>
        </tr>
        <tr>
            <th>Nama Dokter</th>
            <td>
            <select name="nodokter">
            <?php 
                $datadokter = mysqli_query($koneksi, "SELECT * FROM dokter");      
                while ($d = mysqli_fetch_array($datadokter)) { ?>
                <option value="<?php $d['nodokter']?>" <?php echo ($r['nodokter'] == $d['nodokter']) ? "selected" : "" ; ?> > <?= $d['namadokter'] ?></option>
                <?php } ?>
            </select>
            </td>
        </tr>
        <tr>
            <th>Keluhan</th>
            <td><input type="text" name="keluhan" value="<?= $r['keluhan']?>"></td>
        </tr>
        <tr>
            <th>Diagnosa</th>
            <td><input type="text" name="diagnosa" value="<?= $r['diagnosa']?>"></td>
        </tr>
        <tr>
            <th>Biaya</th>
            <td><input type="text" name="biaya" value="<?= $r['biaya']?>"></td>
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
