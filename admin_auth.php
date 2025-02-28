<?php
session_start();
include 'config.php';

// Check if form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Get admin from database
    $sql = "SELECT * FROM admin_users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if(mysqli_num_rows($result) == 1) {
        $admin = mysqli_fetch_assoc($result);
        // Check password
        if($password === $admin['password']) {  // In production, use password_verify()
            // Login successful
            $_SESSION['admin'] = true;
            $_SESSION['admin_id'] = $admin['id'];
            header("Location: admin_panel.php");
            exit();
        }
    }
    
    // Login failed
    header("Location: admin_login.php?error=1");
    exit();
}
?> 