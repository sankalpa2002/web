<?php
session_start();
include 'config.php';

if(!isset($_SESSION['admin']) || !isset($_GET['id'])) {
    header("Location: admin_login.php");
    exit();
}

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM complaints WHERE id = $id");
header("Location: view_complaints.php");
?> 