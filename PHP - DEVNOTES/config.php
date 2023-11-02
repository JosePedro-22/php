<?php

$db_name = 'api-resource';
$db_host = 'localhost';
$db_user = 'postgres';
$db_password = 'admin123';

$pdo = new PDO('pgsql:dbname='.$db_name.';host='.$db_host, $db_user, $db_password);

$array = [
    'error' => '',
    'result' => []
];