<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>TRAVEL.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logopudam.png" rel="icon">
  <link href="assets/img/logopudam.png" rel="icon-logo">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrapp.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconify-icons/ri@v1.0.3/dist/styles/ri.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/style1.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconify-icons/ri@v1.0.3/dist/styles/ri.css">

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <h1>TRAVEL.</h1>
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="bukutamu.php">Buku Tamu</a></li>
          <li><a href="paketwisata.php">Daftar Paket</a></li>
          <li><a href="pemesanan.php">Pemesanan</a></li>
          <li><a href="kontak.php">Kontak</a></li>
          <li><a class="get-a-quote" href="login.php">Masuk</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="form" class="form pt-0 bg-gradient-light">
    <div class="container" data-aos="fade-up" data-aos-delay="500">
      <div class="section-title text-center">
        <h2>Form Pemesanan Paket Wisata</h2>
        <p>Form Pemesanan Paket Wisata</p>
      </div>
      <!-- awal row -->
      <div class="row mt-2">
        <div class="col-lg-2"></div>
        <!-- col lg-7 -->
        <div class="col-lg-8 col-md-12 mb-4">
          <div class="card shadow" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/img/adatkebo.jpg'); background-size: cover; background-position: center; color: #fff;" data-aos="fade-up" data-aos-delay="500">
            <!-- card body -->
            <div class="card-body">
              <div class="text-center"></div>
              <form class="user mx-auto" method="post" action="pemesananproses.php">
                <div class="form-group">
                  <span>Nama Pemesan</span>
                  <input type="text" class="form-control form-control-user" name="nama_pemesan" placeholder="Nama Pemesan" required>
                </div>
                <div class="form-group">
                  <span>Tanggal Pesan</span>
                  <input type="date" class="form-control form-control-user" name="tanggal_pesan" placeholder="Tanggal Pemesanan" required>
                </div>
                <div class="form-group">
                  <span>Pilih Paket</span>
                  <select id="paket_id" class="form-control" name="paket_id" style="border-radius: 50px;" required>
                    <option value="">-- Pilih Paket Wisata --</option>
                    <?php
                    // Koneksi ke database
                    require_once 'koneksi.php';
                    
                    // Query untuk mengambil ID dan nama paket dari tabel 'paket'
                    $sql = "SELECT id, nama_paket FROM paket";
                    $result = $conn->query($sql);
                    
                    // Periksa apakah ada hasil
                    if ($result->num_rows > 0) {
                        // Ulangi setiap baris dan buat elemen opsi
                        while ($row = $result->fetch_assoc()) {
                            $packageId = $row["id"]; // Mengambil ID paket
                            $packageName = $row["nama_paket"]; // Mengambil nama paket
                            echo "<option value='$packageId'>$packageName</option>"; // Menampilkan elemen opsi dengan nilai ID paket dan teks nama paket
                        }
                    } else {
                        echo "<option value=''>No packages found</option>"; // Menampilkan pesan jika tidak ada paket yang ditemukan
                    }                  
                    // tutup db
                    $conn->close();
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <span>Durasi</span>
                  <input type="number" class="form-control form-control-user" name="durasi" placeholder="Durasi Wisata (hari)" required>
                </div>
                <div class="form-group">
                  <span>Jumhlah Peserta</span>
                  <input type="number" class="form-control form-control-user" name="jumlah_peserta" placeholder="Jumlah Peserta" required>
                </div>
                <div class="form-group">
                  <span>Pilih Layanan</span>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="penginapan" name="layanan[]" value="penginapan">
                    <label class="form-check-label" for="penginapan">Penginapan (Rp 1.000.000)</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="transportasi" name="layanan[]" value="transportasi">
                    <label class="form-check-label" for="transportasi">Transportasi (Rp 1.200.000)</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="makanan" name="layanan[]" value="makanan">
                    <label class="form-check-label" for="makanan">Makanan (Rp 500.000)</label>
                  </div>
                </div>
                <div class="form-group">
                  <span>Harga Paket</span>
                  <input type="text" class="form-control form-control-user" name="harga_paket" placeholder="Harga Paket Wisata (Rp)" readonly>
                </div>
                <div class="form-group">
                  <span>Harga Layanan</span>
                  <input type="text" class="form-control form-control-user" name="harga_layanan" placeholder="Harga Layanan Tambahan (Rp)" readonly>
                </div>
                <div class="form-group">
                  <span>Jumlah Tagihan</span>
                  <input type="text" class="form-control form-control-user" name="jumlah_tagihan" placeholder="Jumlah Tagihan (Rp)" readonly>
                </div>
                <button type="button" class="btn btn-primary btn-user btn-block" onclick="hitungTagihan()">Hitung</button>
                <button type="submit" class="btn btn-success btn-user btn-block">Submit</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="#">TRAVEL. Banyuwangi | 2023 - <?= date('Y') ?></a>
              </div>
            </div>
            <!-- end card-box -->
          </div>
        </div>
        <!-- end col lg-7 -->
        <div class="col-lg-2"></div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <?php include "layout/footer.php" ?>

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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/datatables-demo.js"></script>
</body>

</html>
