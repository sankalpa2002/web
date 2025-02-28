<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']); // Check if user is logged in
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIJOBS | Help and Support</title>
    <link rel="stylesheet" href="styless.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
     <!-- navbar -->
     <nav class="navbar" style="background: #333;">
        <h2 class="navbar-logo"><a href="home.php">MINIJOBS</a></h2>
        <div class="navbar-menu">
            <a href="findJobs.php">Find Jobs</a>
            <a href="jobposting.php">Hire Freelancers</a>
            <a href="help.php">Help And Support</a>
            <?php if($isLoggedIn): ?>
                <!-- Show these links when user is logged in -->
                <a href="dashboard.php">Dashboard</a>
                <a href="profile.php">Profile</a>
                <a href="logout.php" class="logout-btn">Logout</a>
            <?php else: ?>
                <!-- Show login link when user is not logged in -->
                <a href="index.html">Login</a>
            <?php endif; ?>
        </div>
        <div class="menu-toggle" id="menu-toggle">
            <i class="fa fa-bars"></i>
        </div>
    </nav>
    <section class="help-main">
        <div class="help-header">
            <h1>FAQ</h1>
            <p>Frequently Asked Questions</p>
        </div>
        <div class="help-upper">
            <div class="upper-frist-row">
                <div class="help-card">
                    <h2>How to Create a Job Profile?</h2>
                    <p>Learn the steps to create a compelling job profile that attracts employers and boosts your visibility on the platform.</p>
                </div>
                <div class="help-card">
                    <h2>How to Apply for Jobs?</h2>
                    <p>Find out how to search for jobs, apply directly, and track your applications efficiently.</p>
                </div>
                <div class="help-card">
                    <h2>How to Contact Employers?</h2>
                    <p>Understand the best practices for reaching out to employers and following up on your job applications.</p>
                </div>
                </div>
                <div class="upper-second-row">
                    <div class="help-card">
                        <h2>How to Set Job Alerts?</h2>
                        <p>Set up personalized job alerts to get notified about the latest opportunities that match your preferences.</p>
                    </div>
                    <div class="help-card">
                        <h2>How to Update Your Resume?</h2>
                        <p>Discover tips to update and upload your resume to make it stand out to potential employers.</p>
                    </div>
                    <div class="help-card">
                        <h2>What is Job Match Score?</h2>
                        <p>Learn how the Job Match Score works and how it can help you find the best job opportunities.</p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="help-down">
            <h2>Client Support Centre</h2>
            <form action="help_handler.php" method="POST">
                <p>Complaints</p>
                <textarea name="complaint" id="complaints" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
    <footer class="footer">
        <h2 class="navbar-logo"><a href="#">MINIJOBS</a></h2>
        <div class="footer-items">
            <a href="aboutUs.html" target="_blank">About Us</a>
            <a href="contactUs.html" target="_blank">Contact Us</a>
            <a href="termsAndConditions.html" target="_blank">Terms And Conditions</a>
            <a href="privacyPolicy.html" target="_blank">Privacy Policy</a>
        </div>
        <div class="footer-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </footer>
    <div class="bottom-bar">
        <p>&copy;2024 <span>MINIJOBS</span>. All rights reserved</p>
    </div>
    <script src="script.js"></script>
    <script>
        // When page loads
        window.onload = function() {
            // Get URL parameters
            const params = new URLSearchParams(window.location.search);
            
            // Check for success message
            if (params.get('msg') === 'success') {
                alert('Thank you! Your complaint was submitted.');
            }
            
            // Check for errors
            if (params.get('error') === 'empty') {
                alert('Please write your complaint before submitting.');
            }
            if (params.get('error') === 'failed') {
                alert('Sorry, something went wrong. Please try again.');
            }
        }
    </script>
</body>
</html>