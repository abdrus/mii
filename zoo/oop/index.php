<?php

require_once 'Zoo.php';
require_once 'Animal.php';
require_once 'Cage.php';
require_once 'Elephant.php';
require_once 'Crocodile.php';

$myZoo = new Zoo();

$elephantCage = new Cage(30);
$elephantCage
	->setWidth(60)
	->setHeight(10);

$elephant = new Elephant('Dumbo', '15', $elephantCage);

$crocodile = new Crocodile('Gena', '30', new Cage());

var_dump($elephant->getCage()->getDimensions());
var_dump($crocodile->getCage()->getDimensions());

$myZoo->addAnimal($elephant);
$myZoo->addAnimal($crocodile);

$myZoo->addAnimalPack(crocodileNest(10));

function crocodileNest($quantity){
	$pack = [];
	for ($i = 0; $i < $quantity; $i++){
		$pack[] = new Crocodile(md5(date("Y-m-d H:i:s")), rand(0, 50), new Cage());
	}
	return $pack;
}