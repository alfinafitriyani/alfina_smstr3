<!-- Header -->
<?php include "../header.php"; ?>
<div class="container">
    <h1 class="text-center">Data to perform CRUD Operations</h1>
    <a href="create.php" class='btn btn-outline-dark mb-2'>
        <i class="bi bi-person-plus"></i> Create New User</a>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Icon</th>
                <th scope="col">judul_survei Survei</th>
                <th scope="col">Link</th>
                <th scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM users"; // SQL query to fetch all table data
            $view_users = mysqli_query($conn, $query); // sending the query to the database
            
            // displaying all the data retrieved from the database using while loop
            while ($row = mysqli_fetch_assoc($view_users)) {
                $ID = $row['ID'];
                $icon = $row['icon'];
                $judul_survei = $row['judul_survei'];
                $link = $row['link'];

                echo "<tr>";
                echo "<th scope='row'>$ID</th>";
                echo "<td><img src='$icon' alt='Icon' wIDth='50'></td>"; // Menampilkan gambar atau ikon
                echo "<td>$judul_survei</td>";
                echo "<td>$link</td>";
                echo "<td class='text-center'><a href='read.php?user_ID=$ID' class='btn btn-primary'><i class='bi bi-eye'></i> View</a></td>";
                echo "<td class='text-center'><a href='update.php?edit&user_ID=$ID' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a></td>";
                echo "<td class='text-center'><a href='delete.php?delete=$ID' class='btn btn-danger'><i class='bi bi-trash'></i> DELETE</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
    <a href="../index.php" class="btn btn-warning mt-5">Back</a>
</div>
<!-- Footer -->
<?php include "../footer.php"; ?>
