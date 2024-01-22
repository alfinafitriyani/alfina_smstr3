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
        #tips-loker {
            margin-top: 30px; /* Adjust the margin-top value as needed */
            border-left: 2px solid #ddd; /* Vertical line color */
            padding-left: 20px; /* Padding to separate text from the vertical line */
        }

        .tips-image {
            width: 100%; /* Set the width of the image */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 20px; /* Adjust margin as needed */
        }
    </style>
</head>

<body>
    <!-- Include Navbar -->
    <?php include "navbar.php"; ?>

    <!-- Include Halaman Tips Lowker -->
    <div id="tips-loker" class="section">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Tips Mencari Lowongan Kerja</h2>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h3>Cari Pada Situs Lowongan Kerja Terpercaya</h3>
                        <img src="img/web-lowker.png" alt="Tip 1" class="tips-image">
                        <p>
                           Pilihlah lowongan kerja pada situs yang terpercaya seperti LOWKER.ID, karena LOWKER.ID sudah difilter sehingga tidak perlu diragukan lagi kredabilitasnya. Situs lowongan kerja dapat menjadi salah satu 
                           cara terbaik dalam mencari pekerjaan tanpa harus keluar rumah. Namun, Anda tetap harus mericek ulang perusahaan yang memosting lowongan kerja di situs tersebut untuk memastikan keadaan yang sesungguhnya.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3>Mengunjungi Web Dan Sosmed Perusahaan</h3>
                        <img src="img/sosmed.jpeg" alt="Tip 2" class="tips-image">
                        <p>Website dan sosial media kini menjadi tempat bagi perusahaan untuk mempromosikan usaha atau lowongan kerja. Dengan mengunjungi wesbite dan sosial media perusahaan, Anda jadi tahu apabila perusahaan tersebut sedang membuka lowongan kerja.
                        Pastikan Anda hanya mengunjungi website dan sosial media resmi mereka. Berhati-hatilah dengan akun palsu yang mengatasnamakan perusahaan tersebut.  
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3>Membuat CV Yang Menarik</h3>
                        <img src="img/cv.jpeg" alt="Tip 3" class="tips-image">
                        <p>
                            CV atau Curriculum Vitae adalah salah satu dokumen yang harus disertakan ketika melamar kerja. Maka dari itu untuk memperbesar peluang Anda bisa diterima menjadi karyawan di perusahaan impian, maka Anda harus bisa membuat CV yang menarik.
                            CV yang bagus adalah CV yang to the point, lengkap, namun tidak bertele-tele. Buat seringkas mungkin tapi sudah memenuhi semua unsur yang dibutuhkan.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3>Menghadiri Job Fair</h3>
                        <img src="img/job.jpeg" alt="Tip 4" class="tips-image">
                        <p>
                        Tips mencari lowongan pekerjaan yang efektif selanjutnya adalah menghadiri acara job fair. Keuntungan mencari kerja melalui job fair adalah Anda bisa bertemu langsung dengan HRD dan Anda akan langsung diinterview di tempat tersebut.
                        Meskipun harus mengeluarkan biaya untuk transport, tapi setidaknya perusahaan yang membuka lowongan di acara job fair benar-benar nyata bukan lowongan abal-abal.
                        </p>
                    </div>
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
