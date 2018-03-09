<?php
/*
2) Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.
*/

function randTable ($row, $cols){
	$colors = array('red','yellow','blue','gray','maroon','brown','green');
	$table = '<table style="display:table; border:2px; width:700px; height:400px;">';
	
	for($tr=1;$tr<=$row;$tr++){
		$table.='<tr>';
			for($td=1;$td<=$cols;$td++){
				$table.='<td bgcolor='.$colors[Rand(0,count($colors)-1)].'>'.Rand();'</td>';			
			}
		$table.='</tr>';
	}
	
	$table.='</table>';
	return $table;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<style>
		table {display:none}
	</style>
	<form action="task_1.php" method="POST">
		<span>Количество столбцов</span>
		<input type="text" name="row" value="0"><br>
		<span>Количество строк</span>
		<input type="text" name="cols"  value="0"><br>
		<input type="submit" value="Создать">
	<form>
	<?php echo(randTable($_POST["row"], $_POST["cols"]))?>
</body>
</html>