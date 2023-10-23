<?php
require('config.php');

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

if(!($name && $email && $password)){
    header('Location:adicionar.php');
    exit();
}
    $sql = $pdo->prepare('SELECT (id, name, email) FROM users WHERE email = :email');
    $sql->bindValue(':email', $email);
    $sql->execute();


    if($sql->rowCount() === 0){
        $sql = $pdo->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');

        $sql->bindParam(':name', $name);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':password', $password);
        $sql->execute();

        header('Location:index.php');
        exit();
    }else{
        header('Location:adicionar.php');
        exit();
    }

    