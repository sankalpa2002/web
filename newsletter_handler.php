<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $type = $_POST['type'];
    
    $sql = "INSERT INTO newsletter (email, type) VALUES ('$email', '$type')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: home.php?subscribe=success");
    } else {
        header("Location: home.php?subscribe=error");
    }
}
mysqli_close($conn);
?> 