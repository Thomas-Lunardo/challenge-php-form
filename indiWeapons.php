<?php 

// http://localhost:8000/indiWeapons.php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

echo 'The opponent has choosen the ' . $opponentWeapon . "<br>";

$indyWeapon = match(true) {
    $opponentWeapon === 'fists' => 'gun',
    $opponentWeapon === 'whip' => 'fists',
    $opponentWeapon === 'gun' => 'whip',
};

echo 'So Indy chose his ' . $indyWeapon;

?>