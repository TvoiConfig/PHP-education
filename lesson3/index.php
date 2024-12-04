<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP lesson 3</title>
</head>
<body>
<?php
    define("MY_AGE", 19); // Устарело, так только для глобальных конфигов
    echo MY_AGE . "<br>";

    const MY_NICKNAME = "Tvoi_config";
    echo MY_NICKNAME;

    $number = 37; // integer
//    $number = 47;
    $num = -0.67; // float

    $str = "Переменная: "; // string

    $bool = true; // boolean

    $a = 0.5; // float
    $b = "0.5"; // string

    echo "<h3>Сложение разных типо данных</h3><br>";
    echo ($a + $b) . "<br>"; // не правильно так делать
    echo ($a + floatval($b)) . "<br>"; // правильно так делать

    echo "<h3>Вывод переменных</h3><br>";
    echo $str . $number . "<br>" . $str . $num;
?>
</body>
</html>