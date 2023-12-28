<?php
include '../connection/connection.php';

$email = $_POST["email"];

$userData = "SELECT * FROM users WHERE email_id = '$email' LIMIT 1";
$userDataResult = mysqli_query($conn, $userData);

if (mysqli_num_rows($userDataResult) > 0) {
    $row = mysqli_fetch_assoc($userDataResult);

    $user_id = $row["user_id"];
    $email_id = $row["email_id"];
    $gender = $row["gender"];
    $height = $row["height"];
    $weight = $row["weight"];
    $age = $row["age"];
    $food_type = $row["food_type"];

    $heightinmeters = $height * 0.3048;
    $bmi = $weight / ($heightinmeters * $heightinmeters);
    $newBmi = round($bmi, 2);

    //echo "Your BMI is: $newBmi,";

    if ($bmi < 18.5) {
?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Calories</th>
            <th>Protein</th>
            <th>Carbohydrates</th>
            <th>Fat</th>
            <th>Fiber</th>
            <th>Vitamins</th>
            <th>Minerals</th>
            <th>Serving Size</th>
        </tr>

        <?php
 
        // SQL query to retrieve data from your table for underweight
     $sql = "SELECT * FROM food WHERE fat >= 5.0 AND protein >= 10 ORDER BY category ASC";


        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["category"] . "</td>";
                echo "<td>" . $row["calories"] . "</td>";
                echo "<td>" . $row["protein"] . "</td>";
                echo "<td>" . $row["carbohydrates"] . "</td>";
                echo "<td>" . $row["fat"] . "</td>";
                echo "<td>" . $row["fiber"] . "</td>";
                echo "<td>" . $row["vitamins"] . "</td>";
                echo "<td>" . $row["minerals"] . "</td>";
                echo "<td>" . $row["serving_size"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No data available";
        }

        // Close the database connection
        $conn->close();
        ?>
    </table>


<?php


    } elseif ($bmi >= 18.5 && $bmi <= 25) {

?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Calories</th>
            <th>Protein</th>
            <th>Carbohydrates</th>
            <th>Fat</th>
            <th>Fiber</th>
            <th>Vitamins</th>
            <th>Minerals</th>
            <th>Serving Size</th>
        </tr>

        <?php
 

        // SQL query to retrieve data from your table for healthy
        $sql = "SELECT * FROM food WHERE fat >= 2.0 AND protein >= 10 ORDER BY category ASC";


        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["category"] . "</td>";
                echo "<td>" . $row["calories"] . "</td>";
                echo "<td>" . $row["protein"] . "</td>";
                echo "<td>" . $row["carbohydrates"] . "</td>";
                echo "<td>" . $row["fat"] . "</td>";
                echo "<td>" . $row["fiber"] . "</td>";
                echo "<td>" . $row["vitamins"] . "</td>";
                echo "<td>" . $row["minerals"] . "</td>";
                echo "<td>" . $row["serving_size"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No data available";
        }

        // Close the database connection
        $conn->close();
        ?>
    </table>


<?php        

    } elseif ($bmi > 25 && $bmi <= 30) {

?>



<?php


    } else {

?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Calories</th>
            <th>Protein</th>
            <th>Carbohydrates</th>
            <th>Fat</th>
            <th>Fiber</th>
            <th>Vitamins</th>
            <th>Minerals</th>
            <th>Serving Size</th>
        </tr>

        <?php
 

        // SQL query to retrieve data from your table for excesive
        $sql = "SELECT * FROM food WHERE fat >= 2.0 AND protein >= 30 ORDER BY category ASC";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["category"] . "</td>";
                echo "<td>" . $row["calories"] . "</td>";
                echo "<td>" . $row["protein"] . "</td>";
                echo "<td>" . $row["carbohydrates"] . "</td>";
                echo "<td>" . $row["fat"] . "</td>";
                echo "<td>" . $row["fiber"] . "</td>";
                echo "<td>" . $row["vitamins"] . "</td>";
                echo "<td>" . $row["minerals"] . "</td>";
                echo "<td>" . $row["serving_size"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No data available";
        }

        // Close the database connection
        $conn->close();
        ?>
    </table>


<?php

    }

} else {
    // Handle case where no user with the provided email is found.
    echo "User not found.";
}
?>
