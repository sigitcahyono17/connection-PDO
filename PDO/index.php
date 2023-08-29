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

//insert data to database
if (isset($_POST['title']) && isset($_POST['synopsis'])) {
    $insertQuery = "insert into movies (title, synopsis) values (?, ?)";
    $payload = [$_POST['title'], $_POST['synopsis']];
    $prepareQuery = $connect->prepare($insertQuery);
    $insert = $prepareQuery->execute($payload);  
    
    header('Location: index.php');
}

//fetch data from database
$query = $connect->query("select * from movies;");
$movies = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="form-movie">
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title">
                </div>
                <div class="form-group">
                    <label for="title">Synopsis</label>
                    <textarea name="synopsis"></textarea>
                </div>
                <button type="submit">Simpan</button>
            </form>
        </div>
    </section>
    <table border="1" width="50%">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Synopsis</th>
            <th></th>
        </tr>
        <?php foreach($movies as $movie): ?>
            <tr>
                <td><?= $movie['id'] ?></td>
                <td><?= $movie['title'] ?></td>
                <td><?= $movie['synopsis'] ?></td>
                <td>
                    <a href="/PDO/edit.php?id=<?= $movie['id'] ?>">Edit</a> |
                    <a href="/PDO/delete.php?id=<?= $movie['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

