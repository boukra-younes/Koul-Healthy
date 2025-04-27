<?php
// Include your database connection file (e.g., config.php)
require_once 'config.php';

// Check if action parameter exists
if (isset($_POST['action'])) {
    // Perform action based on action parameter
    switch ($_POST['action']) {
        case 'update_quantity':
            updateQuantity($_POST['product_id'], $_POST['quantity']);
            break;
        case 'remove_product':
            removeProduct($_POST['product_id']);
            break;
        // Add more cases for other actions as needed
    }
}

// Function to update quantity in the database
function updateQuantity($productId, $quantity) {
    global $conn; // Assuming $conn is your database connection

    // Prepare and bind parameters
    $stmt = $conn->prepare("UPDATE cartdetails SET quantity = ? WHERE id_produit = ?");
    $stmt->bind_param("ii", $quantity, $productId);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Quantity updated successfully";
    } else {
        echo "Error updating quantity: " . $conn->error;
    }

    $stmt->close();
}

// Function to remove product from the database
function removeProduct($productId) {
    global $conn; // Assuming $conn is your database connection

    // Prepare and bind parameters
    $stmt = $conn->prepare("DELETE FROM cartdetails WHERE id_produit = ?");
    $stmt->bind_param("i", $productId);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Product removed successfully";
    } else {
        echo "Error removing product: " . $conn->error;
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
