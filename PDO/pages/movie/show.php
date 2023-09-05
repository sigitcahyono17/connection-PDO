<?php
require_once "../../connection.php";

$connect = $mysql->getConnection();

$id = $_GET['id'];
$query = $connect->prepare("SELECT * from  movies where id = ?");
$query->execute([$id]);
$movie = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $movie["title"] ?></h1>
    <p><?= $movie["synopsis"]?></p>
</body>
</html>