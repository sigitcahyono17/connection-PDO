<?php
    require_once './database/Config.php';

    $id = $_GET['id'];

    $prepare = $connection->prepare("SELECT * FROM students WHERE id = ?;");
    $prepare->execute([$id]);
    $student = $prepare->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detail Student</h1>
    <table>
        <tr>
            <td>ID</td>
            <td><?= $student['id'] ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><?= $student['name'] ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?= $student['address'] ?></td>
        </tr>
    </table>
</body>
</html>