<?php
// Include your database connection
include 'config.php';

if (isset($_POST['remove_product'])) {
    // Get the id_produit from POST data
    $id_produit = $_POST['id_produit'];

    // Delete the product from cartdetail
    $query_delete = "DELETE FROM cartdetail WHERE id_produit = $id_produit";
    if (mysqli_query($conn, $query_delete)) {
        // Success
        header("Location: cart.php"); // Redirect back to cart page or update cart display
        exit();
    } else {
        // Error
        echo "Error removing product: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
