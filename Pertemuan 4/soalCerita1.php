<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

array_shift($nilaiSiswa);
array_shift($nilaiSiswa);
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

$totalNilai = array_sum($nilaiSiswa);

$jumlahSiswa = count($nilaiSiswa);
$rataNilai = $totalNilai / $jumlahSiswa;

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai<br>";
echo "Jumlah siswa yang dihitung: $jumlahSiswa<br>";
echo "Rata-rata nilai: $rataNilai";
?>
