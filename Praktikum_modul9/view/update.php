<!-- Header -->
<?php include "../header.php"; ?>
<?php
$userid = "";

if (isset($_GET['user_id'])) {
    $userid = $_GET['user_id'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Processing form data when the form is submitted
    $judul_survei = $_POST['judul_survei'];
    $link = $_POST['link'];

    // Check if a file is uploaded
    if (isset($_FILES['icon'])) {
        $iconFile = $_FILES['icon'];
        $iconFileName = $iconFile['name'];

        // Determine the relative path to the icon folder
        $iconFolder = "../icons/";

        // Adjust the complete path of the icon
        $iconPath = $iconFolder . $iconFileName;

        // Move the icon file to the specified folder
        move_uploaded_file($iconFile['tmp_name'], $iconPath);

        // SQL query to update data in the users table
        $query = "UPDATE users SET icon = '$iconPath', judul_survei = '$judul_survei', link = '$link' WHERE id = $userid";
        $update_survey = mysqli_query($conn, $query);

        if (!$update_survey) {
            echo "Something went wrong: " . mysqli_error($conn);
        } else {
            echo "<script type='text/javascript'>alert('Survey data updated successfully!')</script>";
        }
    } else {
        echo "Please upload an icon.";
    }
}

// Fetch existing survey data for pre-populating the form
$query = "SELECT * FROM users WHERE id = $userid";
$view_surveys = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($view_surveys)) {
    $id = $row['id'];
    $icon = $row['icon'];
    $judul_survei = $row['judul_survei'];
    $link = $row['link'];
}

?>
<!-- Rest of your HTML and form code goes here -->

<h1 class="text-center">Update Survey Details</h1>
<div class="container">
    <!-- Button to trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
        Update Survey
    </button>

    <!-- Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
        <!-- ... (sisa modal code) ... -->
    </div>
</div>
<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5">Back</a>
</div>
<!-- Footer -->
<?php include "../footer.php"; ?>
