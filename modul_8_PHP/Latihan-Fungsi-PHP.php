<html>
<head>
<title>Contoh Penggunaan List dalam HTML</title>
</head>
<body>
<h2>Daftar Antrian</h2>
<ol>
<?php
for ($i = 1; $i <= 35; $i++) {
echo "<li>Antrian ke-$i</li>";}
?>
</ol>
</body>
</html>