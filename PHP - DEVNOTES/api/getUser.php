<?php

require '../config.php';

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'get'){
    $id = filter_input(INPUT_GET, 'id');
    
    if($id){
        $sql = $pdo->prepare('SELECT * FROM users WHERE id= :id');
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $array['result'] = [
                'id' => $data['id'],
                'name' => $data['name'],
                'email' => $data['email']
            ];
        }else $array['error'] = 'Id not found';
    }else $array['error'] = 'User not found';
}else $array['error'] = 'Method don"t permitted (just Get  Request)';

require '../return.php';