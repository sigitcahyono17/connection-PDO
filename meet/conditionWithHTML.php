<?php
    $isSevenTeen = true;
    $fontColor   = "green";

    if ($isSevenTeen) {
        $status = "sudah boleh membuat SIM";
    } else {
        $status = "belum boleh membuat SIM";
        $fontColor = "red";
    }

    // ============ switch ===============
    // switch case is case sensitive
    $color = "red";

    switch ($color) {
        case 'red':
            echo 'the color is red';
            break;

        case 'green':
            echo 'the color is green';
            break;

        case 'black':
            echo 'the color is black';
            break;
        
        default:
            echo 'go to default';
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition With HTML</title>
</head>
<body>
    <h1>Test SIM</h1>
    <p style="color: <?= $fontColor ?>"><?= $status ?></p>
</body>
</html>