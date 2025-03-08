<?php
require 'includes/functions.php';
require 'includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($password === getDomain($email)) {
        $_SESSION['email'] = $email;
        header('Location: form.php');
        exit;
    } else {
        $error = "Email atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Selamat Datang</h2>
        
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST">
            <input type="email" name="email" placeholder="Email" required class="input-field" autocomplete="off"><br>
            <input type="password" name="password" placeholder="Password" required class="input-field"><br>
            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>
</html>
