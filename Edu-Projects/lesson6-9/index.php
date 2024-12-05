<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <title>PHP project 2</title>
</head>
<body>
<h1 class="flex-center">Проверка возраста на PHP</h1>
<div class="flex-center">
    <form method="POST">
        <label for="text1">Ваше имя</label>
        <input class="width500" type="text" id="text1" name="text1" required>
        <br>
        <label for="num1">Ваш возраст</label>
        <input class="width500" type="number" id="num1" name="num1" required>
        <br>
        <label for="text2">Ваш город</label>
        <input class="width500" type="text" id="text2" name="text2" required>
        <br>

        <button type="submit">Посчитать</button>
    </form>
</div>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $massive = [
            "name" => $_POST["text1"],
            "age" => $_POST["num1"],
            "city" => $_POST["text2"]
        ];

        echo '<div class="flex-center"><h2>';
        foreach ($massive as $key => $value) {
            echo $key . ": " . $value . '<br>';
        }
        echo '</h2></div>';

        if ($massive['age'] < 18)
            echo '<div class="flex-center"><h2>Ты несовершенно-летний!</h2></div>';
        else if($massive['age'] > 25)
            echo '<div class="flex-center"><h2>Ну ты и скуф!</h2></div>';
    }
?>
</div>
</body>
</html>