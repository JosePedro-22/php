<?php
require 'config.php';
require 'dao/UsuarioDaoPgsql.php';

    $usuarioDao = New UsuarioDaoPsql($pdo);

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if(!($name && $email && $password)){
        header('Location:adicionar.php');
        exit();
    }
    
    if(!($usuarioDao->findByEmail($email) === false)){
        header('Location:adicionar.php');
        exit();
    }

    $novoUsuario = new Usuario();

    $novoUsuario->setName($name);
    $novoUsuario->setEmail($email);
    $novoUsuario->setPassword($password);

    $usuarioDao->add($novoUsuario);

    header('Location:index.php');
    exit();