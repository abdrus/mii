<?php

/**
 * Эта функция выводит данные о животном
 * @param $animal
 * @author Ruslan Abdullaev
 */
function animalInfo($animal){
	foreach ($animal as $key => $value) {

		if(gettype($value) == 'array'){
			foreach ($value as $k => $v) {
				printf("-- $k : $v \n");
			}
		} else {
			printf("$key : $value \n");
		}

	}
}

function cages($zoo){
	foreach ($zoo as $animal) {
		$num = $animal['cage']['number'];
		print_r("$num \n");
	}
}