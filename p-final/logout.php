<?php
// Oturum açılmadıysa, kullanıcıyı login sayfasına yönlendir
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Oturumu sonlandır
session_unset(); 
session_destroy(); 

// Login sayfasına yönlendir
header("Location: home.php");
exit;
?>
