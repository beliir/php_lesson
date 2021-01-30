<?php
$dir = 'img';
$images = scandir($dir);

foreach ($images as $image){
    if($image != '.' && $image != '..'){
        echo '<a class="gul-img" href="./img/' . $image . '" target=\"_blank\"><img src="./img/' . $image . '" width="400px" height="250px"/></a>';
    }
}





