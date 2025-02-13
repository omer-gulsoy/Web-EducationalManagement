<?php
// Oturum başlatma kontrolü
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student Information System</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <!-- Navbar Links -->
        <a href="index.php">Add Student</a>
        <a href="list_students.php">List Students</a>
        <a href="class_report.php">Class Report</a>
        <a href="total_student_count.php">Total Students</a>

        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <!-- Eğer kullanıcı giriş yapmışsa, hoşgeldiniz mesajı ve Logout butonu -->
            <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <!-- Eğer kullanıcı giriş yapmamışsa, Login butonu -->
            <a href="login.php">Login</a>
        <?php endif; ?>
    </nav>
</body>
</html>
