<link rel="stylesheet" href="styles.css">
<?php
// Start the session
session_start();

// Define your database credentials
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

// Get form data
$users = $_POST['username'];
$pass = $_POST['password'];

// Simple query to check user credentials
$sql = "SELECT * FROM users WHERE username = '$users' AND password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists
    $_SESSION['username'] = $user;
    header("Location: dashboard.php"); // Redirect to dashboard
    exit();
} else {
    // User does not exist
    echo "Invalid username or password";
}

$conn->close();
?>
