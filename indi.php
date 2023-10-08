<?php

// http://localhost:8000/indi.php

$movieTitle  = "Indiana Jones and the Last Crusade";
$didIseeIt = TRUE;
$yearOut = 1989;
$scoreImdb = 8.2;


    echo $movieTitle ."<br>". $didIseeIt ."<br>". $yearOut ."<br>". $scoreImdb ."<br>";



// ******** Quetes 3 *****************//


    $firstname = 'Indiana';
    $lastname = 'Jones';

    $fullname = $firstname . ' ' . $lastname; // le résultat d'une concaténation peut aussi être enregistré dans une variable.  
  
    $film = $fullname . ' et le temple maudit' ."<br>";

    $avis = 'J\'aime bien regarder ' . $film;
    echo $avis;  // affiche : J'aime bien regarder Indiana Jones et le temple maudit;

$actor = 'Harrison Ford';
echo $actor[0] . PHP_EOL; 
// affiche 'H' car c'est le premier caractère de la chaîne $actor;

echo $actor[1] . PHP_EOL; 
// affiche 'a', le second caractère.

echo $actor[9] . PHP_EOL ."<br>"; 
// affiche 'F'

echo PHP_EOL . '/-----------Majuscules------------/' . PHP_EOL;

$name = 'indiana jones';
echo strtoupper($name) . PHP_EOL;
echo ucfirst($name) . PHP_EOL;
echo ucwords($name) . PHP_EOL ."<br>";

echo PHP_EOL . '/-----------Remplacement------------/' . PHP_EOL;

$text = 'Indiana Jones est un professeur';
echo str_replace('professeur', 'aventurier', $text) . PHP_EOL;
echo str_replace('archéologue', 'aventurier', $text) . PHP_EOL ."<br>";

$team = 'Harrison Steven George';
$persons = explode(' ', $team);
echo implode (',', $persons); 
// implode prend en paramètres un délimiteur et un tableau. 
// affiche "Harrison,Steven,George". Une chaîne est créée à partir des chaînes contenues dans le tableau, et le délimiteur (ici la virgule) est placé entre chaque élément du tableau.
// pour utiliser implode(), le délimiteur est un paramètre optionnel
echo implode($persons); // affiche "HarrisonStevenGeorge".





    