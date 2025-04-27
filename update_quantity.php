<?php
// Include your database connection
include 'config.php';

if (isset($_POST['update_quantity'])) {
    // Get the id_produit and updated quantity from POST data
    $id_produit = $_POST['id_produit'];
    $quantity = $_POST['quantity'];

    // Update the quantity in cartdetail table
    $query_update = "UPDATE cartdetail SET quantity = $quantity WHERE id_produit = $id_produit";
    if (mysqli_query($conn, $query_update)) {
        // Quantity updated successfully
        header("Location: cart.php"); // Redirect back to cart page or update cart display
        exit();
    } else {
        // Error updating quantity
        echo "Error updating quantity: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
