<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP lesson9</title>
</head>
<body>
<?php
    for($i = 100; $i >= 20; $i -= 5)
        echo $i.'<br>';

    $i = 1;
    while($i < 10) {
        echo $i.'<br>';
        $i++;
    }

    $i = 100;
    do {
        echo $i.'<br>';
    } while($i < 10);


    for($i = 100; $i > 10; $i /= 2) {
        if($i < 15)
            break;
        if($i % 2 == 0)
            continue;

        echo $i.'<br>';
    }


    // итерация массивов
    echo '<h2>Итерация массивов</h2>';
    $list = [23, 215, 125, 70124, 95];


    for($i = 0; $i < count($list); $i++ )
        echo "element $i: $list[$i]<br>";

    // Ассоциативный
    $massive = ["age" => 33, "name" => 'Alex', 'hobby' => 'Web developer'];

    foreach($massive as $item => $value) {
        echo "$item: $value<br>";
    }

    $arr = [1, 2, 3, 4];
    foreach($arr as $item) {
        echo "$item<br>";
    }
?>
</body>
</html>
