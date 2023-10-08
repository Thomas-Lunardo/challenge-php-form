<?php


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