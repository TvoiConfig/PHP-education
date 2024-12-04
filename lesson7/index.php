<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP lesson 7</title>
</head>
<body>
<?php
    $x = mt_rand(1, 10);
    echo "Сгенерировано число: $x" . '<br>';

    switch ($x) {
        case 5:
            echo "$x совпадает с первым case";
            break;
        case 7:
            echo "$x совпадает со вторым case";
            break;
        case 9:
            echo "$x совпадает с третьим case";
            break;
        case 1:
            echo "$x совпадает с четвертым case";
            break;
        default:
            echo "$x не совпадает с case";
            break;
    }
?>
</body>
</html>