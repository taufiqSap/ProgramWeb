<?php
$pesan = "Saya arek malang";
# ubah variabel $pesan menjad array dengan perintha explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
#gabungkan kembali array menjadi string
$pesan = implode(" ",$pesanPerKata) ;

echo $pesan . "<br>";
?>