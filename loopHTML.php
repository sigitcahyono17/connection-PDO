<?php
$x = 0;
$students = ['andi', 'reza', 'ani', 'usr a'];
$userIdentity = [
    'name'    => 'User A',
    'address' => 'user address',
    'phone'   => 'user phone',
    'email'   => 'user email',
];
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

    <h1>while loop alternative</h1>
    <?php for ($i=0; $i < 3; $i++) : ?>
        <p>Value if $i is <?= $i ?></p>
    <?php endfor; ?>

    <h1>while loop alternative</h1>

    <?php while ($x < 5) : ?>
        <p>Value if $i is <?= $x ?></p>
        <?php $x++; ?>
        <?php if (! ($x < 5)) : ?>
            <p>At the end value will be <?= $x ?></p>
        <?php endif; ?>
    <?php endwhile; ?>


    <h1>Hello this is foreach Example</h1>
    <?php foreach ($students as $student) : ?>
        <p><?= $student ?></p>
    <?php endforeach; ?>

    <h1>Hello this is foreach with associative array Example</h1>
    <?php foreach ($userIdentity as $key => $value) : ?>
        <p>key = <?= $key ?> | value = <?= $value ?></p>
    <?php endforeach; ?>
</body>
</html>