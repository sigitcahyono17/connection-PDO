<?php

$queue = ['Doni', 'Ane', 'Gilbert', 'Gibran'];
$totalQueue = count($queue);

echo "Total Antrian {$totalQueue}<br>";
echo "Pasien yang sedang di layani = {$queue[0]}<br>";
echo "<br>";

//doni selesai di periksa
array_shift($queue);
$totalQueue = count($queue);
echo "Total Antrian {$totalQueue}<br>";
echo "Pasien yang sedang di layani = {$queue[0]}<br>";
echo "<br>";

//tambah 2 orang
array_push($queue, 'Keil', 'Oliv');

//Ane selesai di periksa
array_shift($queue);
$totalQueue = count($queue);
echo "Total Antrian {$totalQueue}<br>";
echo "Pasien yang sedang di layani = {$queue[0]}<br>";
echo "<br>";