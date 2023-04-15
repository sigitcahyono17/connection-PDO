<?php
    require_once './database/Config.php';
    if (isset($_GET['name'])) {
        $name    = $_GET['name'];
        $address = $_GET['address'];

        $insertQuery = $connection->prepare("INSERT INTO students (id, name, address) VALUES (?, ?, ?);");
        $insertQuery->execute([null, $name, $address]);
    }

    $query    = $connection->query("SELECT * FROM students ORDER BY id DESC;");
    $students = $query->fetchAll();
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
    <h1>Students</h1>
    <div class="container">
        <form action="" method="get">
            <div>
                <label for="name">name</label>
                <input type="text" name="name">
            </div>
            <div>
            <label for="address">address</label>
                <textarea name="address" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
    <pre>
        <?php print_r($students) ?>
    </pre>
</body>
</html>