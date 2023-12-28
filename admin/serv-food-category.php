<?php
include'../connection/connection.php';
?>


<?php

$foodCategory = $_POST["foodCategory"];
$email = $_POST["email"];
$sql = "UPDATE users SET gender='$gender', food_type='$foodCategory' WHERE email_id = '$email'";

if (mysqli_query($conn, $sql)) {

} else {
  echo "Error updating record: " . mysqli_error($conn);
}

?>