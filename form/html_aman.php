<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Langkah 1: Ambil input dan amankan dari XSS
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    // Langkah 2: Ambil dan periksa email
    $email = $_POST['email'];
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

    // Langkah 3: Validasi email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Email valid → lanjutkan pengolahan data
        echo "<h3>Data berhasil diterima!</h3>";
        echo "<p><strong>Input:</strong> $input</p>";
        echo "<p><strong>Email:</strong> $email</p>";
    } else {
        // Email tidak valid
        echo "<h3 style='color:red;'>Email tidak valid! Harap masukkan email yang benar.</h3>";
    }
}
?>

<!-- Form input -->
<form method="POST" action="">
    <label>Masukkan teks:</label><br>
    <input type="text" name="input" required><br><br>

    <label>Masukkan email:</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit">Kirim</button>
</form>
