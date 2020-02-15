<?php

class Cage {
	private $number;
	private $width;
	private $height;

	public function __construct($number = null, $width = null, $height=null){
		$this->setNumber($number);
		$this->setWidth($width);
		$this->setHeight($height);
		return $this;
	}

	public function getNumber(){
		return $this->number;
	}

	public function setNumber($newNumber){
		$this->number = $newNumber;
		return $this;
	}

	public function getWidth(){
		return $this->width;
	}

	public function setWidth($newWidth){
		$this->width = $newWidth;
		return $this;
	}

	public function getHeight(){
		return $this->height;
	}

	public function setHeight($newHeight){
		$this->height = $newHeight;
		return $this;
	}

	public function getDimensions(){
		return [
			'номер' => $this->getNumber(),
			'ширина' => $this->getWidth(),
			'высота' => $this->getHeight()
		];
	}
}