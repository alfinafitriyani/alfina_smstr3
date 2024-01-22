<!-- Header -->
<?php include "../header.php" ?>
<?php
if (isset($_POST['create'])) {
$icon = $_POST['icon'];
$judul = $_POST['judul'];
$link = $_POST['link'];
// SQL query to insert icon data into the icons table
$query = "INSERT INTO icons(iconname, judul, link) 
VALUES('{$icon}','{$judul}','{$link}')";
$add_icon = mysqli_query($conn, $query);
// displaying proper message for the icon to see whether the query executed perfectly or not 
if (!$add_icon) {
echo "something went wrong " . mysqli_error($conn);
} else {
echo "<script type='text/javascript'>alert('icon added successfully!')</script>";
}
}
?>
<h1 class="text-center">Add icon details </h1>
<div class="container">
<form action="" method="post">
<div class="form-group">
<label for="icon" class="form-label">icon/logo</label>
<input type="text" name="icon" class="form-control" required>
</div>
<div class="form-group">
<label for="judul" class="form-label">Judul Survei</label>
<input type="judul" name="judul" class="form-control" required>
</div>
<div class="form-group">
<label for="link" class="form-label">Link</label>
<input type="linkword" name="link" class="form-control" required>
</div>
<div class="form-group">
<input type="submit" name="create" class="btn 
btn-primary mt-2" value="Submit">
</div>
</form>
</div>
<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
<a href="home.php" class="btn btn-warning mt-5"> Back 
</a>
<div>
<!-- Footer -->
<?php include "../footer.php" ?>