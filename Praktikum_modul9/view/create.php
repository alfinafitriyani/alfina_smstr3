<!-- Header -->
<?php include "../header.php"; ?>
<?php
if (isset($_POST['create'])) {
    $judul_survei = $_POST['judul_survei'];
    $link = $_POST['link'];

    // Check if a file is uploaded
    if (isset($_FILES['icon'])) {
        $iconFile = $_FILES['icon'];
        $iconFileName = $iconFile['name'];

        // Tentukan path relatif ke folder ikon
        $iconFolder = "../icons/";  // Gantilah dengan path folder ikon yang sesuai

        // Sesuaikan path lengkap ikon
        $iconPath = $iconFolder . $iconFileName;

        // Pindahkan file ikon ke folder yang ditentukan
        move_uploaded_file($iconFile['tmp_name'], $iconPath);

        // SQL query to insert survey data into the table
        $query = "INSERT INTO users(icon, judul_survei, link) VALUES ('$iconPath', '$judul_survei', '$link')";
        $add_survey = mysqli_query($conn, $query);

        // Displaying a proper message for the user to see whether the query executed perfectly or not
        if (!$add_survey) {
            echo "Something went wrong: " . mysqli_error($conn);
        } else {
            echo "<script type='text/javascript'>alert('Survey added successfully!')</script>";
        }
    } else {
        echo "Please upload an icon.";
    }
}
?>
<h1 class="text-center">Add Survey Details</h1>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="icon" class="form-label">Upload Icon/Logo</label>
            <input type="file" name="icon" class="form-control-file" required accept="image/*">
            <small class="form-text text-muted">Upload the icon for the survey.</small>
        </div>
        <div class="form-group">
            <label for="judul_survei" class="form-label">judul Survei</label>
            <input type="text" name="judul_survei" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="link" class="form-label">Link</label>
            <input type="text" name="link" class="form-control" required>
        </div>
        <div class="form-group">
            <input type="submit" name="create" class="btn btn-primary mt-2" value="Submit">
        </div>
    </form>
</div>
<!-- A BACK button to go to the home page -->
<div class="container text-center mt-3">
    <a href="home.php" class="btn btn-warning">Back</a>
</div>
<!-- Footer -->
<?php include "../footer.php"; ?>