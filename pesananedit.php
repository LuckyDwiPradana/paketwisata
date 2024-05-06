<?php
    // Koneksi ke database
    include 'koneksi.php';

    // Periksa apakah parameter 'id' sudah disetel dalam URL
    if (isset($_GET['id'])) {
        // Bersihkan 'id' agar tidak terjadi injeksi SQL
        $pemesanan_id = mysqli_real_escape_string($conn, $_GET['id']);

        // Query untuk mengambil detail pemesanan berdasarkan 'id'
        $sql = "SELECT p.*, pk.nama_paket
                FROM pemesanan p
                JOIN paket pk ON p.paket_id = pk.id
                WHERE p.id = $pemesanan_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Ambil detail pemesanan dari hasil query
            $row = $result->fetch_assoc();
            $nama_pemesan = $row['nama_pemesan'];
            $tanggal_pesan = $row['tanggal_pesan'];
            $nama_paket = $row['nama_paket'];
            $paket_id = $row['paket_id'];
            $durasi = $row['durasi'];
            $jumlah_peserta = $row['jumlah_peserta'];
            $harga_paket = $row['harga_paket'];
            $harga_layanan = $row['harga_layanan'];
            $jumlah_tagihan = $row['jumlah_tagihan'];
        } else {
            // Tampilkan pesan jika data pemesanan tidak ditemukan
            echo "Data pemesanan tidak ditemukan.";
            exit;
        }
    } else {
        // Tampilkan pesan jika parameter 'id' tidak tersedia dalam URL
        echo "ID pemesanan tidak tersedia.";
        exit;
    }

    // Proses pembaruan data jika form dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form dan bersihkan untuk mencegah injeksi SQL
        $nama_pemesan = isset($_POST['nama_pemesan']) ? mysqli_real_escape_string($conn, $_POST['nama_pemesan']) : $nama_pemesan;
        $tanggal_pesan = isset($_POST['tanggal_pesan']) ? mysqli_real_escape_string($conn, $_POST['tanggal_pesan']) : $tanggal_pesan;
        $paket_id = isset($_POST['paket_id']) ? mysqli_real_escape_string($conn, $_POST['paket_id']) : $paket_id;
        $durasi = isset($_POST['durasi']) ? intval($_POST['durasi']) : $durasi;
        $jumlah_peserta = isset($_POST['jumlah_peserta']) ? intval($_POST['jumlah_peserta']) : $jumlah_peserta;

        // Hitung harga paket berdasarkan durasi dan jumlah peserta
        $harga_paket = 100000 * $durasi * $jumlah_peserta;

        // Hitung harga layanan tambahan jika ada
        $harga_layanan = 0;
        if (isset($_POST['layanan']) && in_array("penginapan", $_POST['layanan'])) {
            $harga_layanan += 1000000 * $durasi * $jumlah_peserta;
        }
        if (isset($_POST['layanan']) && in_array("transportasi", $_POST['layanan'])) {
            $harga_layanan += 1200000 * $jumlah_peserta;
        }
        if (isset($_POST['layanan']) && in_array("makanan", $_POST['layanan'])) {
            $harga_layanan += 500000 * $durasi * $jumlah_peserta;
        }

        // Hitung total tagihan
        $jumlah_tagihan = $harga_paket + $harga_layanan;

        // Update data pemesanan di database
        $sql = "UPDATE pemesanan SET
                nama_pemesan = '$nama_pemesan',
                tanggal_pesan = '$tanggal_pesan',
                paket_id = '$paket_id',
                durasi = $durasi,
                jumlah_peserta = $jumlah_peserta,
                harga_paket = $harga_paket,
                harga_layanan = $harga_layanan,
                jumlah_tagihan = $jumlah_tagihan
                WHERE id = $pemesanan_id";

        // Eksekusi query update
        if ($conn->query($sql) === TRUE) {
            echo "Data pemesanan berhasil diperbarui.";
            // Redirect ke halaman tampilan pemesanan setelah 1 detik
            header("Refresh:1; url=pesanantampil.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVEL.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
</head>
<body>
    <div id="app">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <?php include("layout/sidebar_admin.php"); ?>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Pesanan</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="pesanantampil.php">Data Pemesanan</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Edit Pemesanan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Pemesanan</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id='.$pemesanan_id; ?>">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="nama_pemesan">Nama</label>
                                                        <input type="text" id="nama_pemesan" class="form-control" placeholder="Nama" name="nama_pemesan" value="<?php echo $nama_pemesan; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="tanggal_pesan">Tanggal Pesan</label>
                                                        <input type="date" id="tanggal_pesan" class="form-control" name="tanggal_pesan" value="<?php echo isset($tanggal_pesan_value) ? $tanggal_pesan_value : ''; ?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="paket_id">Paket Wisata</label>
                                                        <select id="paket_id" class="form-control" name="paket_id" style="border-radius: 50px;" >
                                                            <option value="">-- Pilih Paket Wisata --</option>
                                                            <?php
                                                                // Detail koneksi ke database
                                                                require_once 'koneksi.php';

                                                                // Query untuk mengambil nama paket dan ID dari tabel 'paket'
                                                                $sql = "SELECT id, nama_paket FROM paket";
                                                                $result = $conn->query($sql);

                                                                // Periksa apakah ada hasil dari query
                                                                if ($result->num_rows > 0) {
                                                                    // Loop melalui setiap baris dan buat elemen opsi
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        // Ambil ID dan nama paket dari setiap baris
                                                                        $packageId = $row["id"];
                                                                        $packageName = $row["nama_paket"];

                                                                        // Tentukan apakah paket ini dipilih atau tidak
                                                                        $selected = ($packageId == $paket_id) ? 'selected' : '';

                                                                        // Tampilkan opsi untuk setiap paket
                                                                        echo "<option value='$packageId' $selected>$packageName</option>";
                                                                    }
                                                                } else {
                                                                    // Tampilkan opsi default jika tidak ada paket yang ditemukan
                                                                    echo "<option value=''>Tidak ada paket ditemukan</option>";
                                                                }

                                                                // Tutup koneksi ke database
                                                                $conn->close();
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="durasi">Durasi Wisata (hari)</label>
                                                        <input type="number" id="durasi" class="form-control" name="durasi" placeholder="Durasi Wisata (hari)" value="<?php echo isset($durasi_value) ? $durasi_value : ''; ?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="jumlah_peserta">Jumlah Peserta</label>
                                                        <input type="number" id="jumlah_peserta" class="form-control" name="jumlah_peserta" placeholder="Jumlah Peserta" value="<?php echo isset($jumlah_peserta_value) ? $jumlah_peserta_value : ''; ?>" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="penginapan" name="layanan[]" value="penginapan" <?php echo isset($penginapan_checked) ? $penginapan_checked : ''; ?>>
                                                            <label class="form-check-label" for="penginapan">Penginapan (Rp 1.000.000)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="transportasi" name="layanan[]" value="transportasi" <?php echo isset($transportasi_checked) ? $transportasi_checked : ''; ?>>
                                                            <label class="form-check-label" for="transportasi">Transportasi (Rp 1.200.000)</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="makanan" name="layanan[]" value="makanan" <?php echo isset($makanan_checked) ? $makanan_checked : ''; ?>>
                                                            <label class="form-check-label" for="makanan">Makanan (Rp 500.000)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="harga_paket">Harga Paket Wisata (Rp)</label>
                                                        <input type="text" class="form-control" name="harga_paket" placeholder="Harga Paket Wisata (Rp)" value="<?php echo isset($harga_paket) ? $harga_paket : ''; ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="harga_layanan">Harga Layanan Tambahan (Rp)</label>
                                                        <input type="text" class="form-control" name="harga_layanan" placeholder="Harga Layanan Tambahan (Rp)" value="<?php echo isset($harga_layanan) ? $harga_layanan : ''; ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jumlah_tagihan">Jumlah Tagihan (Rp)</label>
                                                        <input type="text" class="form-control" name="jumlah_tagihan" placeholder="Jumlah Tagihan (Rp)" value="<?php echo isset($jumlah_tagihan) ? $jumlah_tagihan : ''; ?>" readonly>
                                                    </div>
                                                    <button type="button" class="btn btn-primary btn-sm" onclick="hitungTagihan()">Hitung</button>
                                                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer>
                <?php include("layout/footer_admin.php"); ?>
            </footer>
        </div>
    </div>
    <script src="assets/static/js/initTheme.js"></script>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
    <script>
        function hitungTagihan() {
            //dapatkan nilai dari input formulirs
            const durasi = document.querySelector('input[name="durasi"]').value; // Mendapatkan nilai durasi dari input formulir
            const jumlahPeserta = document.querySelector('input[name="jumlah_peserta"]').value; // Mendapatkan nilai jumlah peserta dari input formulir
            const penginapanChecked = document.querySelector('#penginapan').checked; // Mendapatkan status ceklis penginapan dari input formulir
            const transportasiChecked = document.querySelector('#transportasi').checked; // Mendapatkan status ceklis transportasi dari input formulir
            const makananChecked = document.querySelector('#makanan').checked; // Mendapatkan status ceklis makanan dari input formulir

            // Tetapkan harga dasar untuk paket (Anda dapat memperbarui nilai ini sesuai kebutuhan)
            let hargaPaket = 100000; // Harga dasar paket

            // Hitung biaya berdasarkan durasi dan jumlah peserta
            let hargaPaketTotal = hargaPaket * durasi * jumlahPeserta; // Total harga paket

            // Menghitung biaya layanan tambahan
            let hargaLayanan = 0; // Harga layanan tambahan awal
            if (penginapanChecked) {
                hargaLayanan += 1000000 * durasi * jumlahPeserta; // Biaya penginapan
            }
            if (transportasiChecked) {
                hargaLayanan += 1200000 * jumlahPeserta; // Biaya transportasi
            }
            if (makananChecked) {
                hargaLayanan += 500000 * durasi * jumlahPeserta; // Biaya makanan
            }

            // Hitung total biaya
            const jumlahTagihan = hargaPaketTotal + hargaLayanan; // Total tagihan

            // Perbarui bidang input formulir dengan nilai yang telah dihitung
            document.querySelector('input[name="harga_paket"]').value = hargaPaketTotal; // Memperbarui nilai input harga paket
            document.querySelector('input[name="harga_layanan"]').value = hargaLayanan; // Memperbarui nilai input harga layanan
            document.querySelector('input[name="jumlah_tagihan"]').value = jumlahTagihan; // Memperbarui nilai input jumlah tagihan
        }
    </script>
</body>
</html>
