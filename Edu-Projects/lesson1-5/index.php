<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<h1 class="flex-center">Калькулятор на PHP</h1>
<div class="flex-center">
    <form method="POST">
        <label for="num1">Первое значени</label>
        <input class="width500" type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Второе значени</label>
        <input class="width500" type="number" id="num2" name="num2" required>
        <br>
        <label for="operation">Введите действие</label>
        <input class="width500" id="operation" name="operation" required>
        <br>

        <button type="submit">Посчитать</button>
    </form>
</div>


<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        $result = null;
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;

                } else {
                    $result = "На ноль делить нельзя!";
                }
                break;
            default:
                $result = 'неизвестный оператор';
        }

        echo "<div class='flex-center'><h2>Резльтат: $result</h2></div>";
    }
?>
</body>
</html>