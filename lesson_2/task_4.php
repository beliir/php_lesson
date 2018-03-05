<?php

function mathOperation($arg1, $arg2, $operation) {

	//Сумма
	function sumNum($num_1, $num_2){
		return $num_1 + $num_2;
	}
	//Разность
	function difNum($num_1, $num_2){
		return $num_1 - $num_2;
	}
	//Умножение
	function multNum($num_1, $num_2){
		return $num_1 * $num_2;
	}
	//Деление
	function divNum($num_1, $num_2){
		return $num_1 / $num_2;
	}

	switch ($operation) {
		case 'sum': {
			$result = sumNum($arg1, $arg2);
			break;
		}
		
		case 'dif': {
			$result = difNum($arg1, $arg2);
			break;
		}
		case 'mult': {
			$result = multNum($arg1, $arg2);
			break;
		}

		case 'div': {
			$result = divNum($arg1, $arg2);
			break;
		}
	}
	return $result;
}

//$operation = Сумма - sum; Разность - dif; Умножение - mult; Деление - div
echo (mathOperation(5,6,'mult'));

