<?php
$harga_awal = 120000;
$diskon_persen = 20;
$batas_diskon = 100000;

if ($harga_awal > $batas_diskon) {
    $diskon = ($diskon_persen / 100) * $harga_awal;
    $harga_akhir = $harga_awal - $diskon;
} else {
    $harga_akhir = $harga_awal;
}

echo "Harga yang harus dibayar: Rp " . number_format($harga_akhir, 0, ',', '.');
?>