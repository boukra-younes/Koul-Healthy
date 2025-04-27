<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_produit = $_POST['id_produit'];
    $quantity = $_POST['quantity'];
    $id_client = $_SESSION['id']; // Make sure the user is logged in and the session id is set

    // Retrieve the id_cart from the cart table using id_client
    $cart_sql = "SELECT id_cart FROM cart WHERE client = ?";
    $cart_stmt = $conn->prepare($cart_sql);
    $cart_stmt->bind_param("i", $id_client);
    $cart_stmt->execute();
    $cart_result = $cart_stmt->get_result();
    
    if ($cart_result->num_rows > 0) {
        $cart_row = $cart_result->fetch_assoc();
        $id_cart = $cart_row['id_cart'];

        // Check if the product already exists in cartdetails
        $check_sql = "SELECT quantity FROM cartdetail WHERE id_cart = ? AND id_produit = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("ii", $id_cart, $id_produit);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();
        
        if ($check_result->num_rows > 0) {
            // Product exists, update the quantity
            $row = $check_result->fetch_assoc();
            $new_quantity = $row['quantity'] + $quantity;
            $update_sql = "UPDATE cartdetail SET quantity = ? WHERE id_cart = ? AND id_produit = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("iii", $new_quantity, $id_cart, $id_produit);

            if ($update_stmt->execute()) {
                header("Location: products.php");
                exit();
            } else {
                echo "Error: " . $update_stmt->error;
            }

            $update_stmt->close();
        } else {
            // Product does not exist, insert new row
            $insert_sql = "INSERT INTO cartdetail (id_cart, id_produit, quantity) VALUES (?, ?, ?)";
            $insert_stmt = $conn->prepare($insert_sql);
            $insert_stmt->bind_param("iii", $id_cart, $id_produit, $quantity);

            if ($insert_stmt->execute()) {
                header("Location: products.php");
                exit();
            } else {
                echo "Error: " . $insert_stmt->error;
            }

            $insert_stmt->close();
        }

        $check_stmt->close();
    } else {
        echo "No cart found for this client.";
    }

    $cart_stmt->close();
    $conn->close();
}
?>
