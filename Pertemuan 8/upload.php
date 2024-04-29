<?php
if(isset($_POST["submit"])) {
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 5 * 1024 * 1024; // 5 MB

    // Validasi tipe file
    if(!in_array($fileType, $allowedExtensions)) {
        echo "Hanya file dengan tipe JPG, JPEG, PNG, dan GIF yang diizinkan.";
    } 
    // Validasi ukuran file
    elseif ($_FILES["fileToUpload"]["size"] > $maxFileSize) {
        echo "Ukuran file terlalu besar. Maksimum ukuran file adalah 5 MB.";
    }
    // Upload file jika lolos validasi
    else {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah";
        } else {
            echo "Gagal mengunggah file.";
        }
    }
}
?>
