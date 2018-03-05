<?php

$a = 5;
$b = 10;

if ($a>=0 && $b>=0) {
	$result = $a - $b;
	echo 'Разность = '.$result;
}
elseif ($a<0 && $num_2<0) {
	$result = $a * $b;
	echo 'Произведение = '.$result;
}
else {
	$result = $a + $b;
	echo 'Сумма = '.$result;
}

// OR

function operationNum($num_1=0, $num_2=0){
	if ($num_1>=0 && $num_2>=0) {
		return 'Разность = '.($num_1 - $num_2);
	}
	elseif ($num_1<0 && $num_2<0) {
		return 'Произведение = '.($num_1 * $num_2);
	}
	return  'Сумма = '.($num_1 + $num_2);
}

echo(operationNum($a, $b));
