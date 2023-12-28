<?php
include'../connection/connection.php';
?>


<?php

$gender = $_POST["gender"];
$email = $_POST["email"];
$sql = "UPDATE users SET gender='$gender' WHERE email_id = '$email'";

if (mysqli_query($conn, $sql)) {

} else {
  echo "Error updating record: " . mysqli_error($conn);
}

?>