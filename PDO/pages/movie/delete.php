<?php
require_once "../../connection.php";
$connect = $mysql->getConnection();

$id = $_GET['id'];
$query = $connect->prepare("delete from  movies where id = ?");
$query->execute([$id]);

header('Location: index.php');