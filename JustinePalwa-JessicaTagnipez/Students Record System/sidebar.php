<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record System</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    height: 100vh;
    background-color: #f8f9fa;
}

.sidebar {
    background-color: #343a40;
    color: white;
    padding: 20px;
    width: 250px;
    height: 100vh;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    position: fixed;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 1.5em;
}

.nav {
    list-style: none;
    padding: 0;
}

.nav-item {
    margin-bottom: 10px;
}

.nav-link {
    text-decoration: none;
    color: white;
    padding: 10px;
    display: block;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.nav-link:hover {
    background-color: #495057;
}

.nav-link.active {
    background-color: #007bff;
}

.nav-link.active:hover {
    background-color: #0069d9;
}

.flex-column {
    display: flex;
    flex-direction: column;
}

    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Student Record System</h2>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view_students.php">View Students</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="change_password.php">Change Password</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</body>
</html>
