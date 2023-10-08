<?php

// php -S localhost:8000
// http://localhost:8000/array.php


$movies['Les aventuriers de l\'arche perdue'] = 1981 . PHP_EOL;
$movies['Le Temple maudit'] = 1984 . PHP_EOL;
$movies['Dernière Croisade'] = 1989 . PHP_EOL;

arsort($movies);

foreach ($movies as $key => $year) {
    echo $year . " - " . $key . "\n";
}
?>




  






