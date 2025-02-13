<?php
// Oturum başlatma kontrolü
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Eğer kullanıcı giriş yapmamışsa, login sayfasına yönlendir
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Login sayfasına yönlendir
    exit;
}
?>
