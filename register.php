<?php
 
 require('dbconnect.php');
 error_reporting(0);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name =$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $type=$_POST['user_type'];

    if($type==="EMPLOYEE"){
        $insert = "INSERT INTO employees (name, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn,$insert);
        if($result){
           echo "Employee Record inserted";
           header('Location: login.php');
            exit(); 
        }
    }else{
        $insert = "INSERT INTO company (company_name, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn,$insert);
        if($result){
            echo "Comapany Record inserted";
            header('Location: login.php');
            exit(); 
        }
    }
}
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
                <h3>register page</h3>
                <input type="text" name="name" required placeholder="Name" />
                <input type="email" name="email" required placeholder="Email" />
                <input type="text" name="password" required placeholder="Password" />
                <select name="user_type">
                    <option value="EMPLOYEE">Employee</option>
                    <option value="COMPANY">Company</option>
                </select>
                <input type="submit" name="submit" value="register now" class="form-btn" />
                <p>already have an acount <a href="login.php">login now</a></p>
            </form>
        </div>
        <img class="bgimage"
            src="https://png.pngtree.com/background/20210709/original/pngtree-laptop-office-desk-picture-image_487477.jpg"
            alt="">
    </div>
</body>

</html>

<?php

$record = "select * from employees";
$a = mysqli_query($conn,$record);
echo "<center><table border=2><tr><td>sid</td><td>name</td><td>email</td><td>password</td><td>cpassword</td><td>edit delete</td></tr>";
while ($r= mysqli_fetch_array($a)) {
    echo"<tr><td>".$r[sid]."</td><td>".$r[name]."</td><td>".$r[email]."</td><td>".$r[password]."</td><td>".$r[cpassword]."</td><td><a href='edit.php?sid=".$r[sname]."'>Edit</a><a href='delete.php?sid=".$r[name]."'>    Delete</a></td></tr>";
}
echo"</table></center>";
?>