<?php

$students = ['rani', 'adi', 'aan', 'hana', 'andi'];

// for ($i=0; $i < count($students); $i++) { 
//     if ($i == 3) {
//         break;
//     }

//     echo "student {$students[$i]} \n";
// }

foreach ($students as $student) {
    if ($student == 'hana') {
        break;
    }

    echo "student {$student} \n";
}

// foreach ($students as $student) {
//     if ($student == 'hana') {
//         continue;
//     }

//     echo "student {$student} \n";
    
// }