<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']); // Check if user is logged in
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Finder</title>
    <link rel="stylesheet" href="styless.css">
    <!-- <link rel="stylesheet" href="findjobs.css"> -->
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
    <div class="main-content">
        <!-- Left Column: Filters and Job Cards -->
        <aside class="left-column">
            <!-- Filters -->
            <section class="filters-findjobs">
                <div class="filter-box">
                    <form action="#" method="get">
                        <select name="location">
                            <option value="">Location</option>
                            <option value="new-york">New York</option>
                            <option value="san-francisco">San Francisco</option>
                        </select>
                        <select name="job-type">
                            <option value="">Job Type</option>
                            <option value="full-time">Full-Time</option>
                            <option value="part-time">Part-Time</option>
                        </select>
                        <select name="category">
                            <option value="">Category</option>
                            <option value="tech">Tech</option>
                            <option value="healthcare">Healthcare</option>
                        </select>
                        <button type="submit">Filter</button>
                    </form>
                </div>
            </section>

            <!-- Job Cards -->
            <section class="job-card-container">
                <div class="job-card">
                    <div class="job-card-image job-card-image1"></div>
                    <a href="#">Top - Rated Jobs</a>
                </div>
                <div class="job-card">
                    <div class="job-card-image job-card-image2"></div>
                    <a href="#">Highest Paying Jobs</a>
                </div>
                <div class="job-card">
                    <div class="job-card-image job-card-image3"></div>
                    <a href="#">Quick Jobs</a>
                </div>
            </section>
        </aside>

        <!-- Right Column: Search Box and Job Posts -->
        <main class="right-column">
            <!-- Search Box -->
            <section class="search-box">
                <form action="#" method="get">
                    <input type="text" name="search" placeholder="Search for jobs...">
                    <button type="submit">Search</button>
                </form>
            </section>

            <!-- Job Posts -->
            <section class="job-post-container">
                <div class="job-post">
                    <div class="job-owner">
                        <div class="job-owner-img"></div>
                        <div class="job-owner-title">
                            <h3>Company A</h3>
                            <p>San Francisco, CA</p>
                        </div>
                    </div>
                    <p class="job-desc">Looking for a skilled developer to join our team.</p>
                    <div class="job-essentials">
                        <span>$120,000/year</span>
                        <button>Apply</button>
                        <span>Full-Time</span>
                    </div>
                </div>
                <div class="job-post">
                    <div class="job-owner">
                        <div class="job-owner-img"></div>
                        <div class="job-owner-title">
                            <h3>Company B</h3>
                            <p>New York, NY</p>
                        </div>
                    </div>
                    <p class="job-desc">Hiring a creative UI/UX designer.</p>
                    <div class="job-essentials">
                        <span>$80,000/year</span>
                        <button>Apply</button>
                        <span>Part-Time</span>
                    </div>
                </div>
                <div class="job-post">
                    <div class="job-owner">
                        <div class="job-owner-img"></div>
                        <div class="job-owner-title">
                            <h3>Company A</h3>
                            <p>San Francisco, CA</p>
                        </div>
                    </div>
                    <p class="job-desc">Looking for a skilled developer to join our team.</p>
                    <div class="job-essentials">
                        <span>$120,000/year</span>
                        <button>Apply</button>
                        <span>Full-Time</span>
                    </div>
                </div>
                <div class="job-post">
                    <div class="job-owner">
                        <div class="job-owner-img"></div>
                        <div class="job-owner-title">
                            <h3>Company B</h3>
                            <p>New York, NY</p>
                        </div>
                    </div>
                    <p class="job-desc">Hiring a creative UI/UX designer.</p>
                    <div class="job-essentials">
                        <span>$80,000/year</span>
                        <button>Apply</button>
                        <span>Part-Time</span>
                    </div>
                </div>
            </section>
        </main>
    </div>

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
    <div class="bottom-bar">
        <p>&copy;2024 <span>MINIJOBS</span>. All rights reserved</p>
    </div> 
    <script src="script.js"></script>
</body>
</html>
