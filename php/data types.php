<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP Data Types</h2>
    <?php
    $r = "My father name is Veeraswamy";
    $v = "My mother name is Rama Devi";
    echo "1.STRINGS:";
    echo "<br><br>";
    var_dump($r);
    echo "<br>";
    var_dump($v);
    echo "<br><br>";
    echo "2.INTEGERS:";
    echo "<br><br>";
    $a = 65432;
    var_dump($a);
    echo "<br><br>";
    echo "3.FLOAT:";
    echo "<br><br>";
    $a = 65.71;
    var_dump($a);
    echo "<br><br>";
    echo "4.BOOLEAN:";
    echo "<br><br>";
    $d = true;
    var_dump($d);
    echo "<br><br>";
    echo "5.NULL:";
    echo "<br><br>";
    $h = null;
    var_dump($h);
    echo "<br><br>";
    echo "6.ARRAYS:";
    echo "<br><br>";
$Flowers = array("Lilly", "Rose", "Jasmin");
var_dump($Flowers);

    ?>
</body>
</html>