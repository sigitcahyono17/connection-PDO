<?php

$queue = ['Doni', 'Ane', 'Gilbert', 'Gibran'];
$totalQueue = count($queue);
$finalTotalQueue = $totalQueue;

echo "Total Antrian {$totalQueue}<br>";
echo "Pasien yang sedang di layani = {$queue[0]}<br>";
echo "<br>";

//doni selesai di periksa
array_shift($queue);
$totalQueue = count($queue);
echo "Total Antrian {$totalQueue}<br>";
echo "Pasien yang sedang di layani = {$queue[0]}<br>";
echo "<br>";

// $temp = count($queue);
//tambah 2 orang
array_push($queue, 'Keil', 'Oliv');
// $tambahOrang = ['Keil', 'Oliv'];
// array_merge($queue, $tambahOrang);

// $finalTotalQueue = ($finalTotalQueue - count($queue)) + $finalTotalQueue;

//Ane selesai di periksa
array_shift($queue);
$totalQueue = count($queue);
echo "Total Antrian {$totalQueue}<br>";
echo "Pasien yang sedang di layani = {$queue[0]}<br>";
echo "<br>";

echo "<h1>Total yang merika = {$finalTotalQueue}</h1>";