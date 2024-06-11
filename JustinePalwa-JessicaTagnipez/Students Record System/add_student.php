<?php
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
    $lrn = isset($_POST['lrn']) ? $_POST['lrn'] : '';
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $birth_date = isset($_POST['birth_date']) ? $_POST['birth_date'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $guardian_name = isset($_POST['guardian_name']) ? $_POST['guardian_name'] : '';
    $occupation = isset($_POST['occupation']) ? $_POST['occupation'] : '';
    $family_income = isset($_POST['family_income']) ? $_POST['family_income'] : '';
    $nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mobile_no = isset($_POST['mobile_number']) ? $_POST['mobile_number'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $zip_code = isset($_POST['zip_code']) ? $_POST['zip_code'] : '';

    $sql = "INSERT INTO students (lrn, first_name, last_name, gender, birth_date, age, guardian_name, occupation, family_income, nationality, email, mobile_no, address, zip_code) 
            VALUES ('$lrn','$first_name', '$last_name', '$gender', '$birth_date', '$age', '$guardian_name', '$occupation', '$family_income', '$nationality', '$email', '$mobile_no', '$address', '$zip_code')";

    if ($conn->query($sql) === TRUE) {
        echo "<div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 10px; background-color: #f9f9f9;'>";
        echo "<h2 style='text-align: center;'>Registration Successful!</h2>";
        echo "<table style='width: 100%; border-collapse: collapse;'>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>LRN:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$lrn</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>First Name:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$first_name</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Last Name:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$last_name</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Gender:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$gender</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Birth Date:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$birth_date</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Age:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$age</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Guardian Name:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$guardian_name</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Occupation:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$occupation</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Family Income:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$family_income</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Nationality:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$nationality</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Email:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$email</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Mobile Number:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$mobile_no</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Address:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$address</td></tr>";
        echo "<tr><td style='padding: 8px; border-bottom: 1px solid #ddd;'><strong>Zip Code:</strong></td><td style='padding: 8px; border-bottom: 1px solid #ddd;'>$zip_code</td></tr>";
        echo "</table>";
        echo "<div style='text-align: center; margin-top: 20px;'>";
        echo "<button onclick='goToIndex()' style='padding: 10px 20px; border: none; background-color: #0069d9; color: white; cursor: pointer; border-radius: 5px;'>OK</button>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>

<script>
function goToIndex() {
    window.location.href = 'view_students.php';
}
</script>
