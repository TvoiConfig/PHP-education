<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP lesson10</title>
</head>
<body>
<?php
    function info($word)
    {
        echo "$word<br>";
    }
    info(123);
    info(456);
    info(789);

    function math($x, $y)
    {
        return $x + $y;
    }
    $res1 = math(456, 789);
    $res2 = math(42, 10);
    info($res1);
    info($res2);


    function summary($arr)
    {
        $sum = 0;
        foreach($arr as $value) {
            $sum += $value;
        }
        return $sum;
    }
    $array = [4124, 14124, 61025];
    echo summary($array) . '<br>';
    echo summary([214.24, 512.5521, 19.2]) . '<br>';


    function info2()
    {
        global $x;
        echo $x . '<br>';
        $x = 0;
    }
    $x = 10;
    info2();
    echo $x . '<br>';


    function click()
    {
        static $count;
        $count++;
        echo $count . '<br>';
    }
    click();
    click();
    click();

?>
</body>
</html>