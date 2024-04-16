<?php
session_start();

if (isset($_SESSION['data_pendaftaran'])) {
  $data_pendaftaran = $_SESSION['data_pendaftaran'];
} else {
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Pendaftaran Member Senam</title>
  <link rel="stylesheet" href="Stylecss.css">
</head>
<body>
  <div class="container"> <h1>Hasil Pendaftaran Member Senam</h1>
    <h2>Data Pendaftaran Anda:</h2>
    <p>Nama Depan: <?php echo $data_pendaftaran['first_name']; ?></p>
    <p>Nama Belakang: <?php echo $data_pendaftaran['last_name']; ?></p>
    <p>Email: <?php echo $data_pendaftaran['email']; ?></p>
    <p>No Hp: <?php echo $data_pendaftaran['phone']; ?></p>
    <p>Alamat: <?php echo $data_pendaftaran['alamat']; ?></p>
    <h2>Mohon untuk bergabung di grup WA</h2>
    <a href="https://senamSehat.whatsapp.com/">https://senamSehat.whatsapp.com/</a>
    <p>Screenshoot dan print QRcode!</p>
    <img src="barcode.png">
    <a>Scan qrcode saat memasuki ruang senam</a>
  </div> </body>
</html>

