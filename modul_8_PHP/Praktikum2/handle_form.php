<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai input dari formulir
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $komentar = $_POST["komentar"];
    $gender = $_POST["gender"];

    // Menampilkan data yang diinputkan
    echo "<h2>Data yang Anda inputkan:</h2>";
    echo "<p>Nama: " . $nama . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Website: " . $website . "</p>";
    echo "<p>Komentar: " . $komentar . "</p>";
    echo "<p>Jenis Kelamin: " . $gender . "</p>";
} else {
    // Jika halaman diakses langsung tanpa melalui formulir, redirect ke halaman formulir
    header("Location: index.php");
    exit();
}
?>