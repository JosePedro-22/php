<?php

Class Pessoa {
    public int $id;
    public string $name = '';
    public string $sobrenome = '';
    public string $carPele = '';
    private int $idade;
    public float $peso;
    //method constructor setar as paramet ao iniciar a class
    public function __construct($PessoaId){
        $this->id = $PessoaId;
    }
    public function addIdade (){
        $this->idade++;
    }

    public function setIdade($year){
        $this->idade = $year;
    }
    public function getIdade(){
        echo 'Idade by Get '.$this->idade;
    }
    // quando uma function é static podesse usar ela sem precisar criar um objeto da classe, pode instanciar direta a class::function
    public static function soma ($x, $y){
        return $x+$y;
    }
}

//herança class cachorro herdando atributos e metodos da classe Pessoa
class Cachorro extends Pessoa{
    public string $corPelo = '';

    public function setCorPelo($pelo){
        $this->corPelo = $pelo;
    }

    public function getCorPelo(){
        return $this->corPelo;
    }
}
$pessoa = new Pessoa(1);
$pessoa->name = 'José Pedro';
$pessoa->sobrenome = 'Mesquita';
$pessoa->carPele = 'Branca';
$pessoa->setIdade(25);
$pessoa->peso = 100.3;

$pessoa->setIdade(30);
$pessoa->getIdade();
echo "<br/><br/>";
print_r($pessoa);
echo "<br/><br/>";
$pessoa->addIdade();
print_r($pessoa);
echo "<br/><br/>";
echo Pessoa::soma(10,33);

echo "<br/><br/>Cachorro<br/>";
$caramelo = new Cachorro(1);
$caramelo->setCorPelo('amarelo');
echo $caramelo->getCorPelo();