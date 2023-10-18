<?php

$array = ['1', '2', '3', '4', '5', '6', '7', '8','9', '10', '11', '12'];

function soma($subtotal, $item){
    $subtotal += $item;

    return $subtotal;
}

$value = array_reduce($array, 'soma');

print_r($value);