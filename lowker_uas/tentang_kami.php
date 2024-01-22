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
        #tentang_kami {
            margin-top: 5px; /* Sesuaikan nilai margin-top jika diperlukan */
            border-left: 2px solid #ddd; /* Warna garis vertikal */
            padding-left: 20px; /* Padding untuk memberi jarak antara teks dan garis vertikal */
        }

        .left-content {
           
            padding: 20px; /* Padding di dalam bagian kiri */
        }

        .right-content {
            background-color: #87CEEB; /* Warna latar belakang untuk bagian kanan */
            padding: 20px; /* Padding di dalam bagian kanan */
        }
    </style>
</head>

<body>
    <!-- Include Navbar -->
    <?php include "navbar.php"; ?>

    <!-- Include Halaman Tips Lowker -->
    <div id="tentang_kami" class="section">
        <div class="container">
            <div class="row">
                <!-- Bagian Kiri -->
                <div class="col-md-10 left-content">
                    <div class="section-title">
                        <h2 class="head-title lg-line text-center">Tentang Kami</h2>
                        <hr class="botm-line">
                        <h4 class="sec-para">Website <strong>LOWKER.ID</strong> merupakan website yang menyediakan berbagai macam fitur. Tentunya kami berkomitmen untuk membantu setiap individu untuk mencapai karir
                            dengan menyediakan akses mudah  ke informasi terkini dan lowongan pekerjaan berkualitas. Bergabunglah dengan kami dan bangun masa depan karier yang gemilang!</h4>
                            <img src="img/web-lowker.png" alt="web" class="web" width="800" height="300">
                    </div>
                </div>

                <!-- Bagian Kanan -->
                <br><br><br><br><br>
                <div class="col-md-2 right-content order-md-last">

                    <p>"Bantu website kami untuk terus berkembang dan memberikan manfaat lebih besar! Kami selalu berusaha keras untuk memberikan pengalaman terbaik bagi pengguna LOWKER.ID. Dukungan Anda sangat berarti dalam membantu kami menyediakan informasi lowongan pekerjaan terkini dan berbagai fitur yang memudahkan perjalanan karier Anda."-Author</p>
                    <P></P>
                </div>
            </div>
        </div>
    </div>
    <!-- Include footer -->
<?php include "footer.php"; ?>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>
