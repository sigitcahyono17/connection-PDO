<?php
    require_once './database/Config.php';
    $query    = $connection->query("SELECT * FROM students;");
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
    <pre>
        <?php print_r($students) ?>
    </pre>
</body>
</html>