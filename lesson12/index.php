<?php
    $title = "PHP lesson 12";
    require_once '../header.php';

?>
<div class="container">
    <h2 class="p-3">POST форма</h2>
    <form action="check_post.php" method="POST">
        <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
        <input type="email" name="email" placeholder="Введите e-mail" class="form-control"><br>
        <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
        <input type="submit" value="Отправить" class="btn btn-primary">
    </form>
</div>

<div class="container">
    <h2 class="p-3">GET форма</h2>
    <form action="check_get.php" method="GET">
        <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
        <input type="email" name="email" placeholder="Введите e-mail" class="form-control"><br>
        <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
        <input type="submit" value="Отправить" class="btn btn-primary">
    </form>
</div>

</body>
</html>