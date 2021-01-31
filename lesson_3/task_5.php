<?php
/*
 * Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
*/

function subSpace($str){
	return preg_replace('/\s/',  '_', $str); // regexp нагляднее, чем пробел ' '
	//return strtr($str, ' ', '_');
}
echo subSpace('Заменяем всем пробелы на _!');

echo "\n";

//Или циклом

function subSpaceCycle($str){
	$result_str = "";
	for($i = 0; $i < strlen($str); $i++){
		$let = substr($str, $i, 1);
		
		$result_str .= (preg_match('/\s/', $let)) ? '_' : $let;
		
		/*
		if (preg_match('/\s/', $let)) { // Можно ($let == ' '), но regexp нагляднее, чем пробел ' '
			$result_str.= '_';
		} else {
			$result_str.= $let;
		}*/
	}

	return $result_str;
}
echo (subSpaceCycle('Заменяем всем пробелы на _, с помощью цикла!'));
