<?php
require('dbconnect.php');
error_reporting(0);
session_start(); // Start the session

// Retrieve data from the session
$id = $_SESSION['company_id'];
$email = $_SESSION['email'];
$name = $_SESSION['name'];

// echo 'Username: ' . $name;
// echo 'Email: ' . $email;

$sql = "SELECT * FROM job where company_id='$id'";
$job_results = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jobs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="job.css" />
</head>

<body>
    <div class="page">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light h-100" style="width: 280px">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <span class="fs-4 font-weight-bold m-auto">JOB PORTAL</span>
            </a>
            <hr />
            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                    <a href="dashboard.php" class="nav-link">
                        <i class="bi bi-speedometer2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="job.php" class="nav-link active" aria-current="page">
                        <i class="bi bi-person-workspace"></i>
                        Job
                    </a>
                </li>
            </ul>
            <hr />
            <div class="profile">
                <h3><?php echo $name; ?></h3>
                <p><?php echo $email; ?></p>
                <a href="login.php"><button type="button" class="btn btn-danger w-100">Sign out</button></a>
            </div>
        </div>

        <div class="content-side w-100">
            <div class="form-controller">
                <h2>Cerate Job</h2>
                <form action="job.php" method="post">
                    <div class="form-group">
                        <label for="title">Job Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter job title" />
                    </div>
                    <div class="form-group">
                        <label for="decsription">Job Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                            placeholder="Enter job description" />
                    </div>
                    <div class="form-group">
                        <label for="vacancy">Job Vacancy</label>
                        <input type="number" class="form-control" id="vacancy" name="vacancy"
                            placeholder="Enter job vacancy" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card-container">
                <?php

if (mysqli_num_rows($job_results) > 0) {
  while($row = mysqli_fetch_assoc($job_results)) {
    ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                        <p class="card-text">
                            <?php echo $row["description"]; ?>
                        </p>
                        <!-- <a href="#" class="btn btn-primary">Apply Now</a> -->
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


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>