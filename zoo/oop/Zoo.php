<?php

class Zoo {

	private $animals = [];

	public function __construct()
	{
		print_r('Я родился!');
	}

	public function addAnimal($newAnimal){
		$this->animals[] = $newAnimal;
	}

	public function addAnimalPack($animals){
		foreach ($animals as $animal){
			$this->animals[] = $animal;
		}
	}
}