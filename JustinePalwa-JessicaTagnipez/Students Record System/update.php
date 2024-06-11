<?php
// Database connection
$servername = "localhost";
$username = "admin";
$password = "admin12345";
$dbname = "student_records_system";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather input data from the form
    $id = $_GET['id'];
    $lrn = $_GET['lrn'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $birth_date = $_POST['birth_date'];
    $age = $_POST['age'];
    $guardian_name = $_POST['guardian_name'];
    $occupation = $_POST['occupation'];
    $family_income = $_POST['family_income'];
    $nationality = $_POST['nationality'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];
    $address = $_POST['address'];
    $zip_code = $_POST['zip_code'];

    // Update student record in the database
    $sql = "UPDATE students SET
            lrn = '$lrn', 
            first_name = '$first_name',
            last_name = '$last_name',
            gender = '$gender',
            birth_date = '$birth_date',
            age = '$age',
            guardian_name = '$guardian_name',
            occupation = '$occupation',
            family_income = '$family_income',
            nationality = '$nationality',
            email = '$email',
            mobile_no = '$mobile_no',
            address = '$address',
            zip_code = '$zip_code'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
