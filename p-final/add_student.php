<?php
include 'header.php'; // Navbar dahil et
include 'auth.php';

// Database connection
include 'db.php';

// Get form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];
    $grade = $_POST['grade'];

    // SQL query
    $sql = "INSERT INTO students (name, age, class, grade) VALUES ('$name', '$age', '$class', '$grade')";

    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>


