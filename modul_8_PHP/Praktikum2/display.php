<?php
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "praktikpemogramanweb"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari database
$sql = "SELECT * FROM praktikpemogramanweb";
$result = $conn->query($sql);

// Menampilkan data
if ($result->num_rows > 0) {
    echo "<h2>Data yang Telah Disimpan</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Website</th><th>Comment</th><th>Gender</th><th>Created At</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["website"] . "</td><td>" . $row["comment"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["created_at"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data yang tersedia.";
}

$conn->close();
?>
