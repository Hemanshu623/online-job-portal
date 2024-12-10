<?php
require('dbconnect.php');
error_reporting(0);
session_start(); // Start the session

// Retrieve data from the session
$id = $_SESSION['employee_id'];
$email = $_SESSION['email'];
$name = $_SESSION['name'];

// echo 'Username: ' . $name;
// echo 'Email: ' . $email;

$sql = "SELECT * FROM job";
$job_results = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>jobs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="employee.css" />
</head>

<body>
    <div class="page">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light h-100" style="width: 280px">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <span class="fs-4 font-weight-bold m-auto">JOB PORTAL</span>
            </a>
            <hr />
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="job.html" class="nav-link active">
                        <i class="bi bi-person-workspace"></i>
                        Jobs
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="job.html" class="nav-link "> -->
                <i class="bi bi-person-workspace"> <a href="home.php">home</a></i>
                <!-- Home -->
                <!-- </a>
                </li> -->
            </ul>
            <hr />
            <div class="profile">
                <h3><?php echo $name; ?></h3>
                <p><?php echo $email; ?></p>
                <a href="login.html"><button type="button" class="btn btn-danger w-100">Sign out</button></a>
            </div>
        </div>
        <div class="card1">

            <?php

              if (mysqli_num_rows($job_results) > 0) {
                while($row = mysqli_fetch_assoc($job_results)) {
                  ?>
            <div class="card" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                    <p class="card-text">
                        <?php echo $row["description"]; ?>
                    </p>
                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <?php
                }
              }else{
                echo "No Data";
              }

            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>