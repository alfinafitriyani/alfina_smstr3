<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="">
    
<h1>Pengolahan Nama Dosen</h1>

<?php
    // Nama-nama Dosen disimpan dalam array
    $namaDosen = array("Indra Kurniawan, M.Kom", "Faiq Abror, M.Pd", "Shofia Ulfah, M.Kom", "Ahlis Nor Kholili, M.kom");

    // Menampilkan daftar nama Dosen
    echo "<h2>Daftar Nama Dosen:</h2>";
    echo "<ul>";
    foreach ($namaDosen as $nama) {
        echo "<li>$nama</li>";
    }
    echo "</ul>";

    // Fungsi untuk menghitung jumlah kata dan jumlah huruf pada nama
    function hitungJumlah($nama) {
        $jumlahKata = str_word_count($nama);
        $jumlahHuruf = strlen($nama);
        echo "<p>Jumlah Kata: $jumlahKata</p>";
        echo "<p>Jumlah Huruf: $jumlahHuruf</p>";
    }

    // Fungsi untuk menampilkan kebalikan dari nama
    function kebalikanNama($nama) {
        $kebalikan = strrev($nama);
        echo "<p>Kebalikan Nama: $kebalikan</p>";
    }

    // Memanggil fungsi untuk setiap nama dalam array
    foreach ($namaDosen as $nama) {
        echo "<h3><strong><u> $nama:</strong></u></h3>";
        hitungJumlah($nama);
        kebalikanNama($nama);
    }
?>
</body>
</html>