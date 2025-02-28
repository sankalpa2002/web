<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Basic password hashing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Check if email already exists
    $check_sql = "SELECT * FROM users WHERE email=?";
    $check_stmt = mysqli_prepare($conn, $check_sql);
    mysqli_stmt_bind_param($check_stmt, "s", $email);
    mysqli_stmt_execute($check_stmt);
    $check_result = mysqli_stmt_get_result($check_stmt);
    
    if (mysqli_num_rows($check_result) > 0) {
        header("Location: signup.html?error=email_exists");
        exit();
    }
    
    // Insert user data using prepared statement
    $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $hashed_password);
    
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to login page
        header("Location: index.html?signup=success");
        exit();
    } else {
        // If error occurs
        header("Location: signup.html?error=1");
        exit();
    }
}
mysqli_close($conn);
?> 