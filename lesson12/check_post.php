<?php
    $title = "PHP lesson 12";
    require_once '../header.php';

    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(trim($name) == '')
        echo "<h3>Вы не ввели имя пользователя!</h3><br>";
    else if(strlen(trim($name)) <= 1)
        echo "Имя не может содержать меньше 1 символа";
    else if(trim($email) == '' || trim($pass) == '' || trim($_POST['message']) == '')
        echo "Заполните данные формы";
    else {
        $_POST['password'] = md5(sha1($pass));
        foreach($_POST as $key => $value)
            echo "<h3>$value</h3><br>";

        header('location: about.php');
        exit;
    }

