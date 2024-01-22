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
                <h2 class="text-center">Informasi</h2>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/ja1.jpeg" alt="Tip 1" class="tips-image">
                    </div>
                    <div class="col-md-3">
                        <img src="img/ja2.jpeg" alt="Tip 2" class="tips-image">
                    </div>
                    <div class="col-md-3">
                        <img src="img/ja3.jpeg" alt="Tip 3" class="tips-image">
                    </div>
                    <div class="col-md-3">
                        <img src="img/ja4.jpeg" alt="Tip 4" class="tips-image">
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
