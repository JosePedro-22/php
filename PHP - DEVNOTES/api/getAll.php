<?php

require ('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'get'){
    $sql = $pdo->query('SELECT * FROM users');

    if($sql->rowCount() !== 0){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $item){
            $array['result'][] = [
                'id' => $item['id'],
                'name' => $item['name'],
                'email' => $item['email']
            ];
        }
    }


}else{
    $array['error'] = 'Method don"t permitted (just Get  Request)';
}

require ('../return.php');