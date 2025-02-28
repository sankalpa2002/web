<?php
session_start();
session_destroy();  // Remove all session data
header("Location: admin_login.php");
?> 