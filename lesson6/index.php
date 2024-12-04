<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php lesson 6</title>
</head>
<body>
<?php
    $a = 5;
    $str = "Hello";
    $isWeatherGood = true;

    if($a >= 5)
        echo 'a >= 5'.'<br>';


    if($str == "Hello" || $isWeatherGood)
        echo $str . '<br>';
    else if($a != 5)
        echo $a . '<br>';
    else if($a < 5)
        echo $a . '<br>';
    else
        echo 'Bye' .'<br>';

    if($str == "Hello" && $isWeatherGood)
        echo 'nice 2 meet u'.'<br>';
?>
</body>
</html>