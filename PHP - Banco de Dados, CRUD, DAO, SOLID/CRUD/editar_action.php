<?php
require('config.php');

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    echo $id. " /".$name. "/ ".$email. " /" . $password;

    if(!($name && $email && $password)){
        header('Location:adicionar.php');
        exit();
    }

    $sql = $pdo->prepare('UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id');
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql->bindParam(':name', $name);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':password', $password);
    $sql->bindParam(':id', $id);
    $sql->execute();

    header('Location:index.php');
    exit();