<?php
include'../connection/connection.php';
?>


<?php

$height = $_POST["height"];
$weight = $_POST["weight"];
$age = $_POST["age"];
$email = $_POST["email"];


$sql = "UPDATE users SET height='$height', weight='$weight', age='$age' WHERE email_id = '$email'";

if (mysqli_query($conn, $sql)) {

} else {
  echo "Error updating record: " . mysqli_error($conn);
}

?>