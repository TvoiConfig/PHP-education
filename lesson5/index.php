<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php lesson 5</title>
</head>
<body>
<?php
    $str = "Hello";
    echo "VAR: $str" . '<br>';
    echo '<input type="text">' . '<br>';

    $length = strlen($str);
    echo $length;

    echo trim("   sads  ") . '<br>';
    echo strtoupper("   sads  ") . '<br>';
    echo strtolower("   SADS  ") . '<br>';

    echo strtoupper(trim("   sads  ")) . '<br>';

    echo md5("password123") . '<br>';
?>
</body>
</html>