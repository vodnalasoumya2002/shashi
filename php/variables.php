<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Creating and Declaring PHP Variables</h2>
<?php
$txt = "My name is Soumya";
$x = 15;
$y = 3;
echo $txt;
echo "<br><br>";
echo $x;
echo "<br><br>";
echo $y;
echo "<br><br>";
?>
<h3>Output Variables</h3>
<?php
$txt = "DAD";
echo " My $txt is my hero";
echo "<br><br>";
$txt = "MOM";
echo "My " . $txt . " is my world";
echo "<br><br>";
?>
<h3>Arithmetic Operators</h3>
<?php
echo "Multiplication";
echo "<br>";
$x = 5;
$y = 6;
echo $x * $y;
echo "<br><br>";
echo "Addition";
echo "<br>";
$a = 126;
$b = 453;
echo $a + $b;
echo "<br><br>";
echo "Subtraction";
echo "<br>";
$d = 1345;
$f = 765;
echo $d - $f;
echo "<br><br>";
echo "Division";
echo "<br>";
$x = 150;
$y = 3;
echo $x / $y;
echo "<br><br>";
echo "Modulus";
echo "<br>";
$d = 543;
$g = 64;
echo $d % $g;
echo "<br><br>";
echo "Exponential";
echo "<br>";
$h = 7632;
$g = 76;
echo $h ** $g;
?>
</body>
</html>
