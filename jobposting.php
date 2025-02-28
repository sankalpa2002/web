<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']); // Check if user is logged in
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIJOBS | Job Posting</title>
   <link rel="stylesheet" href="styless.css">
    <!-- <link rel="stylesheet" href="jobposting.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
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


    <!-- Main Content -->
    <section class="job-posting-container">
        <div class="ad-space"><h1>Ad Space</h1></div>
        <div class="job-posting">
            <div class="job-posting-title">
                <h2>Make Your Job Advertisement</h2>
            </div>
            <div class="job-posting-form">
                <form action="job_posting_handler.php" method="POST">
                    <label>
                        Job Owner's Name:
                        <input type="text" name="job_owner">
                    </label>
                    <label>
                        Job Title:
                        <input type="text" name="job_title">
                    </label>
                    <label>
                        Description:
                        <textarea id="job-posting-desc" name="job_description"></textarea>
                    </label>
                    <label>
                        Payment:
                        <input type="number" name="payment">
                    </label>
                    <div>
                        <button type="submit">Submit</button>
                        <button type="reset">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="job-posting-instructions">
                <div class="instructions-list">
                    <h2>Instructions for Job Makers to Find Better Freelancers</h2>
                    <ul>
                        <li>Clearly define the project scope and deliverables before posting the job.</li>
                        <li>Set a realistic budget that reflects the complexity of the task.</li>
                        <li>Provide a detailed job description, including skills required and deadlines.</li>
                        <li>Review freelancers' profiles, portfolios, and reviews to assess their expertise.</li>
                        <li>Conduct a brief interview or test project to gauge the freelancer's abilities.</li>
                        <li>Communicate your expectations and requirements upfront to avoid misunderstandings.</li>
                        <li>Be prompt and professional when responding to inquiries or submissions.</li>
                        <li>Offer constructive feedback to freelancers during and after the project.</li>
                        <li>Use secure and trusted platforms to handle payments and contracts.</li>
                        <li>Build long-term relationships with reliable freelancers for future projects.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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

    <!-- Bottom Bar -->
    <div class="bottom-bar">
        <p>&copy;2024 <span>MINIJOBS</span>. All rights reserved</p>
    </div> 

    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>
