<?php

define('HOST', 'localhost'); 
define('USER', 'root');
define('PASS', '');
define('DB1', 'pratikumdb');


$db1 = new mysqli(HOST, USER, PASS, DB1);

if ($db1->connect_error) {
   
    die("Koneksi Gagal: " . $db1->connect_error);
}

?>