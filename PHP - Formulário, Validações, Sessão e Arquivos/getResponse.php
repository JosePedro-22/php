<?php
session_start();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$years = filter_input(INPUT_POST, 'years', FILTER_VALIDATE_INT);

if($name){

    $setTime = time() + (86400 * 30);
    //secao funciona enquanto o navegador estiver aberto, o cookie tem um validade especifica e fica armazenado no seu computador!
    setcookie('name', $name, $setTime);

    echo "<strong>Nome: ". $name. "</strong></br></br>";
    echo "<strong>Email: ". $email. "</strong></br></br>";
    echo "<strong>Idade: ". $years. "</strong></br></br>";


    echo "<a href='index.php'>home</a>";
}else{

    $_SESSION['aviso'] = "Preencha todos os campos de forma corrate";
    header('Location: index.php');
    exit;
}