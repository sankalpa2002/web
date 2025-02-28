<?php
session_start();
include 'config.php';

// Check if admin is logged in
if(!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Count total records in each table
$users_query = mysqli_query($conn, "SELECT COUNT(*) as count FROM users");
$users_count = mysqli_fetch_assoc($users_query)['count'];

$jobs_query = mysqli_query($conn, "SELECT COUNT(*) as count FROM jobs");
$jobs_count = mysqli_fetch_assoc($jobs_query)['count'];

$complaints_query = mysqli_query($conn, "SELECT COUNT(*) as count FROM complaints");
$complaints_count = mysqli_fetch_assoc($complaints_query)['count'];

$messages_query = mysqli_query($conn, "SELECT COUNT(*) as count FROM messages");
$messages_count = mysqli_fetch_assoc($messages_query)['count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | MINIJOBS</title>
    <link rel="stylesheet" href="admin.css">
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .logout-btn {
            padding: 10px 20px;
            background: #ff4444;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        .stat-box {
            padding: 20px;
            background: #f0f0f0;
            border-radius: 5px;
            text-align: center;
        }
        .view-btn {
            display: inline-block;
            padding: 5px 10px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            margin-top: 10px;
        }
    </style> -->
</head>
<body>
    <div class="header">
        <h1>MINIJOBS Admin Panel</h1>
        <a href="admin_logout.php" class="logout-btn">Logout</a>
    </div>

    <div class="stats">
        <div class="stat-box">
            <h3>Total Users</h3>
            <h2><?php echo $users_count; ?></h2>
            <a href="view_users.php" class="view-btn">View Users</a>
        </div>

        <div class="stat-box">
            <h3>Total Jobs</h3>
            <h2><?php echo $jobs_count; ?></h2>
            <a href="view_jobs.php" class="view-btn">View Jobs</a>
        </div>

        <div class="stat-box">
            <h3>Complaints</h3>
            <h2><?php echo $complaints_count; ?></h2>
            <a href="view_complaints.php" class="view-btn">View Complaints</a>
        </div>

        <div class="stat-box">
            <h3>Messages</h3>
            <h2><?php echo $messages_count; ?></h2>
            <a href="view_messages.php" class="view-btn">View Messages</a>
        </div>
    </div>
</body>
</html> 