<?php
// Koneksi ke database
include 'koneksi.php';

// Ambil data dari form
$nama_pemesan = $_POST['nama_pemesan']; // Mendapatkan nama pemesan dari form
$tanggal_pesan = $_POST['tanggal_pesan'];
$paket_id = $_POST['paket_id'];
$durasi = $_POST['durasi'];
$jumlah_peserta = $_POST['jumlah_peserta'];
$layanan = isset($_POST['layanan']) ? implode(",", $_POST['layanan']) : "";

// Hitung harga paket
$harga_paket = 100000 * $durasi * $jumlah_peserta;

// Hitung harga layanan
$harga_layanan = 0;
if (strpos($layanan, "penginapan") !== false) {
    $harga_layanan += 1000000 * $durasi * $jumlah_peserta;
}
if (strpos($layanan, "transportasi") !== false) {
    $harga_layanan += 1200000 * $jumlah_peserta;
}
if (strpos($layanan, "makanan") !== false) {
    $harga_layanan += 500000 * $durasi * $jumlah_peserta;
}

// Hitung jumlah tagihan
$jumlah_tagihan = $harga_paket + $harga_layanan;

// Simpan data ke database
$sql = "INSERT INTO pemesanan (nama_pemesan, tanggal_pesan, paket_id, durasi, jumlah_peserta, harga_paket, harga_layanan, jumlah_tagihan)
        VALUES ('$nama_pemesan', '$tanggal_pesan', '$paket_id', $durasi, $jumlah_peserta, $harga_paket, $harga_layanan, $jumlah_tagihan)";

if ($conn->query($sql) === TRUE) {
    // Mendapatkan ID pemesanan terakhir yang diinsert
    $last_id = $conn->insert_id;

    // Mengalihkan ke halaman pemesananbukti.php dengan ID pemesanan sebagai parameter
    header("Location: pemesananbukti.php?id=$last_id");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
