<?php

$poin = 600;

$totalSkor = $poin;

$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";


echo "Total skor pemain adalah: " . $totalSkor . " poin" . PHP_EOL;
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan . PHP_EOL;

?>
