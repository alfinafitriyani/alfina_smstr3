<style>
    /* Warna font navbar */
    .navbar-nav a,
    .navbar-brand,
    .dropdown-menu li a {
        color: #222222 !important; /* Ganti dengan warna biru sesuai preferensi Anda */
    }

    /* Warna font tombol dropdown */
    .btn-primary {
        color: #222222 !important; /* Ganti dengan warna biru sesuai preferensi Anda */
        background-color: #F0F8FF !important; /* Ganti dengan warna yang cocok dengan biru */
    }

    /* Warna pada hover */
    .navbar-nav a:hover,
    .navbar-brand:hover,
    .dropdown-menu li a:hover,
    .btn-primary:hover {
        color: #FFFFFF !important; /* Ganti dengan warna font sesuai preferensi Anda */
        background-color: #222222 !important; /* Ganti dengan warna latar belakang sesuai preferensi Anda */
    }
</style>
<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand" style="color: #00000; margin-right: 70px;">
                LOWKER.ID
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left navbar-uppercase">
                <li><a href="../index.php" style="color: #00000;">Beranda</a></li>
                <li><a href="../tips_lowker.php" style="color: #00000;">Tips Lowker</a></li>
                <li><a href="../informasi.php" style="color: #00000;">Informasi</a></li>
                <li><a href="../tentang_kami.php" style="color: #00000;">Tentang Kami</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-uppercase">
                <!-- Dropdown pada Navbar -->
                <li class="dropdown">
                    <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #00000;">
                        DAFTAR
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="../perusahaan/daftar.php">PERUSAHAAN</a></li>
                        <li><a href="../calonpekerja/daftar.php">CALON PEKERJA</a></li>
                    </ul>
                </li>
                <!-- End Dropdown pada Navbar -->
                <!-- Dropdown pada Navbar -->
                <li class="dropdown">
                    <a href="#" class=" btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #00000;">
                        MASUK
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="../perusahaan/masuk.php">PERUSAHAAN</a></li>
                        <li><a href="../calonpekerja/masuk.php">CALON PEKERJA</a></li>
                        <li><a href="../admin/login.php">ADMIN</a></li>
                    </ul>
                </li>
                <!-- End Dropdown pada Navbar -->
            </ul>
        </div>
    </div>
</nav>

