<!DOCTYPE html>
<html>
<body>
<?php
$buah = "apel";
echo "Saya suka makan " . $buah . "<br>";
echo "Saya suka makan " . $BUAH . "<br>"; // Ini akan menghasilkan error karena $BUAH tidak didefinisikan
echo "Saya suka makan " . $BuAh . "<br>"; // Ini akan menghasilkan error karena $BuAh tidak didefinisikan
?>
</body>
</html>
