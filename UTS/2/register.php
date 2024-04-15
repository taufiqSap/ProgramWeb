<?php
session_start();

if (isset($_POST['nama_depan']) && isset($_POST['nama_belakang']) && isset($_POST['nama_player']) && isset($_POST['no_hp']) && isset($_POST['provinsi'])) {

  $nama_depan = $_POST['nama_depan'];
  $nama_belakang = $_POST['nama_belakang'];
  $nama_player = $_POST['nama_player'];
  $no_hp = $_POST['no_hp'];
  $provinsi = $_POST['provinsi'];

  $_SESSION['data_pendaftaran'] = [
    'nama_depan' => $nama_depan,
    'nama_belakang' => $nama_belakang,
    'nama_player' => $nama_player,
    'no_hp' => $no_hp,
    'provinsi' => $provinsi
  ];


  $_SESSION['pesan_flash'] = "Pendaftaran berhasil!";

  header("Location: index.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Member Clan EPEP</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <form autocomplete="off" action="register.php" method="post">
            <h4>Pendaftaran Member clan </h4>
            <div class="input-selection">
                <label>Nama Depan<span class="required"></span></label>
                <input type="text" placeholder="Masukkan Nama Depan" id="first-name-input" name="nama_depan" required>
                <span id="first-name-error" class="hide required-color-error-message">Nama tidak boleh kosong</span><br/>
            </div>
            <div class="input-selection">
                <label>Nama Belakang<span class="required"></span></label>
                <input type="text" placeholder="Masukkan Nama Belakang" id="last-name-input" name="nama_belakang" required>
                <span id="last-name-error" class="hide required-color-error-message">Nama tidak boleh kosong</span><br/>

            </div>
            <div class="input-selection">
                <label>Nama Player(in game name)<span class="required"></span></label>
                <input type="text" placeholder="Masukkan Nama Player" id="player-name" name="nama_player" required>
                <span id="player-name-error" class="hide required-color-error-message">Nama player tidak boleh kosong</span><br/>
                
            </div>
            <div class="input-selection">
                <label>No Hp<span class="required"></span></label>
                <input type="number" placeholder="Masukkan No Hp" id="phone-number" name="no_hp" required>
                <span id="phone-error" class="hide required-color-error-message">No Hp tidak boleh kosong</span><br/>
                
            </div>
            <div class="input-selection">
                <label>Provinsi<span class="required"></span></label>
                <input type="text" placeholder="Masukkan Provinsi" id="provinsi-name" name="provinsi" required>
                <span id="provinsi-name-error" class="hide required-color-error-message">Provinsi tidak boleh kosong</span><br/>
                
            </div>
            <button type="submit" id="submit-button">Submit</button>

        </form>
    </div>

    <script src="script.js"></script>

</body>
</html>