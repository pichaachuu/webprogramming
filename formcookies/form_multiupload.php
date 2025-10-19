<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Dokumen</title>
</head>
<body>
    <h2>Unggah dokumen</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple><br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>