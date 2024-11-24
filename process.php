<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $dob = trim($_POST['dob']);

    if (empty($name) || empty($email) || empty($phone) || empty($dob)) {
        die('Semua input harus diisi!');
    }

    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $fileSize = $file['size'];
        $fileType = mime_content_type($file['tmp_name']);

        if ($fileType !== 'text/plain') {
            die('Hanya file teks yang diizinkan!');
        }
        if ($fileSize > 2 * 1024 * 1024) { 
            die('File terlalu besar!');
        }

        $fileContent = file_get_contents($file['tmp_name']);
        $fileLines = explode("\n", $fileContent);
    } else {
        die('File belum diunggah!');
    }

    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    session_start();
    $_SESSION['formData'] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'dob' => $dob,
        'userAgent' => $userAgent,
        'fileLines' => $fileLines,
    ];

    header('Location: result.php');
    exit();
}
?>
