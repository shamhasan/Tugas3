<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['email']);
}

if (!isLoggedIn() && basename($_SERVER['PHP_SELF']) !== 'index.php') {
    header('Location: index.php');
    exit;
}
?>
