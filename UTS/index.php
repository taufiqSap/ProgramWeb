<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Member Senam</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <form autocomplete="off">
            <h4>Pendaftaran Member Senam </h4>
            <div class="input-selection">
                <label>Nama Depan<span class="required"></span></label>
                <input type="text" placeholder="Masukkan Nama Depan" id="first-name-input" value="<?php echo isset($_SESSION['data_pendaftaran']['nama_depan']) ? $_SESSION['data_pendaftaran']['nama_depan'] : ''; ?>" required>
                <span id="first-name-error" class="hide required-color-error-message">Nama tidak boleh kosong</span><br/>
            </div>
            <div class="input-selection">
                <label>Nama Belakang<span class="required"></span></label>
                <input type="text" placeholder="Masukkan Nama Belakang" id="last-name-input" value="<?php echo isset($_SESSION['data_pendaftaran']['nama_belakang']) ? $_SESSION['data_pendaftaran']['nama_belakang'] : ''; ?>" required>
                <span id="last-name-error" class="hide required-color-error-message">Nama tidak boleh kosong</span><br/>

            </div>
            <div class="input-selection">
                <label>Email<span class="required"></span></label>
                <input type="text" placeholder="Masukkan Nama Player" id="player-name" value="<?php echo isset($_SESSION['data_pendaftaran']['email']) ? $_SESSION['data_pendaftaran']['email'] : ''; ?>" required>
                <span id="email-error" class="hide required-color-error-message">Email tidak boleh kosong</span><br/>
                
            </div>
            <div class="input-selection">
                <label>No Hp<span class="required"></span></label>
                <input type="number" placeholder="Masukkan No Hp" id="phone-number" value="<?php echo isset($_SESSION['data_pendaftaran']['no_hp']) ? $_SESSION['data_pendaftaran']['no_hp'] : ''; ?>" required>
                <span id="phone-error" class="hide required-color-error-message">No Hp tidak boleh kosong</span><br/>
                
            </div>
            <div class="input-selection">
                <label>Alamat<span class="required"></span></label>
                <input type="text" placeholder="Masukkan Alamat" id="alamat" value="<?php echo isset($_SESSION['data_pendaftaran']['alamat']) ? $_SESSION['data_pendaftaran']['alamat'] : ''; ?>" required>
                <span id="alamat-error" class="hide required-color-error-message">Alamat tidak boleh kosong</span><br/>
                
            </div>
            <button type="submit" id="submit-button">Submit</button>

        </form>
    </div>
    <script src="script.js"></script>
    
</body>
</html>



