<?php

class Animal {
	protected $name;
	protected $species = 'No species yet';
	protected $age;
	protected $cage;
	protected $voice = 'No voice yet';

	public function __construct($newName, $newAge, $newCage){
		$this->name = $newName;
		$this->age = $newAge;
		$this->cage = $newCage;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($newValue){
		if (gettype($newValue) == 'string'){
			$this->name = $newValue;
		} else {
			print_r('Bad name');
		}
	}

	public function setVoice($newVoice){
		$this->voice = $newVoice;
	}

	public function getVoice(){
		return $this->voice;
	}

	public function getCage(){
		return $this->cage;
	}
}