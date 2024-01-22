<?php require "php/connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Lowker</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/index.css" rel="stylesheet" />
    <!-- Fonts and icons -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href="font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .section-header {
            color: #333333; /* Warna teks sesuai kebutuhan */
        }

        .form-background {
            background-image: url('img/b1.jpeg'); /* Ganti 'path/to/your/bg-biru.jpeg' dengan path gambar Anda */
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh; /* Sesuaikan tinggi form dengan tinggi layar */
            position: relative;
        }

        .form-container {
            padding: 100px;
            border-radius: 5px;
            margin-top: 60px;
        }
        
        .form-control {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: block;
        }

        .form-control:focus {
            border-color: #59ABE3; /* Warna border saat elemen mendapatkan fokus */
            box-shadow: 0 0 5px rgba(89, 171, 227, 0.5); /* Efek shadow saat elemen mendapatkan fokus */
        }

        .btn-primary {
            border-radius: 5px; /* Ubah sudut border tombol sesuai keinginan */
            font-weight: bold;
        }

        .penjelasan {
            background-color: #fff; /* Warna latar belakang penjelasan */
            color: #333; /* Warna teks pada latar belakang putih */
            padding: 20px;
            margin-top: 60px;
            border-radius: 5px;
            position: relative;
            z-index: 1; /* Menetapkan z-index agar tampil di atas form */
        }
    </style>
</head>

<body>

<!-- Include Navbar -->
<?php include "navbar.php"; ?>

<!-- Include Halaman Utama -->
<div class="section section-header form-background">
    <div class="container">
        <form method="GET" action="lowongan_list.php" class="form-container">
            <div class="title-area">
                <h2>Cari Lowongan Pekerjaan</h2>
                <h5>Temukan Pekerjaan Yang Akan Anda Sukai.</h5><br/>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control input-lg" name="nama" placeholder="Lowongan Pekerjaan" />
                    </div>
                    <div class="col-md-4">
                        <select class="form-control input-lg" name="kota_id" style="height: 55px; font-size: 16px; display: block;">
                            <?php
                            $strQuery = "SELECT kota_id, kota_nama FROM kota";
                            $query = mysqli_query($connection, $strQuery);
                            echo "<option>Nama Kota</option>";
                            while($result = mysqli_fetch_assoc($query)){
                                echo "<option value=$result[kota_id]>$result[kota_nama]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <button type="Submit" class="btn btn-primary btn-fill btn-lg" style="height: 55px;">
                    Cari
                </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Penjelasan -->
<div class="container">
    <div class="row penjelasan">
        <h2 class="text-center">Jelajahi Peluang Kerja</h2>
        <hr>
        <div class="col-md-4">
            <h4>Lokasi</h4>
            <h5>Temukan beragam daerah yang menyediakan peluang pekerjaan untuk setiap kalian. Dari kota metropolitan hingga pedesaan, peluang karir menanti untuk ditemukan di setiap sudut.</h5>
        </div>
        <div class="col-md-4">
            <h4>Kategori</h4>
            <h5>Pilih kategori lowongan pekerjaan sesuai dengan minat dan keahlian kalian. Dengan banyaknya kategori yang tersedia, temukan pekerjaan yang benar-benar sesuai dengan passion dan kemampuan kalian.</h5>
        </div>
        <div class="col-md-4">
            <h4>Tipe Pekerjaan</h4>
            <h5>Temukan berbagai tipe pekerjaan yang sesuai dengan keinginan dan kemampuan kalian. Apakah itu pekerjaan penuh waktu, paruh waktu, atau bahkan pekerjaan jarak jauh, peluang pekerjaan yang bervariasi menanti untuk ditemukan.</h5>
        </div>
    </div>
</div>


<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- Include footer -->
<?php include "footer.php"; ?>
</body>

</html>
