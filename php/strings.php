<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP Strings</h2>
    <?php
    echo "# The PHP strlen() function returns the length of a string.";
    echo "<br><br>";
    echo strlen("PHP means Hyper Text Pre-Processor");
    echo "<br><br>";
    echo "# The PHP str_word_count() function counts the number of words in a string.";
    echo "<br><br>";
    echo str_word_count("I am a Data Science Student");
    echo "<br><br>";
    echo "# The PHP strrev() function reverses a string.";
    echo "<br><br>";
    echo strrev("Vodnala Soumya");
    echo "<br><br>";
    echo "# strpos() - Search for a text within a string";
    echo "<br><br>";
    echo strpos("Shashidhar is my Brother", "is");
    echo "<br><br>";
    echo "# str_replace() - Replace text within a string";
    echo "<br><br>";
    echo str_replace("Soumya", "Ammu", "Hello Soumya");
    ?>
</body>
</html>