<?php
session_start();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$years = filter_input(INPUT_POST, 'years', FILTER_VALIDATE_INT);

if($name){
    echo "<strong>Nome: ". $name. "</strong></br></br>";
    echo "<strong>Email: ". $email. "</strong></br></br>";
    echo "<strong>Idade: ". $years. "</strong></br></br>";
}else{

    $_SESSION['aviso'] = "Preencha todos os campos de forma corrate";
    header('Location: index.php');
    exit;
}