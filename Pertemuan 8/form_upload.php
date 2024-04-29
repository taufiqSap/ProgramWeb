<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>

    <?php
    if(isset($_POST["submit"])) {
        $targetDirectory = "uploads/"; // Direktori tujuan menyimpan file
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah";
        } else {
            echo "Gagal mengunggah file.";
        }
    }
    ?>
</body>
</html>
