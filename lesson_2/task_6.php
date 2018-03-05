<?php

function timeNow ($hour, $minute) {
	if ($hour%100 == 0 || ($hour%100 >= 5 && $hour%100 <= 20)) {
		$result .= $hour.' часов ';
	}
	elseif ($hour%10 == 1) {
		$result .= $hour.' час ';
	}
	else {
		$result .= $hour.' часa ';
	}
	
	if ($minute%10 == 0 || ($minute%10 >= 5 && $minute%10 <= 9) ||  ($minute%100 >= 11 && $minute%100 <= 14)) {
		$result .= $minute.' минут';
	}
	elseif ($minute%10 == 1) {
		$result .= $minute.' минута';
	}
	else {
		$result .= $minute.' минуты';
	}

	return $result;
}
echo (timeNow(date('G'), date ('i')));
