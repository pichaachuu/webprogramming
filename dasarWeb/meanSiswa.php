<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// 1. Cari dua nilai tertinggi dan dua terendah
$tertinggi = [];
$terendah = [];

foreach ($nilai as $n) {
    // Cari dua tertinggi
    if (count($tertinggi) < 2) {
        $tertinggi[] = $n;
    } else {
        $minTinggi = min($tertinggi);
        if ($n > $minTinggi) {
            $key = array_search($minTinggi, $tertinggi);
            $tertinggi[$key] = $n;
        }
    }

    // Cari dua terendah
    if (count($terendah) < 2) {
        $terendah[] = $n;
    } else {
        $maxRendah = max($terendah);
        if ($n < $maxRendah) {
            $key = array_search($maxRendah, $terendah);
            $terendah[$key] = $n;
        }
    }
}

// 2. Hitung total nilai yang tidak termasuk dua tertinggi dan dua terendah
$total = 0;
$abaikan = array_merge($tertinggi, $terendah);
$counter = array_count_values($abaikan); // Untuk menangani nilai duplikat

foreach ($nilai as $n) {
    if (isset($counter[$n]) && $counter[$n] > 0) {
        $counter[$n]--;
        continue; // Abaikan nilai ini
    }
    $total += $n;
}

echo "Total nilai setelah mengabaikan dua tertinggi dan dua terendah: $total";
?>