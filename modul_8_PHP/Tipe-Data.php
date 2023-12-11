<?php
// Tipe Data Integer
$umur = 19;

//  Tipe Data Float
$tinggiBadan = 153;

// Tipe Data String
$nama = "Alfina Fitriyani";

// Tipe Data Array
$Hobi = array("Membaca", "Melukis");

// Menampilkan menggunakan echo
echo "Nama: $nama<br>";
echo "Umur: $umur tahun<br>";
echo "Tinggi Badan: $tinggiBadan cm<br>";

// Menampilkan hobi menggunakan foreach
echo "<br>Hobi:<br>";
echo "<ul>";
foreach ($mataKuliah as $pelajaran) {
    echo "<li>$pelajaran</li>";
}
echo "</ul>";
?>
