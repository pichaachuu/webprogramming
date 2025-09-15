<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo"Hasil penjumlahan $a dan $b adalah $hasilTambah<br>";
echo"Hasil pengurangan $a dan $b adalah $hasilKurang<br>";
echo"Hasil perkalian $a dan $b adalah $hasilKali<br>";
echo"Hasil pembagian $a dan $b adalah $hasilBagi<br>";
echo"Hasil sisa bagi $a dan $b adalah $sisaBagi<br>";
echo"Hasil $a dipangkat $b adalah $pangkat<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br><br>";

echo "Apakah a sama dengan b? " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br><br>";

echo "Logika AND a dengan b adalah " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Logika OR a dengan b adalah " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Logika NOT a adalah " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Logika NOT b adalah " . ($hasilNotB ? 'true' : 'false') . "<br><br>";

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br><br>";
$a += $b;
echo "Setelah a += b, nilai a: $a <br>";
$a -= $b;
echo "Setelah a -= b, nilai a: $a <br>";
$a *= $b;
echo "Setelah a *= b, nilai a: $a <br>";
$a /= $b;
echo "Setelah a /= b, nilai a: $a <br>";
$a %= $b;
echo "Setelah a %= b, nilai a: $a <br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br><br>";

echo "Apakah a identik dengan b (===)? " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Apakah a tidak identik dengan b (!==)? " . ($hasilTidakIdentik ? 'true' : 'false') . "<br><br>";

$totalKursi = 45;
$kursiTerisi = 28;

$persenKursiKosong = (45-28)/45 * 100;

echo"Total Kursi Resto = $totalKursi<br>";
echo"Kursi yang terisi pada suatu malam = $kursiTerisi<br>";
echo"Persen Kursi yang masih kosong $persenKursiKosong";