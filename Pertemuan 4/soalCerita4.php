<?php

$siswa = array(
  array("nama" => "Alice", "nilai" => 85),
  array("nama" => "Bob", "nilai" => 92),
  array("nama" => "Charlie", "nilai" => 78),
  array("nama" => "David", "nilai" => 64),
  array("nama" => "Eva", "nilai" => 90),
);


$totalNilai = 0;
foreach ($siswa as $s) {
  $totalNilai += $s['nilai'];
}
$rataRata = $totalNilai / count($siswa);

echo "Daftar siswa di atas rata-rata (" . $rataRata . "):<br>";
foreach ($siswa as $s) {
  if ($s['nilai'] > $rataRata) {
    echo "- " . $s['nama'] . " (" . $s['nilai'] . ")" . "<br>";
  }
}

?>
