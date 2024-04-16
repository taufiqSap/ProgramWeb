<?php
session_start();

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['alamat'])) {

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $alamat = $_POST['alamat'];

  $_SESSION['data_pendaftaran'] = [
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
    'phone' => $phone,
    'alamat' => $alamat
  ];

  $_SESSION['pesan_flash'] = "Pendaftaran berhasil!";

  header("Location: hasil.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Member Senam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Form submitted, process the data
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $alamat = $_POST["alamat"];

            // Display submission message and submitted data
            echo "<h4>Selamat Anda telah bergabung sebagai member senam!</h4>";
            echo "<h4>Data Pendaftaran Anda:</h4>";
            echo "<p>Nama Depan: $first_name</p>";
            echo "<p>Nama Belakang: $last_name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>No Hp: $phone</p>";
            echo "<p>Alamat: $alamat</p>";
        } else {
            // Display the registration form
            echo '<form method="post" autocomplete="off">';
            echo '<h4>Pendaftaran Member Senam</h4>';
            echo '<div class="input-selection">';
            echo '<label>Nama Depan<span class="required"></span></label>';
            echo '<input type="text" placeholder="Masukkan Nama Depan" name="first_name" required>';
            echo '</div>';
            echo '<div class="input-selection">';
            echo '<label>Nama Belakang<span class="required"></span></label>';
            echo '<input type="text" placeholder="Masukkan Nama Belakang" name="last_name" required>';
            echo '</div>';
            echo '<div class="input-selection">';
            echo '<label>Email<span class="required"></span></label>';
            echo '<input type="text" placeholder="Masukkan Email" name="email" required>';
            echo '</div>';
            echo '<div class="input-selection">';
            echo '<label>No Hp<span class="required"></span></label>';
            echo '<input type="text" placeholder="Masukkan No Hp" name="phone" required>';
            echo '</div>';
            echo '<div class="input-selection">';
            echo '<label>Alamat<span class="required"></span></label>';
            echo '<input type="text" placeholder="Masukkan Alamat" name="alamat" required>';
            echo '</div>';
            echo '<button type="submit" id="submit-button">Submit</button>';
            echo '</form>';
        }
        ?>
    </div>
    <script src="script.js"></script>
    
    
</body>
</html>
