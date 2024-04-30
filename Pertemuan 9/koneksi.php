<?php

$namaHost = "localhost"; //nama host dari MySql
$username = "root"; // username/nama pengguna MySql
$password = ""; // password (biasanya kosong)
$database = "pratikumdb"; // Nama dari database yang digunakan



try {
    
    $connect = mysqli_connect($namaHost, $username, $password, $database); 
} catch (Exception $e) {
    echo $e->getMessage();
}



?>