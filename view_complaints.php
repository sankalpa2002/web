<?php
session_start();
include 'config.php';

// Check if admin is logged in
if(!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Get all complaints
$result = mysqli_query($conn, "SELECT * FROM complaints ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Complaints | Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="header">
        <h1>Manage Complaints</h1>
        <a href="admin_panel.php" class="back-btn">Back to Dashboard</a>
    </div>

    <div class="content">
        <table class="data-table">
            <tr>
                <th>ID</th>
                <th>Complaint</th>
                <th>Status</th>
                <th>Submitted On</th>
                <th>Actions</th>
            </tr>
            <?php while($complaint = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $complaint['id']; ?></td>
                    <td><?php echo $complaint['complaint']; ?></td>
                    <td><?php echo $complaint['status']; ?></td>
                    <td><?php echo date('d M Y', strtotime($complaint['created_at'])); ?></td>
                    <td>
                        <?php if($complaint['status'] == 'pending') { ?>
                            <a href="resolve_complaint.php?id=<?php echo $complaint['id']; ?>" 
                               class="edit-btn">Mark Resolved</a>
                        <?php } ?>
                        <a href="delete_complaint.php?id=<?php echo $complaint['id']; ?>" 
                           onclick="return confirm('Are you sure you want to delete this complaint?')"
                           class="delete-btn">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html> 