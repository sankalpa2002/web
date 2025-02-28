<?php
session_start();
include 'config.php';

if(!isset($_SESSION['admin']) || !isset($_GET['id'])) {
    header("Location: admin_login.php");
    exit();
}

$id = $_GET['id'];
mysqli_query($conn, "UPDATE complaints SET status = 'resolved' WHERE id = $id");
header("Location: view_complaints.php");
?> 