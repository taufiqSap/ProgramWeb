<?php
function hitungUmur($thn_lahir,$thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalan, nama saya ".$nama."<br>";

    echo "Saya berusia ". hitungUmur(2003,2023) ."tahun<br>";
    echo "Senang berkenalan dengan anda<br>";
}
perkenalan("Taufiq");
?>