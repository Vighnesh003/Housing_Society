<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "userimage";

$conn = mysqli_connect($sname,$uname,$password,$db_name,"3308");

if (!$conn){
    echo "Connection failed";
    exit();
}
?>