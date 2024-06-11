<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        /* h1 {
            text-align: center;
        } */

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
</head>
<body>
    <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>
    <div class="container mt-5">
        <h1>View Students</h1>
        <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#addStudentModal" style="background-color: #007bff;">Add Student</button>
        
        <?php
        // Database connection
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

        // Fetch students from the database
        $sql = "SELECT id, lrn, first_name, last_name, gender, birth_date, age, guardian_name, occupation, family_income, nationality, email, mobile_no, address, zip_code, created_at FROM students";
        $result = $conn->query($sql);
        ?>

        <h2>S.Y. 2024-2025</h2>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>LRN</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Birth Date</th>
                        <th>Age</th>
                        <th>Guardian Name</th>
                        <th>Occupation</th>
                        <th>Family Income</th>
                        <th>Nationality</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>Address</th>
                        <th>Zip Code</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($student = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$student['id']}</td>
                                <td>{$student['lrn']}</td>
                                <td>{$student['first_name']}</td>
                                <td>{$student['last_name']}</td>
                                <td>{$student['gender']}</td>
                                <td>{$student['birth_date']}</td>
                                <td>{$student['age']}</td>
                                <td>{$student['guardian_name']}</td>
                                <td>{$student['occupation']}</td>
                                <td>{$student['family_income']}</td>
                                <td>{$student['nationality']}</td>
                                <td>{$student['email']}</td>
                                <td>{$student['mobile_no']}</td>
                                <td>{$student['address']}</td>
                                <td>{$student['zip_code']}</td>
                                <td>{$student['created_at']}</td>
                                <td>
                                    <a href='edit.php?id={$student['id']}' class='btn btn-primary btn-sm'>Edit</a>
                                    <a href='delete.php?id={$student['id']}' class='btn btn-danger btn-sm'>Delete</a>
                                </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='16'>No records found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add Student Modal -->
    <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="addStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addStudentModalLabel">Add Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_student.php" method="post">
                        <!-- Add your form fields here -->
                        <div class="form-group">
                <label for="lrn">LRN:</label>
                <input type="text" id="lrn" name="lrn" required>
            </div>
                <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group gender-options">
                <label>Gender:</label>
                <label><input type="radio" name="gender" value="Male" required> Male</label>
                <label><input type="radio" name="gender" value="Female" required> Female</label>
                <label><input type="radio" name="gender" value="Other" required> Other</label>
            </div>
            <div class="form-group">
                <label for="birth_date">Birth Date:</label>
                <input type="date" id="birth_date" name="birth_date" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="guardian_name">Guardian Name:</label>
                <input type="text" id="guardian_name" name="guardian_name" required>
            </div>
            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <input type="text" id="occupation" name="occupation" required>
            </div>
            <div class="form-group">
                <label for="family_income">Family Income:</label>
                <input type="number" id="family_income" name="family_income" required>
            </div>
            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mobile_number">Mobile Number:</label>
                <input type="text" id="mobile_number" name="mobile_number" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="zip_code">Zip Code:</label>
                <input type="text" id="zip_code" name="zip_code" required>
            </div>
                        <!-- Add more fields as necessary -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
