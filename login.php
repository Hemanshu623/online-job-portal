<?php
 
 require('dbconnect.php');
 error_reporting(0);
 session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $type=$_POST['user_type'];

    if($type==="EMPLOYEE"){
        $sql = "SELECT * FROM employees WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                if($row["password"] !== $password){
                    echo "Wrong Password";
                }else{
                    $_SESSION['employee_id'] = $row["id"];
                    $_SESSION['email'] = $row["email"];
                    $_SESSION['name'] = $row["name"];
                    echo "Employee Record found";
                    header('Location: employee.php');
                    exit(); 
                }
            }

        } else {
            echo "No Date Found with given Email";
        }
    }else{
        $sql = "SELECT * FROM company WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                if($row["password"] !== $password){
                    echo "Wrong Password";
                }else{
                    $_SESSION['company_id'] = $row["id"];
                    $_SESSION['email'] = $row["email"];
                    $_SESSION['name'] = $row["name"];
                    echo "Company Record found";
                    header('Location: dashboard.php');
                    exit(); 
                }
            }

        } else {
            echo "No Date Found with given Email";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login page</title>
    <link rel="stylesheet" href="reg.css" />
</head>

<body>
    <div>
        <div class="form-container">
            <form action="login.php" method="post">
                <h3>login page</h3>
                <input type="email" name="email" required placeholder="Email" />
                <input type="password" name="password" required placeholder="Password" />
                <select name="user_type">
                    <option value="EMPLOYEE">Employee</option>
                    <option value="COMPANY">Company</option>
                </select>
                <input type="submit" name="submit" value="login now" class="form-btn" />
                <p>don't have an acount <a href="register.php">register now</a></p>
            </form>
        </div>
        <img class="bgimage"
            src="https://png.pngtree.com/background/20210709/original/pngtree-laptop-office-desk-picture-image_487477.jpg"
            alt="">
    </div>
</body>

</html>