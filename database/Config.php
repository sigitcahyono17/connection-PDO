<?php

require_once 'MysqlConnection.php';

//please change this when server changed
$configDatabase = [
    'host'     => "127.0.0.1",
    'database' => "my_database",
    'user'     => "root",
    'password' => ""
];

$mysqlConnection = new MysqlConnectiontion(
    $configDatabase['host'],
    $configDatabase['database'],
    $configDatabase['user'],
    $configDatabase['password']
);

$connection = $mysqlConnection->getConnection();


