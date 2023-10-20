<?php

class Pessoa {
    public string $name;
    public string $corPele;
    public int $idade;
    public float $altura;
}


$pessoa1 = new Pessoa();
$pessoa1->name = 'José Pedro';
$pessoa1->corPele  = 'Branca';
$pessoa1->idade = 26;
$pessoa1->altura = 1.85;

print_r($pessoa1);