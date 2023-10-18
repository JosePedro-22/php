<?php
    $array = ['a', 'b', 'c', 'd', 'e', 'f'];

    //remove o b, com o 4 parametro serve para adicionar 70
    $retorno = array_splice($array, 2, 1, [70]);
    
    print_r($array);