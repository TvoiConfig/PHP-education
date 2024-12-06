
<h1>Главная страница</h1>

<?php
    $title = "php lesson 13";
    require_once '../header.php';

    echo date('d.m.y H:i:s') . '<br>';
    echo time() . '<br>';

    echo date('d.m.y H:i:s', strtotime("+1 Week 1 Hour 1 Minute -2 day")) . '<br>';
    echo date('d.m.y H:i:s', strtotime("last Friday")) . '<br>';
    echo date('d.m.y H:i:s', strtotime("last month ")) . '<br>';
?>

</body>
</html>
