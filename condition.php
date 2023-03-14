<?php

$isRain = false;

if ($isRain) {
    echo "Stay at home";
} else {
    echo "go Running!";
}

echo "<br>";

// $testString = "hallo disini string";
$ballIsRound;
$testNull = null;
$testString = "disini string";
//isset isi dari variable nya ada atau tidak, dan variablenya sudah di inisiasi atau belum
var_dump(isset($ballIsRound));
var_dump(is_null($testNull));

echo gettype($testString);
// var_dump($testString);

echo "<br>";

//nested condition
$userName = "User A";
$userGender = "f";
$userAge = 15;

if ($userGender == "m" ) {
    if ($userAge == 20) {
        echo "gender laki-laki berumur {$userAge}";
    } else {
        echo "gender laki-laki lebih atau kurang 20";
    }

} else {
    echo "gender wanita";
}
