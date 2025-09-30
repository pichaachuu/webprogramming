<?php
// --- KONFIGURASI KONEKSI POSTGRESQL ---
$host = 'localhost';
$port = '5432';
$dbname = 'phpdatabase';
$user = 'postgres';
$pass = 'picha1234';

// Membuat koneksi
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}


pg_set_client_encoding($conn, "UTF8");

// Ambil data dari tabel mahasiswa
$sql = 'SELECT
            "nim" AS "Nim",
            "nama" AS "Nama",
            "email" AS "Email",
            "jurusan" AS "Jurusan"
        FROM "TB_Mahasiswa"
        ORDER BY "nim"';

$result = pg_query($conn, $sql);
if (!$result) {
    die("Query gagal: " . pg_last_error($conn));
}
?>

<!-- HTML CODE -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php while ($row = pg_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= htmlspecialchars($row['Nim']); ?></td>
                <td><?= htmlspecialchars($row['Nama']); ?></td>
                <td><?= htmlspecialchars($row['Email']); ?></td>
                <td><?= htmlspecialchars($row['Jurusan']); ?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Hapus</a>
                </td>
            </tr>
            <?php $i++; endwhile;?>
        </table>
    </body>
</html>
<?php
pg_free_result($result);
pg_close($conn);
?>