<h1>Урок 14</h1>

<?php
    $title = 'ugabuga';
    require_once "../header.php";

    $file = fopen("text.txt", "w");

    fwrite($file, "\nfasfkado\nyayayaya");
    fclose($file);