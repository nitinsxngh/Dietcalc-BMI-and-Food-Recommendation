<?php
session_start();
$email_id = "";
include'../connection/connection.php';

?>

<?php
function generateRandomString1($length = 10) {
    $characters = 'abcdefghijklmnopqurstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
  $user_id = generateRandomString1();
?>



<?php

$email_id = mysqli_real_escape_string($conn, $_POST['email']);

if (empty($email_id)) {
  echo "Email Required";
}

// Validate email
if (filter_var($email_id, FILTER_VALIDATE_EMAIL)) {

} else {
    array_push($errors, "Invalid Email");
}


    $query = "INSERT INTO users (user_id, email_id) VALUES ('$user_id', '$email_id')";

       if(mysqli_query($conn, $query)) {
        $_SESSION['email_id'] = $email_id;
       }else{
       echo("Error!" . mysqli_error($conn));
       }
?>