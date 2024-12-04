<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php lesson 4</title>
</head>
<body>
<?php
    $x = 10;
    $y = 20;

    echo "<h3>Все математические действия</h3>";
    echo $x + $y . "<br>";
    echo $x - $y . "<br>";
    echo $x * $y . "<br>";
    echo $x / $y . "<br>";
    echo $x % $y . "<br>";

    echo "<h3>+- 10 в одной и той же переменной</h3>";
    $x += 10;
    $y -= 10;
    echo $x . "<br>";
    echo $y . "<br>";

    $x++;
    $y--;

    echo $x . "<br>";
    echo $y . "<br>";

    echo "<h3>Встроенные константы</h3>";
    echo M_PI . "<br>";
    echo M_E . "<br>";

    echo "<h3>Встроенные функции</h3>";
    echo abs(-22) . "<br>";

    echo ceil(-22.4) . "<br>"; // к большему
    echo round(3.9) . "<br>";  // к ближайшему
    echo floor(3.9) . "<br>"; // к меньшему

    echo round(3.9151295921, 2) . "<br>";

    echo cos(60) . "<br>";

    echo mt_rand(1, 100) . "<br>";

    echo min(2, -5, 9, 23, -222) . "<br>";
    echo max(2, -5, 9, 23, -222) . "<br>";
?>
</body>
</html>