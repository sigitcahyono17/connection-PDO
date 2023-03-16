<?php


for ($i=0; $i < 3; $i++) { 
    echo '$i' . " value is {$i} \n";
}

echo "\n";
echo "==============================";
echo "\n";

$x = 0;
while ($x < 3) {
    echo '$i' . " value is {$x} \n";
    $x++;
}

echo "\n";
echo "==============================";
echo "\n";

$y = 3;
do {
    echo '$i' . " value is {$y} \n";
    $y++;
} while ($y < 3);