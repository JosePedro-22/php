<?php

interface MatematicaBasica{
    public function somar($x, $y);
}

Class Basico1 implements MatematicaBasica{

    public function somar($x, $y){
        return $x + $y;
    }
}

Class Basico2 implements MatematicaBasica{
    
    public function somar($x, $y){
        while($y >= 0){
            $x++;
            $y--;
        }
        return $x;
    }
}

Class Matematica{

    private $basico;

    //normalmente por meio do constructor
    public function __construct(MatematicaBasica $b)
    {
        $this->basico = $b;
    }

    public function somar($x, $y){
        return $this->basico->somar($x, $y);
    }
}

//injecao de depencia é quando voce inseri uma classe dentro de outra.

$soma = new Matematica(new Basico1());
echo $soma->somar(10,12);