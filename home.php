<?php
// session_start(); // Starting session
// $pageTitle = "Home Page"; /
// $conn = new mysqli("localhost", "username", "password", "job_portal_db");

// if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT job_title, company, location FROM jobs";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     Output data of each row
// while($row = $result->fetch_assoc()) {
//        echo "<div><h3>" . $row["job_title"] . "</h3><p>" . $row["company"] . " - " . $row["location"] . "</p></div>";
//    }
// } else {
//    echo "No jobs found";
// }

// $conn->close();

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $jobTitle = $_POST['job'];
//     echo "You applied for the job: " . htmlspecialchars($jobTitle);
// }
// ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>

    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="logo">
                <h1>JobPortal</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#"> <a href="job.php">jobs</a></a></li>
                    <li><a href="#">dashboard</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Find Your Dream Job</h1>
            <p>Search for job opportunities that match your skills and experience</p>
            <div class="search-bar">
                <input type="text" placeholder="Job Title or Keyword">
                <input type="text" placeholder="Location">
                <button>Search</button>
            </div>
        </div>
    </section>

    <!-- Featured Jobs Section -->
    <section class="featured-jobs">
        <div class="container">
            <h2>Featured Jobs</h2>
            <div class="jobs-list">
                <div class="job-item">
                    <h3>Software Engineer</h3>
                    <p>Google - Mountain View, CA</p>
                    <button>Apply Now</button>
                </div>
                <div class="job-item">
                    <h3>Data Scientist</h3>
                    <p>Amazon - Seattle, WA</p>
                    <button>Apply Now </button>
                </div>
                <div class="job-item">
                    <h3>Product Manager</h3>
                    <p>Facebook - Menlo Park, CA</p>
                    <button>Apply Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <div class="container">
            <h2>How It Works</h2>
            <div class="steps">
                <div class="step">
                    <h3>Step 1</h3>
                    <p>Sign Up for a free account</p>
                </div>
                <div class="step">
                    <h3>Step 2</h3>
                    <p>Search for the job that suits you</p>
                </div>
                <div class="step">
                    <h3>Step 3</h3>
                    <p>Apply and get hired <a href="job.php"></a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 JobPortal. All rights reserved.</p>
        </div>
    </footer>

    <script src="home.js"></script>
</body>

</html>