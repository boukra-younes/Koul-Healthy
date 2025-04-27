<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/carte.css">
    <title>CART</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="navbar">
        <h3><a href="#">Logo</a></h3>
        <ul class="center_nav">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li> <a href="">Diet Plans</a></li>
            <li> <a href="">Shop</a></li>
            <li><a href="">Contact us</a></li>
        </ul>
        <ul class="right_nav">
            <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" class="bag"width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg></a>
            <li><a href=""><svg xmlns="http://www.w3.org/2000/svg"  class="bag"viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/><path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/></svg></a></li>
        </ul>
    </div>
    <div class="All">
        <h1>YOUR SHOPPING CART</h1>
        <div class="id">
            <a href="#">Home </a> 
            <h4>/ Your Shopping Cart</h4>
        </div>
    </div>
    <table id="products-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
<?php
// Include your database connection
include 'config.php';

// Start session and retrieve id_client
session_start();
$id_client = $_SESSION['id'];

// Initialize total variable
$total_price = 0;

// Retrieve id_cart from cart using id_client
$query_cart = "SELECT id_cart FROM cart WHERE client = $id_client";
$result_cart = mysqli_query($conn, $query_cart);
while ($row_cart = mysqli_fetch_assoc($result_cart)) {
    $id_cart = $row_cart['id_cart'];

    // Retrieve id_produit, quantity, and product details from cartdetail using id_cart
    $query_cartdetail = "SELECT cd.id_produit, cd.quantity, p.nom, p.price, p.image FROM cartdetail cd INNER JOIN produit p ON cd.id_produit = p.id_produit WHERE cd.id_cart = $id_cart";
    $result_cartdetail = mysqli_query($conn, $query_cartdetail);
    while ($row_cartdetail = mysqli_fetch_assoc($result_cartdetail)) {
        $id_produit = $row_cartdetail['id_produit'];
        $quantity = $row_cartdetail['quantity'];
        $nom = $row_cartdetail['nom'];
        $price = $row_cartdetail['price'];
        $image = $row_cartdetail['image'];

        // Calculate subtotal for each product
        $subtotal = $quantity * $price;
        $total_price += $subtotal; // Accumulate total price

        // Display product information
?>
<tr>
    <td>
        <figure>
            <div>
                <img src="<?php echo $image; ?>" class="image-products"/>
            </div>
            <figcaption class="discover-caption">
                <p class="discover-title mb-0"><?php echo $nom; ?></p>
                <p class="price2"><?php echo $price; ?> DA</p>
            </figcaption>
        </figure>
    </td>
    <td>
        <!-- Form to update quantity -->
        <form action="update_quantity.php" method="POST">
            <input type="hidden" name="id_produit" value="<?php echo $id_produit; ?>">
            <input type="number" min="1" name="quantity" value="<?php echo $quantity; ?>" onchange="updateTotal()">
            <button type="submit" name="update_quantity">OK</button>
        </form>
    </td>
    <td><?php echo $price; ?> DA</td>
    <td>
        <!-- Form to remove product -->
        <form action="remove_product.php" method="POST">
            <input type="hidden" name="id_produit" value="<?php echo $id_produit; ?>">
            <button type="submit" name="remove_product">Remove</button>
        </form>
    </td>
</tr>
<?php
    }
}

// Close database connection
mysqli_close($conn);
?>
</tbody>

    </table>
    <div class="total">
    <h3>Total: $<span id="total">0</span></h3>

    <button onclick="placeOrder()">Commender</button></div>
    <script src="js/cart.js"></script>
</body>
</html>
