<?php

$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "bmi";

$conn = mysqli_connect($dbhost,$username,$password,$dbname);

$connect = "Not Connected";
$connected = "Connected";

  // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 

?>

