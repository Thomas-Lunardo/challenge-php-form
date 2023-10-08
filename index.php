<?php

// http://localhost:8000/index.php

$characters = [
    "Negan" => [
        "city" => "The Sanctuary",
        "weapon" => "Lucille"
    ],
    "Daryl" => [
        "city" => "Alexandria",
        "weapon" => "crossbow"
    ],
    "Ezekiel" => [
        "city" => "The Kingdom",
        "weapon" => "Shiva"
    ],
    "Toto" => [
        "city" => "Highground",
        "weapon" => "Patatore",
    ]
];

var_dump($characters);

$movie = [
    'Indiana Jones et le Cadran de la destinée' =>  ['Harisson Ford','Phoebe Waller-Bridge','Antonio Banderas'],
    'Indiana Jones et la dernière croisade' =>  ['Harisson Ford','Sean Connery','Alison Doody'],
    'Indiana Jones et le Temple maudit' => ['Harisson Ford','Kate Capshaw','Ke Huy Quan'],

] ;

foreach($movie AS $key => $values) {
    echo 'Dans le film' .$key. ' les principaux acteurs sont: ';
    foreach($values AS $value) {
        $value . ' ';
    }

}

$movies = [
    'Indiana Jones et la dernière croisade' => ['Harrison Ford', 'Phoebe Wallen-Bridge', 'Antonio Banderas'],
    'Indiana Jones et le royaume du crâne de cristal' => ['Harrison Ford', 'Cate Blanchett', 'Shia Labeouf'],
    'Indiana Jones et le Cadran de la destinée' => ['Harrison Ford', 'Sean Connery', 'Alison Doody'],
];

foreach ($movies as $key=>$actors){
	echo "Dans le film " . $key . ", les principaux acteurs sont : " . "<br>";
	foreach ($actors as $value){
		echo "-".$value. PHP_EOL . "<br>" . "<br>";
	}
}


?>