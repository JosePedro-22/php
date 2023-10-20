<?php
//O que é Namespace no PHP ? Método que encapsula o nome de uma classe para ser usada em vários locais.
namespace classes\matematica;

Class Matematica{

    public float $pi = 3.14;

    public function getValorPi(){
        return $this->pi;
    }
}