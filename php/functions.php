<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP Functions</h2>
    <?php
    echo "// A user-defined function declaration starts with the word function:";
    echo "<br><br>";
    function writeMsg() {
    echo "Hello Everyone";
    }
    writeMsg();
    ?>

    <h3>PHP Function Agruments</h3>
    <?php
    function familyName($fname){
        echo "$fname Vodnala. <br>";
    }
    familyName("Veeraswamy");
    familyName("Rama Devi");
    familyName("Soumya");
    familyName("Shashidhar");
    ?>

    </body>
</html>