<?php
// Database connection (same as in your previous code)
$servername = "localhost";
    $username = "admin";
    $password = "admin12345";
    $dbname = "student_records_system";
    
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Delete student record from the database based on ID
    $sql = "DELETE FROM students WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        // PHP code to set the message
        $message = "Delete successfully!";
        
        // JavaScript code to display the alert
        echo "<script>alert('$message');</script>";

        // Redirect to index page after delete
        header("Location: view_students.php");
        exit(); // Make sure to exit after redirection
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$conn->close();
?>
