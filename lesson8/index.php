<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP lesson 8</title>
</head>
<body>
<?php
    // одномерные
    $numbers = array(5, 4, 23, -55, 9);
    $numbers[1] = 0;
    echo $numbers[0] . '<br>';
    echo $numbers[1] . '<br>';

    $arr = array('Privet', 6, 29.42, true);
    $arr[3] = false;
    echo $arr[0] . '<br>';

    // Ассоциативные
    $list = ["age" => 50, "name" => "Alex", "hobby" => "draw", 2 => 532];
    $list["name"] = "Bob";
    echo $list['name'] . '<br>';
    $list[2] = 555;
    echo $list[2] . '<br>';

    // Многомерные
    $matrix = [
            ["1", 2, 3],
            [4, true],
            [7, 8, '<h4>тег из массива</h4>', 2.5]
    ];
    echo $matrix[2][2] . '<br>';

?>
</body>
</html>