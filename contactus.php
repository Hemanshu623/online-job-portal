<?php 
// $name = $email = ""; 
// $nameErr = $emailErr  = ""; 

// if ($_SERVER["REQUEST_METHOD"] == "POST") { 
//     $isValid = true; 
 
//     // Validate name     if (empty($_POST["name"])) { 
//         $nameErr = "Name is required"; 
//         $isValid = false; 
//     } else { 
//         $name = test_input($_POST["name"]);         if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) { 
//             $nameErr = "Only letters and spaces are allowed"; 
//             $isValid = false; 
//         } 
//     } 
 
    // // Validate email     if (empty($_POST["email"])) { 
    //     $emailErr = "Email is required"; 
    //     $isValid = false; 
    // } else { 
    //     $email = test_input($_POST["email"]);         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
    //         $emailErr = "Invalid email format"; 
    //         $isValid = false; 
    //     } 
    // }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register page</title>
    <link rel="stylesheet" href="reg.css" />
</head>

<body>
    <div>
        <div class="form-container">
            <form action="register.php" method="post">
                <h3>contactus page</h3>
                <input type="text" name="name" required placeholder="Name" />
                <input type="email" name="email" required placeholder="Email" />
                <input type="submit" name="submit" value="Submit now" class="form-btn" />
            </form>
        </div>
        <img class="bgimage"
            src="https://png.pngtree.com/background/20210709/original/pngtree-laptop-office-desk-picture-image_487477.jpg"
            alt="">
    </div>
</body>

</html>