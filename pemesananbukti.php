<?php
// Sertakan file koneksi ke database
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
        // Ambil detail pemesanan
        $row = $result->fetch_assoc();
        $nama_pemesan = $row['nama_pemesan']; // Mendapatkan nama pemesan
        $tanggal_pesan = $row['tanggal_pesan']; // Mendapatkan tanggal pesan
        $nama_paket = $row['nama_paket']; // Mendapatkan nama paket
        $durasi = $row['durasi']; // Mendapatkan durasi
        $jumlah_peserta = $row['jumlah_peserta']; // Mendapatkan jumlah peserta
        $harga_paket = $row['harga_paket']; // Mendapatkan harga paket
        $harga_layanan = $row['harga_layanan']; // Mendapatkan harga layanan
        $jumlah_tagihan = $row['jumlah_tagihan']; // Mendapatkan jumlah tagihan
?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Bukti Pemesanan</title>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
            <!-- Custom CSS -->
            <style>
                body {
                    background-color: #f8f9fa;
                }
                .card {
                    border-radius: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }
                .card-header {
                    background-color: #007bff;
                    color: #fff;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                }
                .card-body {
                    padding: 2rem;
                }
            </style>
        </head>
        <body>
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Bukti Pemesanan</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assets/img/pulautabuhan.jpg" alt="Gambar" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-6">
                                <p><strong>Nama Pemesan:</strong> <?php echo $nama_pemesan; ?></p>
                                <p><strong>Tanggal Pesan:</strong> <?php echo $tanggal_pesan; ?></p>
                                <p><strong>Paket Wisata:</strong> <?php echo $nama_paket; ?></p>
                                <p><strong>Durasi:</strong> <?php echo $durasi; ?> hari</p>
                                <p><strong>Jumlah Peserta:</strong> <?php echo $jumlah_peserta; ?></p>
                                <p><strong>Harga Paket Wisata:</strong> Rp <?php echo number_format($harga_paket, 0, ',', '.'); ?></p>
                                <p><strong>Harga Layanan Tambahan:</strong> Rp <?php echo number_format($harga_layanan, 0, ',', '.'); ?></p>
                                <p><strong>Total Tagihan:</strong> Rp <?php echo number_format($jumlah_tagihan, 0, ',', '.'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <p>Terima kasih atas pemesanan Anda!</p>
                        <div class="mt-3">
                            <a href="index.php" class="btn btn-primary">Kembali</a>
                            <a href="pemesanan.php" class="btn btn-success">Beli Lagi</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
<?php
    } else {
        echo "Data pemesanan tidak ditemukan.";
    }
} else {
    echo "ID pemesanan tidak tersedia.";
}
?>
