<?php
// Include database connection
include 'config.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the complaint text from the form
    $complaint = $_POST['complaint'];
    
    // Simple validation - check if complaint is not empty
    if ($complaint == "") {
        // If empty, go back to help page with error
        header("Location: help.php?error=empty");
        exit();
    }
    
    // SQL query to save the complaint
    $sql = "INSERT INTO complaints (complaint) VALUES ('$complaint')";
    
    // Try to save to database
    if (mysqli_query($conn, $sql)) {
        // If saved successfully
        header("Location: help.php?msg=success");
    } else {
        // If there was an error saving
        header("Location: help.php?error=failed");
    }
}

// Close database connection
mysqli_close($conn);
?> 