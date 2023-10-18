<?php
    session_start();

    $nome = $_SESSION['name'];

    if(!isset($nome)){
        header('Location: form.php');
        exit;
    }
    header('Location: response.php');
    exit;

?>