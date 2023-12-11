<?php
// Tipe Data Integer
$umur = 19;

//  Tipe Data Float
$tinggiBadan = 153;

// Tipe Data String
$nama = "Alfina Fitriyani";

// Tipe Data Array
$mataKuliah = array("Diskrit", "Logika Informatika", "Pemograman Web","Sistem Basis Data");

// Menampilkan menggunakan echo
echo "Nama: $nama<br>";
echo "Umur: $umur tahun<br>";
echo "Tinggi Badan: $tinggiBadan cm<br>";

// Menampilkan daftar mata pelajaran menggunakan foreach
echo "<br>Mata Kuliah Yang Diambil:<br>";
echo "<ul>";
foreach ($mataKuliah as $pelajaran) {
    echo "<li>$pelajaran</li>";
}
echo "</ul>";
?>
