<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $targetDirectory = "images/";
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($fileType, $allowedExtensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }

        if ($fileSize > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($fileTmp, $targetDirectory . $fileName);
            echo "$fileName berhasil diunggah.<br>";
        } else {
            echo implode(" ", $errors);
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>