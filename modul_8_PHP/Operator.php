<?php
echo "<h2>Belajar Operator PHP</h2>";

echo "<h4>Operator Artitmatika</h4>";
$a = 5;
$b = 10;
 echo ("5 + 10 = ".$a + $b ."<br>"); //Output 15
 echo ("5 - 10 = ".$a - $b."<br>"); //Output -5
 echo ("5 * 10 = ".$a * $b."<br>"); //Output 50
 echo ("5 / 10 = ".$a / $b."<br>"); //Output 0.5
 echo ("5 % 10 = ".$a % $b."<br>"); //Output 5
 echo ("5 ** 10 = ".$a ** $b."<br>"); //Output 9765625
 echo ("-a = ".-$a ."<br>"); //Output 15

 echo "<h4>Operator Penugasan</h4>";


// 
$x = 5;
$x *= 3;
var_dump($x);
echo "<br>";
// 
$p = 5;
$p -= 10;
var_dump($p);
echo "<br>";
// 
$y = 5;
$y *= -100;
var_dump($y);
echo "<br>";
// 
$t = 5;
$t *= -10;
var_dump($t);
echo "<br>";

echo "<h4>Operator Perbandingan </h4>";

$x = 90;
$y = 80;
$z = 3;
$q = 6;
$r = 5;
$o = 'abc';
$a = 'a';
$b = 'b';


echo "90 > 80 != ";
var_dump ($a!=$x);
echo "<br>3 >= 3 = ";
var_dump($z >= $z);
echo "<br>3 < 6 = ";
var_dump($z < $q);
echo "<br>5 <= 3 = ";
var_dump($r <= $z);
echo "<br>'a' < 'b' = ";
var_dump($a < $b);
echo "<br>'abc' < 'b' = ";
var_dump($o < $b);
?>