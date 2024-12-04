<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lesson3 homework</title>
</head>
<body>
<?php
// ?name=Jon&age=23

    $urlName = $_GET["name"];
    if($urlName == "")
        echo "Передайте в ссылке ?name= для приветствия!";
    else
        echo "Здравствуй, $urlName! <br>";

    $urlAge = $_GET["age"];
    if($urlAge == "")
        echo "Передайте в ссылке ?age= для определение возраста";
    else {
        if($urlAge < 12)
            echo "Вам меньше 12, вы - ребенок";
        elseif ($urlAge >= 12 && $urlAge < 18)
            echo "Вам >= 12 и < 18, вы - подросток";
        elseif ($urlAge >= 18)
            echo "Вам >= 18 вы - взрослый";
        else
            echo "Вы передали не корректный возраст";
    }

?>
</body>
</html>