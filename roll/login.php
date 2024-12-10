<?php
session_start();
require("connection.php");
error_reporting(0);

if($_POST['uname'] && $_POST['pwd'])
{
    $uname=$_POST['uname'];
    $pwd = $_POST['pwd'];
    $query = "select * from roll1 where uname='{$uname}' and pwd='{$pwd}'";
    echo $query;

    $resultset=mysqli_query($conn,$query);
    $r=mysqli_fetch_array($resultset);
   
    if($r['role'] == 'admin')
    {
        $_SESSION['uname']=$uname;
        $_SESSION['role']='admin';
        header("location:http://192.168.10.223:8080/tsp/ty7/login%20using%20session/admin.php");
    }
    elseif($r['role'] == 'user')
    {
        $_SESSION['uname']=$uname;
        $_SESSION['role']='user';
        header("location:http://192.168.10.223:8080/tsp/ty7/login%20using%20session/user.php");
    }
    else
    {
        echo "USER NOT EXISTS";
    }



    
}



?>


<html>
<center>
    <h3>
        WELCOME TO SUTEX COLLEGE <br> LOGIN PANEL
    </h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    USERNAME:
                </td>
                <td>
                    <input type="text" name="uname" required>
                </td>
            </tr>
            <tr>
                <td>
                    PASSWORD:
                </td>
                <td>
                    <input type="password" name="pwd" required>
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </form>
</center>

</html>