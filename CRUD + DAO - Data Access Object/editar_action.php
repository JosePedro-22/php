<?php
require('config.php');
require 'dao/UsuarioDaoPgsql.php';

    $usuarioDao = New UsuarioDaoPsql($pdo);

    $id = filter_input(INPUT_POST, 'id');
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    echo $id. " /".$name. "/ ".$email. " /" . $password;

    if(!($name && $email && $password)){
        header('Location:editar.php?id='.$id);
        exit();
    }

    $usuario = new Usuario();
    $usuario->setName($name);
    $usuario->setEmail($email);
    $usuario->setPassword($password);
    $usuario->setId($id);

    $usuarioDao->update($usuario);

    header('Location:index.php');
    exit();