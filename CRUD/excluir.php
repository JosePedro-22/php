<?php
    require('config.php');

    $id = filter_input(INPUT_GET, 'id');
    $info = [];

    if(!$id){
        header('Location:index.php');
        exit();
    }

    $sql = $pdo->prepare('DELETE FROM users WHERE id = :id');
    $sql->bindParam(':id', $id);
    $sql->execute();

    header('Location:index.php');
    exit();
?>