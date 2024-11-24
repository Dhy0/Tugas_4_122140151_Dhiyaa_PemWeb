<?php
session_start();
if (!isset($_SESSION['formData'])) {
    die('Data tidak ditemukan!');
}

$data = $_SESSION['formData'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Hasil Pendaftaran</h1>
    <table>
        <tr><th>Nama</th><td><?= htmlspecialchars($data['name']) ?></td></tr>
        <tr><th>Email</th><td><?= htmlspecialchars($data['email']) ?></td></tr>
        <tr><th>Nomor Telepon</th><td><?= htmlspecialchars($data['phone']) ?></td></tr>
        <tr><th>Tanggal Lahir</th><td><?= htmlspecialchars($data['dob']) ?></td></tr>
        <tr><th>Informasi Browser</th><td><?= htmlspecialchars($data['userAgent']) ?></td></tr>
    </table>

    <h2>Isi File:</h2>
    <table>
        <tr><th>Baris</th><th>Isi</th></tr>
        <?php foreach ($data['fileLines'] as $index => $line): ?>
        <tr><td><?= $index + 1 ?></td><td><?= htmlspecialchars($line) ?></td></tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
