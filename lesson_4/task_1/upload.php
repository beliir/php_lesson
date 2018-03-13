<?php

$type = $_FILES['image']['type'];
$tmp_name = $_FILES['image']['tmp_name'];
$path = 'img/'.$_FILES['image']['name'];

$size = 3145728;
$types = array('image/png', 'image/jpeg');

if($_FILES[image][size] > $size ){
    die ('Очень большой файл');
}

if(!in_array($type, $types)){
    die ('Это не картинка');
}

if(copy($tmp_name,$path)) {
    //echo 'Изображение успешно загружено';
    header("Location: /lesson_4/task_1/index.php?m=1");
}



