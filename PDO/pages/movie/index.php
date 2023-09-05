<?php
require_once "../../connection.php";
require_once "../../libs/validation/Validation.php";
require_once "../../libs/validation/rule/RequiredRule.php";

$connect = $mysql->getConnection();
$errors = [];

//insert data to database
if (isset($_POST['title']) && isset($_POST['synopsis'])) {
    $attributes = [
        'name' => $_POST['title'],
        'synopsis' => $_POST['synopsis'],
    ];

    $rules = [
        'name' => [new RequiredRule()],
        'synopsis' => [new RequiredRule()]
    ];

    //validate before save
    $validation = new Validation();
    $validation->makeRule($attributes, $rules);

    if ($validation->isErrorsEmpty()) {
        $insertQuery = "insert into movies (title, synopsis) values (?, ?)";
        $payload = [$_POST['title'], $_POST['synopsis']];
        $prepareQuery = $connect->prepare($insertQuery);
        $insert = $prepareQuery->execute($payload);  
        
        header('Location: index.php');
    } else {
        $errors = $validation->getErrors();
    }

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
    <style>
        .errors {
            padding: 10px;
            color: #ff324d;  /* red */
        }
    </style>
</head>
<body>
    <?php if(count($errors) > 0): ?>
        <section class="errors">
            <?php foreach ($errors as $key => $error): ?>
                <?php foreach ($error as $err): ?>
                    <p><?= $err ?></p>
                <?php endforeach ?>
            <?php endforeach ?>
        </section>
    <?php endif; ?>
    <section>
        <div class="form-movie">
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" required>
                </div>
                <div class="form-group">
                    <label for="title">Synopsis</label>
                    <textarea name="synopsis" required></textarea>
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
                    <a href="/PDO/pages/movie/edit.php?id=<?= $movie['id'] ?>">Edit</a> |
                    <a href="/PDO/pages/movie/delete.php?id=<?= $movie['id'] ?>">Delete</a> |
                    <a href="/PDO/pages/movie/show.php?id=<?= $movie['id'] ?>">Show</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

