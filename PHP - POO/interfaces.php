<?php
//  disponibiliza tipos variados de acesso entre componentes, como por exemplo: constantes, tipos de dado, procedimentos, especificação de exceções e assinaturas de métodos

// e caso algun class que faz o implement dessa interface nao definir em seu corpo a estrutura dessa interface, ira acusa erro, pois todos os dados sao obrigatórios nas estruturas implementadas
interface Email {
    public function dispararEmail();

    public function receberEmail();

    public function editarEmailEmail();

    public function apagarEmail();
}

class Email1 implements Email{
    public function dispararEmail(){
        echo "disparando email 1 <br/>";
    }

    public function receberEmail(){
        echo "recebendo email 1 <br/>";
    }

    public function editarEmailEmail(){
        echo "editando email 1 <br/>";
    }

    public function apagarEmail(){
        echo "apagando email 1 <br/>";
    }
}

class Email2 implements Email{
    public function dispararEmail(){
        echo "disparando email 2 <br/>";
    }

    public function receberEmail(){
        echo "recebendo email 2 <br/>";
    }

    public function editarEmailEmail(){
        echo "editando email 2 <br/>";
    }

    public function apagarEmail(){
        echo "apagando email 2 <br/>";
    }
}

class Email3 implements Email{
    public function dispararEmail(){
        echo "disparando email 3 <br/>";
    }

    public function receberEmail(){
        echo "recebendo email 3 <br/>";
    }

    public function editarEmailEmail(){
        echo "editando email 3 <br/>";
    }

    public function apagarEmail(){
        echo "apagando email 3 <br/>";
    }
}

$email = new Email2();
$email->dispararEmail();
$email->receberEmail();
$email->editarEmailEmail();
$email->apagarEmail();