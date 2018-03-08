<?php
/*
    В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. 
    Необходимо представить пункты меню как элементы массива и вывести их циклом. 
    Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
*/

$menu_arr = array(
    "Главная",
    "Телефоны" => array("Смартфоны","Умные часы","Мобильные телефоны","Цифровые плееры"),
    "Компьтеры" => array("Комплектующие","Мониторы","Переиферия и акссуары","Серверы","Програмное обеспечение"),
    "Доставка",
    "Контакты",
    "Скидки"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Интернет магазин</title>
</head>
<body>
    <div class="menu">
        <ul>
            <?php foreach($menu_arr as $key=>$value):  ?>
                <?php if(is_array($value)): ?>
                    <li><?=$key;?>
                        <ul>
                            <?php foreach($value as $val): ?>
                                <li><?=$val;?></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php else: ?>
                    <li><?=$value;?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>