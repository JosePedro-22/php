<?php
    require('config.php');
    require 'dao/UsuarioDaoPgsql.php';

    $usuarioDao = New UsuarioDaoPsql($pdo);

    $id = filter_input(INPUT_GET, 'id');

    if(!$id){
        header('Location:index.php');
        exit();
    }

    $usuarioDao->delete($id);

    header('Location:index.php');
    exit();
?>