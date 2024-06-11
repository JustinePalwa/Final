<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>

    <div class="content">
        <h1>Welcome Admin</h1>
        <?php
        // Define database connection details
        $servername = "localhost";
        $username = "admin";
        $password = "admin12345";
        $dbname = "student_records_system";

        // Database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to get the total number of students
        $sql = "SELECT COUNT(*) as total_students FROM students";
        $result = $conn->query($sql);

        // Fetch the result
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $total_students = $row['total_students'];
        } else {
            $total_students = 0;
        }

        $conn->close();
        ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Students</h5>
                <p class="card-text"><?php echo $total_students; ?></p>
                <a href="view_students.php" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
</body>
</html>
