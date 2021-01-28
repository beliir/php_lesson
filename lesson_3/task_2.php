<?php
/*
  С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
  0 – это ноль.
  1 – нечетное число.
  2 – четное число.
  3 – нечетное число.
  …
  10 – четное число.
*/ 
function counter($num, $num_end) {
	do {
		if ($num == 0) {
			echo $num . ' - это ноль.<br>' . PHP_EOL;
		} elseif ($num % 2 == 0) {
			echo $num . ' - четное число.<br>' . PHP_EOL;
		} else {
			echo $num . ' - нечетное число.<br>' . PHP_EOL;
		}
		$num++;
	} while ($num <= $num_end);
}

counter(0, 10);
