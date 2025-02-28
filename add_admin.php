<?php
session_start();
include 'config.php';

// Only existing admins can add new admins
if(!isset($_SESSION['admin'])) {
    die("Access denied");
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Insert new admin
    $sql = "INSERT INTO admin_users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    
    if(mysqli_stmt_execute($stmt)) {
        echo "Admin user added successfully";
    } else {
        echo "Error adding admin user";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Admin User</title>
    <style>
        body { padding: 20px; font-family: Arial; }
        .form-group { margin-bottom: 15px; }
        input { padding: 5px; width: 200px; }
        button { padding: 10px; background: #4CAF50; color: white; border: none; }
    </style>
</head>
<body>
    <h2>Add New Admin User</h2>
    <form method="POST">
        <div class="form-group">
            <label>Username:</label><br>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label>Password:</label><br>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Add Admin</button>
    </form>
</body>
</html> 