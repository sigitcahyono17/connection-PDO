<?php
$array = ['andi', 'reza', 'ani', 'usr a'];


// echo $array[0] . "\n";
// echo $array[1] . "\n";
// echo $array[2] . "\n";

// echo count($array);


for ($i=0; $i < count($array); $i++) { 
    echo $array[$i] . "\n";
}

$scores = [
    [90, 80, 70],
    [20, 85, 40],
];

for ($i=0; $i < count($scores) ; $i++) { 
    for ($x=0; $x < count($scores[$i]); $x++) {
        echo "student score col-{$i} row-{$x} is {$scores[$i][$x]}\n";
    }
}



echo "\n";

// foreach ============================
$students = ['andi', 'reza', 'ani', 'usr a'];

foreach ($students as $student) {
    echo $student . "\n";
}

echo "=====================\n";
//associative array
$userIdentity = [
    'name'    => 'User A',
    'address' => 'user address',
    'phone'   => 'user phone',
    'email'   => 'user email',
];

// $userIdentity['name'];
// $userIdentity['address'];
// $userIdentity['phone'];

foreach ($userIdentity as $key => $value) {
    echo "key = {$key}, value = {$value} \n";
    // echo "key = {$key}, value = {$userIdentity[$key]} \n";
}

