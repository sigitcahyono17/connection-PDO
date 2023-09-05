<?php
require_once "libs/MysqlConnection.php";

$config = [
    'host'     => 'localhost', // 127.0.0.1
    'database' => 'net_watch',
    'user'     => 'root',
    'password' => ''
];

$mysql = new MysqlConnection(
    $config['host'],
    $config['database'],
    $config['user'],
    $config['password'],
);

?>
