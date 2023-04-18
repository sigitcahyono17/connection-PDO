<?php
    // phpinfo();
    // die();
    require_once './database/Config.php';
    require_once './validation/Validation.php';
    require_once './validation/rules/RequiredRule.php';
    require_once './lib/Pagination.php';

    $validation = new Validation();

    if (isset($_POST['name'])) {
        $name    = $_POST['name'];
        $address = $_POST['address'];

        //before save validate first
        $attributes = [
            'name'    => $name,
            'address' => $address
        ];

        $rules = [
            'name' => [ new RequiredRule("New Error for name attribute") ],
            'address' => [ new RequiredRule()],
        ];

        $validation->makeRule(
            $attributes,
            $rules
        );

        if ($validation->isNoErrors()) { // if no errors save data to database
            //save to database
            $insertQuery = $connection->prepare("INSERT INTO students (id, name, address) VALUES (?, ?, ?);");
            $insertQuery->execute([null, $name, $address]);

            //redirect to new page if yuu want to prevend resubmit spost
            // header('Location: '.$_SERVER['PHP_SELF']);
            // die;
        }
    }

    $query = $connection->query("SELECT count(*) FROM students;");
    $totalData = $query->fetchColumn();

    $pagination = new Pagination($totalData, 10);

    // $page = $_GET['page'] ?? 1;
    // $perPage = 2;
    // $pages = ceil($totalData / $perPage);
    // $offset = ($page * $perPage) - $perPage;
    $query    = $connection->prepare("SELECT * FROM students ORDER BY id DESC LIMIT {$pagination->getPerPage()} OFFSET {$pagination->getOffset()};");
    $query->execute();
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
        <form action="" method="POST">
            <div>
                <label for="name">name</label>
                <input type="text" name="name">
                <span style="color: red"><?= $validation->getErrors()['name'][0] ?? '' ?></span>
            </div>
            <div>
                <label for="address">address</label>
                <textarea name="address" id="" cols="30" rows="10"></textarea>
                <span style="color: red"><?= $validation->getErrors()['address'][0] ?? '' ?></span>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['address'] ?></td>
                <td>
                    <a href="detail.php?id=<?= $student['id'] ?>">Detail</a> |
                    <a href="edit.php?id=<?= $student['id'] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $student['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="pagination">
        <?php for ($i=1; $i <= $pagination->getPages(); $i++): ?>
            <a href="?page=<?= $i ?>"><?= $i ?></a>
        <?php endfor; ?>
    </div>
</body>
</html>