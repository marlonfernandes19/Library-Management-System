<?php
session_start();
$db_name = "lms";
$server_name = "localhost";
$db_pass = ""; 
$username = "root";

$link = mysqli_connect($server_name,$username,$db_pass,$db_name);

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
