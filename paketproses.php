<?php
// Koneksi ke database
include 'koneksi.php';

// Mengambil data dari form
$nama_paket = $_POST['nama_paket']; // Mengambil nilai nama paket dari form
$harga = $_POST['harga']; // Mengambil nilai harga dari form
$deskripsi = $_POST['deskripsi']; // Mengambil nilai deskripsi dari form
$gambar = $_FILES['gambar']['name']; // Mengambil nama file gambar dari form

// Memindahkan file gambar yang diunggah ke folder 'assets/img'
$target_dir = "assets/img/"; // Direktori tempat menyimpan file gambar
$gambar = basename($_FILES["gambar"]["name"]); // Mendapatkan nama file gambar
$target_file = $target_dir . $gambar; // Path lengkap untuk file gambar yang akan disimpan
move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file); // Memindahkan file gambar yang diunggah ke direktori target

// Query untuk menyimpan data ke database
$sql = "INSERT INTO paket (nama_paket, harga, deskripsi, gambar) VALUES ('$nama_paket', '$harga', '$deskripsi', '$gambar')";

// Eksekusi query SQL untuk menyimpan data ke database
if ($conn->query($sql) === TRUE) {
    header("Location: pakettampil.php"); // Mengalihkan pengguna ke halaman pakettampil.php setelah berhasil menyimpan data
    exit(); // Menghentikan eksekusi skrip
} else {
    echo "Error: " . $sql . "<br>" . $conn->error; // Menampilkan pesan error jika query gagal dieksekusi
}

// Tutup koneksi ke database
$conn->close();
?>
