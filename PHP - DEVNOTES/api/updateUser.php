<?php

require '../config.php';

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'put'){

    parse_str(file_get_contents('php://input'), $input);

    $id = $input['id'] ?? null;
    $name = $input['name'] ?? null;
    $email = $input['email'] ?? null;
    $password = $input['password'] ?? null;

    $id = filter_var($id);
    $name = filter_var($name);
    $email = filter_var($email);
    $password = filter_var($password);

    if($id && $name && $password){
        $sql = $pdo->prepare('UPDATE users SET name= :name, email= :email, password= :password WHERE id= :id');

        $sql->bindValue(':id',$id);
        $sql->bindValue(':name',$name);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':password',$password);
        $sql->execute();

        $array['result'] = [
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'password' => $password
        ];

    }else $array['error'] = 'Method don"t permitted (just Put  Request)';

}else $array['error'] = 'Method don"t permitted (just Put  Request)';

require '../return.php';