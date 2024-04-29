<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="upload.css">
    <title>Unggah File Dokumen</title>
</head>

<body>
    <div class="container">
        <h1>Unggah File Dokumen</h1>
        <form id="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file">
            <input type="submit" name="submit" value="Unggah">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>
</body>

</html>
