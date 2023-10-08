<?php 

// http://localhost:8000/index.php

$animals = ['fish', 'monkey', 'horse'];
$elements = ['earth','wind','fire'];

$randomanimals = $animals[rand(0,2)];
$randomelements = $elements[rand(0,2)];

function writeSecretSentence($randomanimals, $randomelements) {
    return $randomanimals . ' s\'incline face à ' . $randomelements;
}

echo writeSecretSentence($randomanimals, $randomelements);

?>