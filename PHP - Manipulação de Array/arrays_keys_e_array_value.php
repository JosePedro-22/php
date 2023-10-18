<?php

$array = [
    "name" => "Jose Pedro",
    "age" => 26,
    "company" => "ATI",
    "color" => "blue",
    "profession" => "Desenvolvedor",

];
//gera um outro array naqual os indices do array passa para outro array como dados das chaves..
$chaves = array_keys($array);

print_r($chaves);
echo "<br /><br />";

//gera um outro array naqual os valores do array passa para outro array como dados das chaves..
$valores = array_values($array);

print_r($valores);