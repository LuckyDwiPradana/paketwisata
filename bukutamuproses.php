<?php
include 'koneksi.php';

// Ambil data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pesan = $_POST['pesan'];

// Membuat query SQL untuk menyimpan data tamu
$sql = "INSERT INTO bukutamu (nama, pesan, alamat) VALUES ('$nama', '$pesan', '$alamat')";

if ($conn->query($sql) === TRUE) {
    // Jika penyimpanan berhasil, tampilkan alert dan kembali ke halaman bukutamu
    echo "<script>alert('Pesan berhasil disimpan');</script>";
    echo "<script>window.location.href = 'bukutamu.php';</script>";
} else {
    // Jika terjadi error, tampilkan pesan error
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
