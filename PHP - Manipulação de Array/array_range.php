<?php

$array = range(50, 20, 2);

$array1 = range('a', 'z');

foreach ($array as $index){
    echo $index."<br/>";
}
echo "<br/>";
foreach ($array1 as $index){
    echo $index."<br/>";
}