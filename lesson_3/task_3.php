<?php
/*
  3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
  Московская область:
  Москва, Зеленоград, Клин
  Ленинградская область:
  Санкт-Петербург, Всеволожск, Павловск, Кронштадт
  Рязанская область … (названия городов можно найти на maps.yandex.ru)
*/

$arr = array(
  "Московская область" => array("Москва","Зеленоград","Клин"),
  "Ленинградская область" => array("Санкт-Петербург","Всеволожск","Павловск","Кронштадт"),
  "Рязанская область" => array("Рязань","Касимов","Кораблино","Ряжск","Сасово")
);

foreach($arr as $key => $value ){
	$cities = '';
	foreach($value as $city){
		$cities .= $city . ', ';
	}
	echo $key . ':<br>' . substr($cities, 0, -2) . '<br>' . PHP_EOL;
}
