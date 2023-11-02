<?php

require '../config.php';

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'delete'){

    parse_str(file_get_contents('php://input'), $input);

    $id = $input['id'] ?? null;
    $id = filter_var($id);

    if($id){
        $sql = $pdo->prepare('SELECT * FROM users WHERE id= :id');
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $pdo->prepare('DELETE FROM users WHERE id= :id');
            $sql->bindValue(':id',$id);
            $sql->execute();

        }else $array['error'] = 'Dont possibility DELETE user';
        
    }else $array['error'] = 'User not found';

}else $array['error'] = 'Method don"t permitted (just DELETE Request)';

require '../return.php';