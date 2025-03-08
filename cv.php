<?php
require 'includes/auth.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>CV</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="cv-container">
        <h2>CV</h2>
        <p><strong>Nama:</strong> <?php echo htmlspecialchars($_SESSION['nama'] ?? ''); ?></p>
        <p><strong>Tempat, Tanggal Lahir:</strong> <?php echo htmlspecialchars($_SESSION['ttl'] ?? ''); ?></p>
        
        <p><strong>Riwayat Pendidikan:</strong></p>
        <ul>
            <?php
            if (!empty($_SESSION['pendidikan']) && is_array($_SESSION['pendidikan'])) {
                foreach ($_SESSION['pendidikan'] as $pend) {
                    echo "<li>" . htmlspecialchars($pend) . "</li>";
                }
            };
            ?>
        </ul>

        <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email'] ?? ''); ?></p>
        <a class="logout" href="logout.php">Logout</a>
    </div>
</body>
</html>
