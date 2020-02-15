<?php

include 'zooFunctions.php';

$zoo = [];

$hyppoCage = [
	'number' => '55',
	'width' => '30',
	'height' => '5'
];

$crocodileCage = [
	'number' => '66',
	'width' => '30',
	'height' => '5'
];

$hyppo = [
	'species' => 'парнокопытный',
	'name' => 'Вася',
	'возраст' => 10,
	'cage' => $hyppoCage
];

$crocodile = [
	'species' => 'рептилия',
	'name' => 'Гена',
	'возраст' => 15,
	'cage' => $crocodileCage
];


$zoo[] = $hyppo;
$zoo[] = $crocodile;


animalInfo($hyppo);
cages($zoo);