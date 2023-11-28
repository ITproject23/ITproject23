<?php include "header.php"; ?>

<script>
    function hitungPerkalian() {
        // Ambil nilai dari input
        var jumlah = parseFloat(document.getElementById('jumlah').value) || 0;
        var harga = parseFloat(document.getElementById('harga').value) || 0;

        // Hitung perkaliannya
        var total = jumlah * harga;

        // Set nilai input hasil
        document.getElementById('total').value = total;
    }
</script>

<?php
// Inisialisasi variabel
$jumlah = $harga = $total = "";
?>

<?php
// Uji jika simpan ketika di klik
if (isset($_POST['bsimpan'])) {

    // htmlspecialchars
    $tanggal = htmlspecialchars($_POST['ttl'], ENT_QUOTES);
    $Nama_Pengirim = htmlspecialchars($_POST['nmpengirim'], ENT_QUOTES);
    $Nama_Beras = htmlspecialchars($_POST['nmberas'], ENT_QUOTES);
    $Jumlah_Barang = htmlspecialchars($_POST['jumlah'], ENT_QUOTES);
    $Harga_kg = htmlspecialchars($_POST['harga'], ENT_QUOTES);
    $total_harga = htmlspecialchars($_POST['total'], ENT_QUOTES);

    $simpan = mysqli_query($koneksi, "INSERT INTO tlaporan VALUES ('','$tanggal','$Nama_Pengirim','$Nama_Beras','$Jumlah_Barang','$Harga_kg','$total_harga')");


    // uji jika simpan sukses
    if ($simpan) {
        echo "<script>alert('Simpan data sukses..!!'); document.location='?'</script>";
    } else {
        echo "<script>alert('Simpan data GAGAL); document.location='?'</script>";
    }
}


?>
<!-- awal head -->

<div class="head text-center">
    <img src="assets/img/logo.png" width="130">
    <h2 class="text-white"> <small> Laporan Barang Masuk </small> <br> Sumber Barokah Rezeki</h2>
</div>

<!-- akhir head -->

<!-- awal row -->
<div class="row mt-2">
    <!-- col-lg-7 -->
    <div class="col-lg-7 mb-3">
        <div class="card shadow bg-gradient-light">
            <div class="card-body">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Input Data Masuk Barang</h1>
                    </div>


                    <form class="user" method="POST" action="">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="nmpengirim" placeholder="Nama Pengirim" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="nmberas" placeholder="Nama Beras" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="jumlah" name="jumlah" oninput="hitungPerkalian()" value="<?php echo $jumlah; ?>" placeholder="Jumlah Barang" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="harga" name="harga" oninput="hitungPerkalian()" value="<?php echo $harga; ?>" placeholder="Harga/Kg" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="total" name="total" placeholder="Total Harga" readonly>
                            </div>
                            <div class="col-sm-6">
                                <input type="date" name="ttl" value="<?= $vtanggal ?>" class="form-control form-control-user" placeholder=" Masukan Tanggal">
                            </div>
                        </div>
                        <button type="submit" name="bsimpan" class="btn btn-primary btn-user btn-block">Simpan Data</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Sumber Barokah Rezeki | 2022 -<?= date('Y') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir col-lg-7 -->

    <!-- col-lg-5 -->
    <div class="col-lg-5 mb-3">
        <div class="card shadow">
            <!-- card body -->
            <div class="card-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-8">Admin</h1>
                </div>
                <div class="text-center">
                    <div class="rounded-frame">
                        <img src="assets/img/icon foto.jpg" style="width: 230px; height: 225px;">
                    </div>
                </div>

                <style>
                    .rounded-frame {
                        border-radius: 30%;
                        overflow: hidden;
                        margin-bottom: 10px;
                    }

                    .table-container {
                        margin-top: 20px;
                    }
                </style>

                <div class="table-container">
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama</td>
                            <td>Irwan N</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>CEO</td>
                        </tr>
                        <tr>
                            <td>Perusahaan</td>
                            <td>CV Sumber Barokah Rezeki</td>
                        </tr>
                    </table>
                </div>
            </div>

            </table>
        </div>
    </div>
</div>

<!-- akhir col-lg-5 -->

<!-- akhir row -->


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-center">Data Laporan Masuk Barang Sumber Barokah Rezeki</h6>
    </div>
    <div class="card-body">
        <!-- Buat rekapitulasi -->
        <a href="rekapitulasi.php" class="btn btn-success mb-3">
            <i class="fa fa-table"></i> Rekapitulasi Data Masuk
        </a>

        <a href="logout.php" class="btn btn-danger mb-3">
            <i class="fa fa-sign-out-alt"></i> Logout
        </a>



        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
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
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pengirim</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Harga/Kg</th>
                        <th>Total Harga</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tlaporan order by id_barang desc");
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
        </div>
    </div>
</div>

<?php include "footer.php"; ?>