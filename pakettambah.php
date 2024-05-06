<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVEL.</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    
    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIHZlcnNpb249IjEuMSIKICAgcGF0aD0idXJsKCNhc3NldHMvY29tcGlsZWQvc3ZnL2ZhY2Vib29rLnN2Zyk7IgogICBpbmtzY2FwZTp2ZXJzaW9uPSIxLjAiCiAgIGlua3NjYXBlOmN1cnJlbnQtbGF5ZXI9ImxheWVyMSI+CiAgICA8cGF0aAogICAgICAgc3R5bGU9ImZpbGw6I2UwMDAwMDtmaWxsLW9wYWNpdHk6MC4wMDtzdHJva2U6bm9uZTsiCiAgICAgICBkPSJNMTQxLjYsOTUuN0wxMzgsOTcuMUw5MCwxMDAuN2MtMjIuOSwyNC0zNi43LDU0LjgtNTguOSw2NC4zYy05LjksMi45LTE5LjcsNy44LTQ1LjYsNy44Yy0zMS4xLDAtNTAuMiwxMy41LTUwLjIsMzEuMXMtNTAuMiwxMy41LTUwLjIsMzEuMXMyNy42LDAsNTMuNiwxOC43LDUzLjZjMTAuMSwwLDE5LjUsNy4xLDI3LjYsMTguN2MzMS4xLDAsNTAuMi0xMy41LDUwLjItMzEuMXMtNTAuMi0xMy41LTUwLjItMzEuMXMyNy42LDAsNTMuNiwxOC43LDUzLjZDMTMyLjEsOTUuNyw0MDAuNyw5NS43LDE0MS42LDk1Ljd6IgogICAgICAgdHJhbnNwYXJlbmN5PSJ0cnVlIgogICAgICAgaWQ9InBhdGg1NzgiCiAgICAgICBpbmtzY2FwZTpjb25kaXRpb25zPSJtZW5zYWdlOm9mZmxpbmUiPgogICAgICA8ZyBpZD0iUGF0aDU3NiI+CiAgICAgICA8ZyBpZD0iUGF0aDU3NCI+CiAgICAgICAgPGcgaWQ9InNvbHV0aW9uMCI+CiAgICAgICAgIDxnIGlkPSJjIj4KICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI2MiLz4KICAgICAgICAgIDx1c2UgeD0iMCIgeGxpbms6aHJlZj0iI2MiLz4KICAgICAgICAgIDx1c2UgeD0iMTAwIiB4bGluazpocmVmPSIjYyIvPgogICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4K">
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
</head>
<body>
    <!-- Pesan kesalahan -->
    <?php if (!empty($error_message)) : ?>
        <div class="alert  alert-danger text-center" role="alert">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>
    
    <script src="assets/static/js/initTheme.js"></script>
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
                            <h3>Data Agen</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="agentampil.php">Data Paket Wisata</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Tambah Paket Wisata</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Paket Wisata</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="paketproses.php" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Nama</label>
                                                        <input type="text" id="nama_paket" class="form-control" placeholder="Nama" name="nama_paket" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="harga">Harga</label>
                                                        <input type="number" id="harga" class="form-control" name="harga" step="0.01" placeholder="Harga" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="deskripsi">Deskripsi</label>
                                                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-column">Gambar</label>
                                                        <input type="file" id="gambar" class="form-control" name="gambar" placeholder="Gambar" onchange="displayFileName()" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>
            <footer>
                <?php include("layout/footer_admin.php"); ?>
            </footer>
        </div>
    </div>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
</body>
</html>
