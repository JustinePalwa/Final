<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
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
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
        <form action="register.php" method="post">
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
            <div class="form-group submit-btn">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>
