<?php
require 'config.php';

// Check if an image ID is provided
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT image_name, image_data FROM images WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($imageName, $imageData);
    $stmt->fetch();
    $stmt->close();

    // Set the content type header to display the image
    header("Content-Type: image/jpeg");
    echo $imageData;
    exit;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
</head>
<body>
    <h1>Display Image</h1>
    <div>
        <img src="display_image.php?id=1" alt="Image">
    </div>
</body>
</html>
