<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO messages (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: contactUs.html?status=success");
    } else {
        header("Location: contactUs.html?status=error");
    }
}
mysqli_close($conn);
?> 