<?php
require 'config.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $stmt = $conn->prepare("SELECT * FROM client WHERE token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $stmt = $conn->prepare("UPDATE client SET token = NULL WHERE token = ?");
        $stmt->bind_param("s", $token);

        if ($stmt->execute()) {
            echo "Your email has been verified!";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Invalid token!";
    }

    $stmt->close();
}

$conn->close();
?>
