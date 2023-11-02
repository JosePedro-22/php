<?php

require '../config.php';

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'post'){

    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST,'password');
    
    if($name && $password){
        $sql = $pdo->prepare('INSERT INTO users (name,email,password) VALUES (:name,:email,:password)');
        $sql->bindValue(':name',$name);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':password',$password);
        $sql->execute();

        $id = $pdo->lastInsertId();

        $array['result'] = [
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ];

    }else $array['error'] = 'fields invalids';
}else $array['error'] = 'Method don"t permitted (just Post  Request)';

require '../return.php';