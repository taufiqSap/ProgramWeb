<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanjat</title>
</head>
<body>
    <h2>Keranjang Belanja<h2>
        <?php
        $beliNovel = $_COOKIE['beliNovel'];
        $beliBuku = $_COOKIE['beliBuku'];

        echo "Jumlah Novel:" . $beliNovel . "<br>";
        echo "Jumlah Buku :" . $beliBuku ;
        ?>
</body>
</html>