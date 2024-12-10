<?php

$host="localhost";
$username="root";
$password="";
$dbname="roll1";

$conn=mysqli_connect($host,$username,$password,$dbname);

if ($conn) 
{
    echo "database connected";
}
else
{
   echo "database not connected";
}
?>