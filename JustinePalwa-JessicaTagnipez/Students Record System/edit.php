<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .content {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .gender-options label {
            display: inline-block;
            margin-right: 10px;
        }

        .submit-btn {
            text-align: center;
        }

        .submit-btn input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #5a67d8;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        .submit-btn input[type="submit"]:hover {
            background-color: #0069d9;
        }

        @media (max-width: 600px) {
            .content {
                padding: 10px;
            }

            .form-group input, .form-group select, .form-group textarea {
                padding: 8px;
            }
        }
    </style>

    <script>
        function showAlertAndRedirect() {
            alert("Record updated successfully");
            window.location.href = "view_students.php";
        }
    </script>
</head>
<body>
    <div class="content">
        <h1>Edit Student</h1>
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

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // Fetch student data from the database based on ID
            $sql = "SELECT * FROM students WHERE id = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $student = $result->fetch_assoc();

                echo "<form method='post'>";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $lrn = $_POST['lrn'];
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

                    $sql = "UPDATE students 
                            SET lrn='$lrn', first_name='$first_name', last_name='$last_name', gender='$gender', birth_date='$birth_date', age='$age', guardian_name='$guardian_name', occupation='$occupation', family_income='$family_income', nationality='$nationality', email='$email', mobile_no='$mobile_no', address='$address', zip_code='$zip_code'
                            WHERE id=$id";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>showAlertAndRedirect();</script>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                }

                echo "<div class='form-group'>
                <label for='lrn'>LRN:</label>
                    <input type='text' id='lrn' name='lrn' value='{$student['lrn']}' required>
                </div>
                <div class='form-group'>
                    <label for='first_name'>First Name:</label>
                    <input type='text' id='first_name' name='first_name' value='{$student['first_name']}' required>
                </div>
                <div class='form-group'>
                    <label for='last_name'>Last Name:</label>
                    <input type='text' id='last_name' name='last_name' value='{$student['last_name']}' required>
                </div>
                <div class='form-group gender-options'>
                    <label>Gender:</label>
                    <label><input type='radio' name='gender' value='Male' ".($student['gender'] == 'Male' ? 'checked' : '')." required> Male</label>
                    <label><input type='radio' name='gender' value='Female' ".($student['gender'] == 'Female' ? 'checked' : '')." required> Female</label>
                    <label><input type='radio' name='gender' value='Other' ".($student['gender'] == 'Other' ? 'checked' : '')." required> Other</label>
                </div>
                <div class='form-group'>
                    <label for='birth_date'>Birth Date:</label>
                    <input type='date' id='birth_date' name='birth_date' value='{$student['birth_date']}' required>
                </div>
                <div class='form-group'>
                    <label for='age'>Age:</label>
                    <input type='number' id='age' name='age' value='{$student['age']}' required>
                </div>
                <div class='form-group'>
                    <label for='guardian_name'>Guardian Name:</label>
                    <input type='text' id='guardian_name' name='guardian_name' value='{$student['guardian_name']}' required>
                </div>
                <div class='form-group'>
                    <label for='occupation'>Occupation:</label>
                    <input type='text' id='occupation' name='occupation' value='{$student['occupation']}' required>
                </div>
                <div class='form-group'>
                    <label for='family_income'>Family Income:</label>
                    <input type='number' id='family_income' name='family_income' value='{$student['family_income']}' required>
                </div>
                <div class='form-group'>
                    <label for='nationality'>Nationality:</label>
                    <input type='text' id='nationality' name='nationality' value='{$student['nationality']}' required>
                </div>
                <div class='form-group'>
                    <label for='email'>Email:</label>
                    <input type='email' id='email' name='email' value='{$student['email']}' required>
                </div>
                <div class='form-group'>
                    <label for='mobile_no'>Mobile Number:</label>
                    <input type='tel' id='mobile_no' name='mobile_no' value='{$student['mobile_no']}' required>
                </div>
                <div class='form-group'>
                    <label for='address'>Address:</label>
                    <input type='text' id='address' name='address' value='{$student['address']}' required>
                </div>
                <div class='form-group'>
                    <label for='zip_code'>Zip Code:</label>
                    <input type='text' id='zip_code' name='zip_code' value='{$student['zip_code']}' required>
                </div>
                <div class='form-group submit-btn'>
                    <input type='submit' value='Update'>
                </div>";
            } else {
                echo "Student not found.";
            }
        
        } else {
            echo "Invalid request.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
