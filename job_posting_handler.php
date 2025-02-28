<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $owner_name = $_POST['job_owner'];
    $title = $_POST['job_title'];
    $description = $_POST['job_description'];
    $payment = $_POST['payment'];
    
    $sql = "INSERT INTO jobs (owner_name, title, description, payment) 
            VALUES ('$owner_name', '$title', '$description', '$payment')";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: jobposting.php?status=success");
    } else {
        header("Location: jobposting.php?status=error");
    }
}
mysqli_close($conn);
?> 