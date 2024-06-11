<?php
session_start();

// Database connection details
$servername = "localhost";
$username = "admin";
$password = "admin12345";
$dbname = "student_records_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $newUsername = $_POST['username'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $currentUsername = $_SESSION['username']; // Assuming username is stored in session after login

    // Validate old password
    $sql = "SELECT * FROM users WHERE username='$currentUsername' AND password='" . md5($oldPassword) . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Update username and password
        $sql = "UPDATE users SET username='$newUsername', password='" . md5($newPassword) . "' WHERE username='$currentUsername'";
        if ($conn->query($sql) === TRUE) {
            // Update session username
            $_SESSION['username'] = $newUsername;
            echo "<script>alert('Username and Password changed successfully'); window.location.href='view_students.php';</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "<script>alert('Old password is incorrect'); window.history.back();</script>";
    }
}

$conn->close();
?>
