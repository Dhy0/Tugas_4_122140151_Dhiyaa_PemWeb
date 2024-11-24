<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Form Pendaftaran</h1>
    <form id="registrationForm" action="process.php" method="POST" enctype="multipart/form-data">
        <fieldset>
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" minlength="3" maxlength="50" placeholder="Masukkan nama Anda" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

        <label for="phone">Nomor Telepon:</label>
        <input type="text" id="phone" name="phone" maxlength="15" placeholder="Masukkan nomor telepon Anda" required>

        <label for="dob">Tanggal Lahir:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="file">Unggah File Teks:</label>
        <input type="file" id="file" name="file" accept=".txt" required>

        <button type="submit">Submit</button>
        </fieldset>
    </form>
    <script src="script.js"></script>
</body>
</html>
