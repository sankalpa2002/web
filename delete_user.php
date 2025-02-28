<?php
session_start();
include 'config.php';

// Check if admin is logged in
if(!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Check if ID was provided
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete user
    mysqli_query($conn, "DELETE FROM users WHERE id = $id");
    
    // Go back to users list
    header("Location: view_users.php");
}
?> 