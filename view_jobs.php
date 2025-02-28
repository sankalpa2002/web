<?php
session_start();
include 'config.php';

// Check if admin is logged in
if(!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Get all jobs
$result = mysqli_query($conn, "SELECT * FROM jobs ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Jobs | Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="header">
        <h1>Manage Jobs</h1>
        <a href="admin_panel.php" class="back-btn">Back to Dashboard</a>
    </div>

    <div class="content">
        <table class="data-table">
            <tr>
                <th>ID</th>
                <th>Owner</th>
                <th>Title</th>
                <th>Payment</th>
                <th>Status</th>
                <th>Posted On</th>
                <th>Actions</th>
            </tr>
            <?php while($job = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $job['id']; ?></td>
                    <td><?php echo $job['owner_name']; ?></td>
                    <td><?php echo $job['title']; ?></td>
                    <td>$<?php echo $job['payment']; ?></td>
                    <td><?php echo $job['status']; ?></td>
                    <td><?php echo date('d M Y', strtotime($job['created_at'])); ?></td>
                    <td>
                        <a href="delete_job.php?id=<?php echo $job['id']; ?>" 
                           onclick="return confirm('Are you sure you want to delete this job?')"
                           class="delete-btn">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html> 