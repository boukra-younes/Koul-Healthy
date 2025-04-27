<?php
if (isset($_POST['upload'])) {
    $imageName = $_FILES['image']['name'];
    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $imageType = $_FILES['image']['type'];


    require 'config.php';

    $stmt = $conn->prepare("INSERT INTO images (image_name, image_data) VALUES (?, ?)");
    $stmt->bind_param("sb", $imageName, $imageData);
    $stmt->send_long_data(1, $imageData);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Image uploaded successfully.";
    } else {
        echo "Failed to upload image.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <button type="submit" name="upload">Upload</button>
    </form>
</body>
</html>
