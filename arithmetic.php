<?php
$angkaPertama = 10;
$angkaKedua   = 2;

$penambahan  = $angkaPertama + $angkaKedua;
$pengurangan = $angkaPertama - $angkaKedua;
$perkalian   = $angkaPertama * $angkaKedua;
$pembagian   = $angkaPertama / $angkaKedua;

echo "hasil penambahan = {$penambahan}";
echo "\n";
echo "hasil pengurangan = {$pengurangan}";
echo "\n";
echo "hasil perkalian = {$perkalian}";
echo "\n";
echo "hasil pembagian = {$pembagian}";
echo "\n";

// Modulus(sisa bagi)
$varMod1 = 365;
$varMod2 = 12;
$totalModulus = $varMod1 % $varMod2;

echo "hasil modulus = {$totalModulus}";
echo "\n";

// Eksponensial(pangkat)
$var1 = 3;
$var2 = 2;
$totalPangkat = $var1 ** $var2;

// 3 pangkat 2
echo "pangkat = {$totalPangkat}";
echo "\n";

$total = 2000;
$discount = 500;

// $total  = $total - $discount;
$total -= $discount;
// $total += $discount;
// $total /= $discount;
// $total *= $discount;

echo "total bayar = {$total}";
echo "\n";

$greed = "Good";
// you calculation
// $greed = $greed . " morning";
$greed .= " morning";

echo $greed;
echo "\n";

//konversi otomatis
$userA = 18;
$userB = "10 years old";

$totalAge = $userA + $userB;
echo $totalAge;
