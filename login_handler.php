<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['username'];  // We're getting email from the username field
    $password = $_POST['password'];
    
    // Get user from database
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            
            // Redirect to home page
            header("Location: home.php");
            exit();
        }
    }
    
    // If login fails, redirect back to login page with error
    header("Location: index.html?error=invalid");
    exit();
}

// If someone tries to access this file directly without POST
header("Location: index.html");
exit();
?> 