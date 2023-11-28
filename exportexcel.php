<?php
include "koneksi.php";

// persiapan untuk excel
header("Content-type: application/vmd-ms-excel");
header("Content-Disposition: attachment; filename=Export Excel Data.xls");
header("Pragma: no-cache");
header("Expires:0");
?>

<table border="1">
    <thead>
        <tr>
            <th colspan="6"> Rekapitulasi Data Barang Masuk</th>
        </tr>

        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Pengirim</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Harga/Kg</th>
            <th>Total Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $tgl1 = $_POST['tanggala'];
        $tgl2 = $_POST['tanggalb'];

        $tampil = mysqli_query($koneksi, "SELECT * FROM tlaporan where tanggal BETWEEN '$tgl1' and '$tgl2' order by id_barang desc");
        $no = 1;
        while ($data = mysqli_fetch_array($tampil)) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['tanggal'] ?></td>
                <td><?= $data['Nama_Pengirim'] ?></td>
                <td><?= $data['Nama_Beras'] ?></td>
                <td><?= $data['Jumlah_Barang'] ?></td>
                <td><?= $data['Harga_kg'] ?></td>
                <td><?= $data['total_harga'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>