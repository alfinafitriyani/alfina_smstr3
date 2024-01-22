<?php
	require "../navbar_login.php";
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Lowker</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/index.css" rel="stylesheet" />
        <link href="../css/login.css" rel="stylesheet" />
        <!--     Fonts and icons     -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href="../font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <style>
            body {
            color: #000; /* Warna font hitam */
        }

        .form-signin {
            background-color: #fff; /* Warna latar belakang form putih */
            color: #000; /* Warna font pada form hitam */
            font-weight: bold; 
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Efek bayangan untuk form */
        }

        .form-signin input {
            color: #000; /* Warna font input hitam */
            background-color: #fff; /* Warna latar belakang input putih */
            border: 1px solid #000; /* Garis tepi input hitam */
        }

        .form-signin input::placeholder {
            color: #888; /* Warna placeholder input */
        }

        .btn-center {
            text-align: center;
        }

        </style>
    </head>

    <body>
        <div class="section section-header">
            <div class="parallax filter filter-color-black">
                <div class="image" style="background-image: url('../img/b.jpeg')">
                </div>
                <div class="container" style="opacity: .95;">
                    <div style="margin-top: 128px;">
                        <form class="form-signin" method="POST" action="php/calonpekerja_tambah_proses.php" enctype="multipart/form-data" style="border: none;">
                            <!--<img src="img/logo.png" width="90px" style="margin-bottom: 20px;"/>-->
                            <h7 class="login-text" style="color:#000">Daftar sebagai <b>Calon Pekerja</b>.</h7>
                            <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required/>
                            <input class="form-control" type="text" name="email" placeholder="Email" required/>
                            <input class="form-control" type="text" name="username" placeholder="Username" required/>
                            <input class="form-control" type="password" name="password" placeholder="Password" required/>
                            <input class="form-control" type="password" name="konfirmasi_password" placeholder="Konfirmasi Password" required/>
                            <input class="form-control" type="hidden" name="alamat" value="" required/>
                            <input class="form-control" type="hidden" name="kota_id" value="1" required/>
                            <input class="form-control" type="hidden" name="jk" value="L" required/>
                            <input class="form-control" type="hidden" name="tanggal_lahir" value="" required/>
                            <input class="form-control" type="hidden" name="tempat_lahir" value="" required/>
                            <input class="form-control" type="hidden" name="status_pernikahan" value="Lajang" required/>
                            <input class="form-control" type="hidden" name="telepon" value="" required/>
                            <input class="form-control" type="hidden" name="pendidikan_terakhir" value="SD" required/>
                            <input class="form-control" type="hidden" name="tempat_pendidikan_terakhir" value="" required/>
                            <input class="form-control" type="hidden" name="tempat_bekerja_terakhir" value="" required/>
                            <input class="form-control" type="hidden" name="pekerjaan_bekerja_terakhir" value="" required/>
                            <button class="btn btn-primary" type="submit" style="padding: 14px 20px; margin-top: 20px;">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/index.js"></script>
        <script type="text/javascript" src="../js/modernizr.js"></script>
    </body>

    </html>