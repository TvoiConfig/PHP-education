<h1>Урок 14</h1>

<?php
    $title = 'ugabuga';
    require_once "../header.php";

    $massive = [5, 2, 13, 5126, 21];
    unset($massive[1]);
    $massive = array_values($massive);
    rsort($massive);
    print_r($massive);
    echo '<br>';

    shuffle($massive);
    print_r($massive);
    echo '<br>';

    if(!in_array(2135, $massive))
        echo "Not found <br>";
    else
        echo "Found <br>";

    $massive = array_slice($massive, 2, count($massive));
    print_r($massive);
