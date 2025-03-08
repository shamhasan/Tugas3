<?php
require 'includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['ttl'] = $_POST['ttl'];

    // Simpan pendidikan sebagai array, kosongkan jika tidak diisi
    $_SESSION['pendidikan'] = array_filter([$_POST['pendidikan1'], $_POST['pendidikan2']]);

    header('Location: cv.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form CV</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Form CV</h2>
        <form method="POST">
            <input class="input-field" type="text" name="nama" placeholder="Nama" required><br>
            <input class="input-field" type="text" name="ttl" placeholder="Tempat, Tanggal Lahir" required><br>

            <input class="input-field" type="text" name="pendidikan1" placeholder="Riwayat Pendidikan 1"><br>
            <input class="input-field" type="text" name="pendidikan2" placeholder="Riwayat Pendidikan 2"><br>

            <button class="btn-submit" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
