<?php
session_start();
include 'config.php';

// Check if admin is logged in
if(!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Get all users
$users = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users | Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="admin-container">
        <nav class="admin-nav">
            <h2>Manage Users</h2>
            <div>
                <a href="admin_panel.php">Dashboard</a>
                <a href="admin_logout.php">Logout</a>
            </div>
        </nav>
        
        <div class="content">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($user = mysqli_fetch_assoc($users)): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td>
                            <a href="admin_delete_user.php?id=<?php echo $user['id']; ?>" 
                               onclick="return confirm('Are you sure you want to delete this user?')"
                               class="delete-btn">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html> 