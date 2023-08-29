<?php
require_once "./MysqlConnection.php";

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

$connect = $mysql->getConnection();

$id = $_GET['id'];
$query = $connect->prepare("delete from  movies where id = ?");
$query->execute([$id]);

header('Location: index.php');