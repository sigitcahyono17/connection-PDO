<?php
    $heading =  "Hello this is page 2";
    $weather = "cloudy";
    $score = 100;
    $name = "user-1";

    $angkaPertama = 10;
    $angkaKedua   = 2;

    $penambahan  = $angkaPertama + $angkaKedua;
    $pengurangan = $angkaPertama - $angkaKedua;
    $perkalian   = $angkaPertama * $angkaKedua;
    $pembagian   = $angkaPertama / $angkaKedua;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <p></p><?php echo 'hello world ' . "this is a good day"; ?></p>
    <p></p><?php echo "{$name} you score is {$score}"; ?></p>
    <p></p><?php echo '{$weather}'; ?></p>
    <p></p><?php echo "it's {$weather} day"; ?></p>
    <p></p><?php echo 'hallo echo here'; ?></p>
    <p></p><?php echo "it's good time"; ?></p>
    <p></p><?php echo 'it\'s good time'; ?></p>
    <p></p><?php echo $heading; ?> </p>
    <p></p><?php echo $heading . "- you text here" ?> </p>
    <p></p><?php echo "{$heading} - you text here" ?> </p>
    ====================================== <br>
    <?= "hallo echo here" ?> <br>
    <?= $heading; ?> <br>
    <h1>Arithmetic</h1>
    <p>Hasil Penambahan = <?= $penambahan ?></p>
    <p>Hasil Pengurangan = <?= $pengurangan ?></p>
    <p>Hasil Perkalian = <?= $perkalian ?></p>
    <p>Hasil Pembagian = <?= $pembagian ?></p>
</body>
</html>