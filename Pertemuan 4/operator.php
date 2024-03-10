<?php
$a = 10;
$b = 5; 

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah " . " {$a} + {$b} = {$hasilTambah}" . "<br>";
echo "Hasil Kurang " . " {$a} - {$b} = {$hasilKurang}" . "<br>";
echo "Hasil Kali " . " {$a} x {$b} = {$hasilKali}" . "<br>";
echo "Hasil Bagi" . " {$a} :/ {:.2f} = {$hasilBagi}" . "<br>"; // menampilkan hasil
echo "Sisa Bagi" . " {$a} % {$b} = {$sisaBagi}" . "<br>";
echo "Sisa Pangkat" . " {$a} ^ {$b} = {$pangkat}" . "<br> ";

echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama dengan ". "{$a} == {$b} = {$hasilSama}" . "<br>";
echo "Hasil  Tidak Sama dengan " . "{$a} != {$b} = {hasilTidakSama}" . "<br>";
echo "Hasil Lebih kecil dari " . "{$a} < {$b} = {hasilLebihKecil}" . "<br>";
echo "Hasil Lebih besar dari " . "{$a} > {$b} = {hasilLebihBesar}" . "<br>";
echo  "Hasil Lebih Kecil atau Sama dengan " . "{$a} <= {$b} = {hasilLebihKecilSama}" . "<br>";
echo "Hasil Lebih Besar atau Sama dengan " . "{$a} >= {$b} = {hasilLebihBesarSama}" . "<br>";

echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil Dan dari " . "{$a} && {$b} = {$hasilAnd}". "<br>";
echo  "Hasil Or dari " . "{$a} || {$b} = {$hasilOr}" . "<br>";
echo "Hasil Not A " . " !{$a}  {$hasilNotA}" . "<br>";  
echo "Hasil Not B " . "!{$b}  {$hasilNotB}" . "<br>";

echo "<br>";


?>