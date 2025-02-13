<?php
// Hata raporlamasını etkinleştir
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";  // XAMPP varsayılan kullanıcı adı
$password = "";      // XAMPP varsayılan şifre boş
$dbname = "student_system"; // Veritabanı adı

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);
?>
