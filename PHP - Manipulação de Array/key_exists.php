<?php

$array = [
    "name" => "Jose Pedro",
    "age" => 26,
    "company" => "ATI",
    "color" => "blue",
    "profession" => "Desenvolvedor",

];
if(!key_exists('age', $array))
    echo "Nao existe a cahve idade!<br/>";
else    echo $array['age']." anos <br/>";
