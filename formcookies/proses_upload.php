<?php
$targetDirectory = "images/";
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
$maxSize = 5 * 1024 * 1024; // 5MB

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0755, true);
}

if (!empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = basename($_FILES['files']['name'][$i]);
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . time() . "_$fileName";

        // Validasi ekstensi dan ukuran
        if (in_array($fileExt, $allowedExtensions) && $fileSize <= $maxSize) {
            if (move_uploaded_file($fileTmp, $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
                echo "<img src='$targetFile' width='200' style='height:auto; margin-bottom:10px;'><br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName tidak valid atau melebihi ukuran maksimum.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>