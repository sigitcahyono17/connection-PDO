<?php

//bool true
var_dump(5 == '5');
//bool true
var_dump(5 == 5);
//bool true
var_dump('hello' == "hello");
//bool false
var_dump(5 != 5);

// ======= strict operand
echo "=================================\n";
$score = 75;

// true
var_dump($score === 75);
// false
var_dump($score === '75');
// true
var_dump($score !== '75');

// ======= greather than
echo "=================================\n";

var_dump(8 > 9); // false
var_dump(8 > 8.001); // false
var_dump(8 > 8); // false
var_dump(8 > '7'); //true
var_dump(8 >= 8); //true
var_dump('hello' > 'hel'); //true


// ======= Less-than
echo "=================================\n";
var_dump(8 < 9); // true
var_dump(8 < 8.001); // true
var_dump(8 <= 8); // true

//operator logic
//AND

$isHungry = false;
$isAnyFood = false;
$isSehatSentosa = true;

echo "=================================\n";
if($isHungry && $isAnyFood && $isSehatSentosa) {
    echo "Segera makan";
} else {
    echo "Segera gojek";
}
echo "\n";
//OR
echo "=================================\n";
if($isHungry || $isAnyFood) {
    echo "Segera makan";
} else {
    echo "Segera gojek";
}

echo "\n";
//NOT
echo "=================================\n";
var_dump(!$isHungry);

echo "\n";
//ELSE IF
echo "=================================\n";

$score = 90;

if($score >= 90) {
    echo 'A';
} elseif($score >= 80) {
    echo 'B';
} elseif($score >= 70) {
    echo 'C';
} elseif($score >= 60) {
    echo 'D';
} else {
    echo 'E';
}
 

