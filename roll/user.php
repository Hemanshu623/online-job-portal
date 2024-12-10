<?php
session_start();
error_reporting(0);
echo "<center>";
echo "USER PAGE <br>";
echo "<h3>welcome ".$_SESSION['uname']." with role ". $_SESSION['role'] ."</h3>";
echo "</center>";

if($_POST['logout'])
{
    session_destroy();
    header("location:http://192.168.10.223:8080/tsp/ty7/login%20using%20session/login.php");
}


?>

<html>

<center>
    <form method="POST">
        <input type="submit" value="logout" name="logout">
    </form>
</center>


</html>