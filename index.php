<?php
// Koneksi ke database
include 'koneksi.php';

// Query untuk mengambil semua data paket dari database
$sql = "SELECT * FROM paket";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
?>
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
  <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>TRAVEL.</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Beranda</a></li>
          <li><a href="bukutamu.php">Buku Tamu</a></li>
          <li><a href="paketwisata.php">Daftar Paket</a></li>
          <li><a href="pemesanan.php">Pemesanan</a></li>
          <li><a href="kontak.php">Kontak</a></li>
          <li><a class="get-a-quote" href="login.php">Masuk</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center" style="background-image: url('assets/img/raung.jpg');">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Paket Wisata Lokal</h2>
          <p data-aos="fade-up" data-aos-delay="100" class="text-center;">
          Rasakan pengalaman tak terlupakan
          di destinasi jawa timur favorit kamu.</p>
          <div class="text-center">
          <a href="paketwisata.php" class="btn text-white" style="background-color: #EEB930;" >Lihat Paket</a>
        </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/pulautabuhan.jpg" class="img-fluid mb-3 mb-lg-0" alt="" alt="" style="border-radius: 50px;">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  
<!-- ======= Hero Section ======= -->
<section id="form" class="form pt-0 bg-gradient-light" >
  <div class="container" data-aos="fade-up" data-aos-delay="500">
    <div class="section-title text-center">
      <h2>Galeri Wisata</h2>
      <p>Galeri Wisata</p>
    </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-md-9">
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="assets/img/tamangaluh.jpeg" class="card-img-top" style="border-radius: 20px;  height: 300px; object-fit: cover;" />
                <div class="card-body">
                  <h5 class="card-tittle">Taman Galuh</h5>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="assets/img/megasari.jpeg" class="card-img-top"  style="border-radius: 20px; height: 300px; object-fit: cover;"/>
                <div class="card-body">
                  <h5 class="card-tittle">Megasari</h5>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="assets/img/pulautabuhan.jpg" class="card-img-top" style="border-radius: 20px;  height: 300px; object-fit: cover;"/>
                <div class="card-body">
                  <h5 class="card-tittle">Pulau Tabuhan</h5>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card">
                <img src="assets/img/pantai-papuma-jember-jawa-timur-644beea24addee0783700892.jpg" class="card-img-top"style="border-radius: 20px;  height: 300px;  object-fit: cover;" />
                <div class="card-body">
                  <h5 class="card-tittle">Pantai Papuma</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include "layout/sidebar.php"?>  
  </section><!-- End Hero -->

  <section id="hero" class="form pt-0 bg-gradient-light" style="background-image: url('assets/img/pulautabuhan.jpg');">
    <div class="container" data-aos="fade-up" data-aos-delay="500">
        <div class="section-title text-center">
            <h2>Paket Wisata</h2>
            <p>Paket Wisata</p>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php
                    $count = 0; // Menghitung jumlah card yang sudah ditampilkan
                    while ($row = $result->fetch_assoc()) {
                        if ($count < 3) { // Maksimal 3 card
                            ?>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="assets/img/<?php echo $row['gambar']; ?>" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title"><?php echo $row['nama_paket']; ?></h5>
                                        <p class="card-text flex-grow-1"><?php echo $row['deskripsi']; ?></p>
                                        <p class="card-text">Harga: Rp. <?php echo number_format($row['harga'], 2, ',', '.'); ?></p>
                                        <div class="text-center mt-auto">
                                            <a href="pemesanan.php" class="btn btn-primary">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $count++; // Menambah jumlah card yang sudah ditampilkan
                        } else {
                            break; // Keluar dari loop setelah 3 card ditampilkan
                        }
                    }
                    ?>
                </div>
                <?php if ($count >= 3) : // Tampilkan tombol "Lihat Selengkapnya" jika jumlah card lebih dari atau sama dengan 3 ?>
                    <div class="text-center mt-3">
                        <a href="paketwisata.php" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </div>

        <div class="row mt-5">

        <div class="col-lg-8 mt-5 mt-lg-0">

        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22730.06020945928!2d114.23220145568692!3d-8.30022608559988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1714451581248!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        </div>

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Adi Sucipto No.44, Singojuruh, Banyuwangi</p>
              </div>

              <div class="email">
              <i class="bi bi-browser-chrome"></i>
                <h4>Website:</h4>
                <a target="_blank" href= "http://www.travell.co.id/"><p>www.travel..co.id</p></a>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telp:</h4>
                <p>0823827384</p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  
  <?php include "layout/footer.php"?>  

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

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


  <!-- Vendor JS Files -->



  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
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
