<?php
session_start();
include 'config.php';

// Check if admin is logged in
if(!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Get all users
$result = mysqli_query($conn, "SELECT * FROM users ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users | Admin Panel</title>
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
        .back-btn {
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #f4f4f4;
        }
        .delete-btn {
            padding: 5px 10px;
            background: #ff4444;
            color: white;
            text-decoration: none;
            border-radius: 3px;
        }
    </style> -->
</head>
<body>
    <div class="header">
        <h1>Manage Users</h1>
        <a href="admin_panel.php" class="back-btn">Back to Dashboard</a>
    </div>

    <div class="content">
        <table class="data-table">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Joined Date</th>
                <th>Actions</th>
            </tr>
            <?php while($user = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo date('d M Y', strtotime($user['created_at'])); ?></td>
                    <td>
                        <a href="delete_user.php?id=<?php echo $user['id']; ?>" 
                           onclick="return confirm('Are you sure you want to delete this user?')"
                           class="delete-btn">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html> 