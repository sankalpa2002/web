<?php
// Start session with error checking
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in
$isLoggedIn = isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIJOBS | Home</title>
    <link rel="stylesheet" href="styless.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar">
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
        <!-- <div class="lang-menu">
            <div class="selected-lang">
                English
            </div>
            <ul>
                <li><a class="uk">English</a></li>
                <li><a class="ind">Hindi</a></li>
                <li><a class="ge">Germen</a></li>
                <li><a class="fr">French</a></li>
            </ul>
        </div> -->
        <div class="menu-toggle" id="menu-toggle">
            <i class="fa fa-bars"></i>
        </div>
    </nav>
    <!-- Rest of the HTML remains the same -->
    <header> 
        <h1 class="header-title">
            FIND YOUR <br><span>PERFECT JOB</span><br>EASILY
        </h1>
    </header>
    <section class="card-container">
        <div class="card">
            <div class="card-image img1"></div>
            <h2>Job Opportunities</h2>
            <p>Explore a wide range of jobs tailored to your skills and preferences. Discover flexible options to suit your schedule.</p>
            <a href="#">Read More</a>
        </div>
        <div class="card">
            <div class="card-image img2"></div>
            <h2>Freelance Gigs</h2>
            <p>Start your freelance career with top-rated projects and earn on your terms. Join our thriving freelance community today!</p>
            <a href="#">Read More</a>
        </div>
        <div class="card">
            <div class="card-image img3"></div>
            <h2>Quick Jobs</h2>
            <p>Need extra cash? Take on quick, high-paying gigs with immediate payouts. Your side hustle starts here.</p>
            <a href="#">Read More</a>
        </div>
    </section>
    <section class="how-it-works">
        <div class="container">
          <h2>How It Works</h2>
          
          <div class="steps">
            <!-- Job Seekers Section -->
            <div class="step">
              <h3>For Job Seekers</h3>
              <ol>
                <li>
                  <span class="step-number">1</span>
                  <p>Sign Up and Create Your Profile</p>
                </li>
                <li>
                  <span class="step-number">2</span>
                  <p>Browse Available Job Listings</p>
                </li>
                <li>
                  <span class="step-number">3</span>
                  <p>Apply to Your Desired Jobs</p>
                </li>
                <li>
                  <span class="step-number">4</span>
                  <p>Get Interview Invitations</p>
                </li>
              </ol>
            </div>
      
            <!-- Employers Section -->
            <div class="step">
              <h3>For Employers</h3>
              <ol>
                <li>
                  <span class="step-number">1</span>
                  <p>Create a Company Profile</p>
                </li>
                <li>
                  <span class="step-number">2</span>
                  <p>Post Job Openings</p>
                </li>
                <li>
                  <span class="step-number">3</span>
                  <p>Review Applications</p>
                </li>
                <li>
                  <span class="step-number">4</span>
                  <p>Hire the Best Candidates</p>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </section>
      
    <section class="alerts-newsletter">
        <div class="container">
          <!-- Job Alerts Section -->
          <div class="job-alerts">
            <h2>Get Job Alerts</h2>
            <p>Stay up-to-date with the latest job openings. Subscribe to receive job alerts tailored to your preferences.</p>
            <form class="job-alerts-form" action="newsletter_handler.php" method="POST">
              <input type="hidden" name="type" value="job_alerts">
              <input type="email" name="email" placeholder="Enter your email" required>
              <button type="submit">Subscribe</button>
            </form>
          </div>
      
          <!-- Newsletter Section -->
          <div class="newsletter">
            <h2>Sign Up for Our Newsletter</h2>
            <p>Get career tips, industry news, and more straight to your inbox.</p>
            <form class="newsletter-form" action="newsletter_handler.php" method="POST">
              <input type="hidden" name="type" value="newsletter">
              <input type="email" name="email" placeholder="Enter your email" required>
              <button type="submit">Subscribe</button>
            </form>
          </div>
        </div>
      </section>
      
    <footer class="footer">
        <h2 class="navbar-logo"><a href="home.php">MINIJOBS</a></h2>
        <div class="footer-items">
            <a href="aboutUs.php" target="_blank">About Us</a>
            <a href="contactUs.php" target="_blank">Contact Us</a>
            <a href="termsAndConditions.php" target="_blank">Terms And Conditions</a>
            <a href="privacyPolicy.php" target="_blank">Privacy Policy</a>
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
</body>
</html> 