<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $calories = $_POST['Calories'];
    $protein = $_POST['Protein'];
    $carbs = $_POST['Carbs'];
    $type = $_POST['type'];
    $benefits = $_POST['benefits'];
    $facts = $_POST['facts'];

    // Check if the image is uploaded
    if (!isset($_FILES["image"]) || $_FILES["image"]["error"] != 0) {
        die("No file uploaded or there was an upload error.");
    }

    // Image upload
    $target_dir = "uploads/";
    $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        die("File is not an image.");
    }

    // Allow certain file formats
    $allowedFormats = ["jpg", "jpeg", "png"];
    if (!in_array($imageFileType, $allowedFormats)) {
        die("Sorry, only JPG, JPEG, PNG files are allowed.");
    }

    // Insert data into database without image
    $stmt = $conn->prepare("INSERT INTO produit (nom, description, price, calories, protein, carbs, type, benefits, facts) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdiidsss", $name, $description, $price, $calories, $protein, $carbs, $type, $benefits, $facts);

    if ($stmt->execute()) {
        $last_id = $stmt->insert_id;
    } else {
        die("Error: " . $stmt->error);
    }
    $stmt->close();

    // Rename and move the uploaded file to the target directory
    $target_file = $target_dir . $last_id . '.' . $imageFileType;
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        die("Sorry, there was an error uploading your file.");
    }

    // Update the database record with the image path
    $stmt = $conn->prepare("UPDATE produit SET image = ? WHERE id_produit = ?");
    $stmt->bind_param("si", $target_file, $last_id);

    if ($stmt->execute()) {
        echo "New record created successfully with image.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
