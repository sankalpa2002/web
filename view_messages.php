<?php
session_start();
include 'config.php';

// Check if admin is logged in
if(!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Get all messages
$result = mysqli_query($conn, "SELECT * FROM messages ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages | Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="header">
        <h1>Manage Messages</h1>
        <a href="admin_panel.php" class="back-btn">Back to Dashboard</a>
    </div>

    <div class="content">
        <table class="data-table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Status</th>
                <th>Received On</th>
                <th>Actions</th>
            </tr>
            <?php while($message = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $message['id']; ?></td>
                    <td><?php echo $message['name']; ?></td>
                    <td><?php echo $message['email']; ?></td>
                    <td><?php echo $message['subject']; ?></td>
                    <td><?php echo $message['message']; ?></td>
                    <td><?php echo $message['status']; ?></td>
                    <td><?php echo date('d M Y', strtotime($message['created_at'])); ?></td>
                    <td>
                        <?php if($message['status'] == 'unread') { ?>
                            <a href="mark_read.php?id=<?php echo $message['id']; ?>" 
                               class="edit-btn">Mark Read</a>
                        <?php } ?>
                        <a href="delete_message.php?id=<?php echo $message['id']; ?>" 
                           onclick="return confirm('Are you sure you want to delete this message?')"
                           class="delete-btn">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html> 