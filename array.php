<?php
//============Index Array====================
//cara pertama define variable array
// $studentScores = [80, 89, 88, 70];
//cara kedua
// $student2Scores = array(80, 89, 88, 70);

// var_dump($studentScores, $student2Scores);

$students = ['Student A', 'Student B', 'student C'];

// $students[2]
// echo rand(0, 2);
// echo $students[rand(0, 2)];
// echo count($students);
// echo sizeof($students);


//============Associative Array====================
// $studentScores = [
//     'studentA' => 80,
//     'studentB' => 50,
//     'studentC' => 70,
// ];

// echo "Nilai dari student C adalah {$studentScores['studentC']}";

//============Multidimensional Array====================
// $students = [
//     [
//         'name'  => 'Student A',
//         'score' => 80
//     ],
//     [
//         'name'  => 'Student B',
//         'score' => 50
//     ],
//     [
//         'name'  => 'Student C',
//         'score' => 70
//     ],
// ];
// echo "Nilai dari siswa dengan nama {$students[1]['name']} adalah {$students[1]['score']}";


// untuk menambah isi array di akhir
// array_push($students, 'Student D');

// untuk menambah isi array di awal
// array_unshift($students, 'Student D');

//untuk mengahapus value akhir array
// array_pop($students);

//untuk mengahapus value awal array
// array_shift($students);

//================== array merge =======================
$carBrands = ['BMW', 'Audi'];
$carBrands2 = ['Volvo', 'Toyota'];
$result = array_merge($carBrands, $carBrands2);

print_r($result);