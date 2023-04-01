<?php

function say_hello() {
    echo "Hello im from function\n";
}

say_hello();

echo "\n";

// function with parameter
function say_hello_with_param($studentName) {
    echo "Hello im from function {$studentName}";
}

say_hello_with_param("Sultan");

echo "\n";
echo "=====================\n";

function driving_license($name, $age, $gender) {
    if ($age >= 17) {
        $status = "allowed";
    } else {
        $status = "not allowed";
    }

    if ($gender == "m") {
        $honorific = "Mr.";
    } elseif ($gender == "f" && $age <= 15) {
        $honorific = "Ms.";
    } else {
        $honorific = "Mrs.";
    }

    echo "Hello {$honorific} {$name}, you are {$status} to have driving license \n";
}

$users = [
    [
        'name'   => 'Edwin',
        'age'    => 25,
        'gender' => 'm'
    ],
    [
        'name'   => 'Ira',
        'age'    => 15,
        'gender' => 'f'
    ],
    [
        'name'   => 'Andi',
        'age'    => 30,
        'gender' => 'm'
    ],
    [
        'name'   => 'Intan',
        'age'    => 25,
        'gender' => 'f'
    ],
];

foreach ($users as $user) {
    driving_license($user['name'], $user['age'], $user['gender']);
}

// driving_license("Edwin", 20, "m");
// driving_license("Sultan", 15, "m");
// driving_license("Hana", 30, "f");

function perkalian(int $angka1 = 1, int $angka2 = 1) {
    $result = $angka1 * $angka2;

    echo "result = {$result}";
}

// perkalian('a', 'b');
// perkalian(2, 2);
perkalian();

function print_harga($harga): string {
    $result = "harga ojek = {$harga}";

    return $result;
}

function ojek_calculation(int $jarak, int $harga = 2000) {
    $result = $jarak * $harga;

    echo print_harga($result);
}

ojek_calculation(4, 2000); //let say user has a discount 50%
ojek_calculation(4);



