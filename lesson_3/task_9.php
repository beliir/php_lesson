<?php
/*Объединить две ранее написанные функции в одну, 
 * которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания 
 * (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
*/

function translit($str){
	$arr=array(
		'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'zh','з' => 'z', 'и' => 'i', 'й' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch','ь' => '', 'ы' => 'y', 'ъ' => '',  'ш' => 'sh','щ' => 'shch', 'э' => 'e', 'ю' => 'yu','я' => 'ya','А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh','З' => 'Z', 'И' => 'I', 'Й' => 'I', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'Ch','Ш' => 'Sh','Щ' => 'Shch', 'Ь' => '',  'Ы' => 'Y', 'Ъ' => '',  'Э' => 'E', 'Ю' => 'Yu','Я' => 'Ya',
	);

	$result_str = preg_replace('/\s/', '_', strtr($str, $arr));
	return  $result_str;
}
echo(translit('Привет! Что нового? - Изучаю PHP!'));

//Или через цикл

function translitCycle($str){
	$arr=array(
		'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'zh','з' => 'z', 'и' => 'i', 'й' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch','ь' => '', 'ы' => 'y', 'ъ' => '',  'ш' => 'sh','щ' => 'shch', 'э' => 'e', 'ю' => 'yu','я' => 'ya','А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh','З' => 'Z', 'И' => 'I', 'Й' => 'I', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'Ch','Ш' => 'Sh','Щ' => 'Shch', 'Ь' => '',  'Ы' => 'Y', 'Ъ' => '',  'Э' => 'E', 'Ю' => 'Yu','Я' => 'Ya',
	);

	for ($i=0;$i<mb_strlen($str);$i++){
        $let = mb_substr($str, $i, 1);
        $result_str .= (preg_match('/\s/', $let)) ? '_' : $arr[$let];
	}

	return $result_str;
}
echo(translit('Привет! А ты используешь циклы?'));

