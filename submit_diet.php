<?php
require 'config.php'; // Adjust this to your actual config file name and path
session_start();
$id_client=$_SESSION['id'];
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from POST
    $age = $_POST['ageRange'];
    $gender = $_POST['gender'];
    $targetWeight = $_POST['targetWeight'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $diseases = isset($_POST['diseases']) ? implode(", ", $_POST['diseases']) : "None";
    $allergies = isset($_POST['allergies']) ? implode(", ", $_POST['allergies']) : "None";

    // Prepare SQL statement
    $sql = "INSERT INTO diet (id_client, age, gender, target, height, weight, diseases, allergy) VALUES (?,?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute query
    $stmt->bind_param("iissssss",$id_client, $age, $gender, $targetWeight, $height, $weight, $diseases, $allergies);
    
    if ($stmt->execute()) {
        header("home.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect or handle invalid requests
    echo "Invalid request";
}
?>
