<?php
// Array multidimensi untuk menyimpan data mahasiswa
$mahasiswa = array(
    array(
        
        "foto" => "taufiq.jpg",
        "nim" => "22102398",
        "nama" => "TAUFIQ SATRIAJI",
        "alamat" => "KOTA BLITAR",
        "jurusan" => "TEKNOLOGI INFORMASI"
    ),
    array(
       
        "foto" => "zidan.jpg",
        "nim" => "22536481",
        "nama" => "ZIDAN NAHDI",
        "alamat" => "KOTA MALANG",
        "jurusan" => "TEKNOLOGI INFORMASI"
    ),

    array(
       
        "foto" => "farell.jpg",
        "nim" => "22153648",
        "nama" => "BAGAS FAREL",
        "alamat" => "MOJOKERTO",
        "jurusan" => "TEKNOLOGI INFORMASI"
        
    ),
    // Tambahkan data mahasiswa lainnya sesuai kebutuhan
);

// Menampilkan data mahasiswa
foreach ($mahasiswa as $mhs) {
    echo "Foto: <img src='" . $mhs['foto'] . "' alt='Foto " . $mhs['nama'] . "' width='200' height='220'><br><br>";
    echo "NIM: " . $mhs['nim'] . "<br>";
    echo "Nama: " . $mhs['nama'] . "<br>";
    echo "Alamat: " . $mhs['alamat'] . "<br>";
    echo "Jurusan: " .$mhs['jurusan'] . "<br>";
}
?>
