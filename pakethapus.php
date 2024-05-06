<?php
// Koneksi ke database
require_once 'koneksi.php';

// Mendapatkan ID tamu yang akan dihapus
$id = $_GET['id'];

// Query untuk menghapus data tamu dari tabel bukutamu
$sql = "DELETE FROM paket WHERE id = $id";

//Memeriksa apakah permintaan yang diterima adalah metode POST
if ($conn->query($sql) === TRUE) {
    // Jika berhasil dihapus, tampilkan pesan sukses dan redirect ke halaman tampil data tamu
    $_SESSION['message'] = "Data paket wisata berhasil dihapus.";
    header("Location: pakettampil.php");
    exit();
} else {
    // Jika gagal dihapus, tampilkan pesan error
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi database
$conn->close();
?>