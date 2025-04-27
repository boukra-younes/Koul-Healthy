<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/products.css">
    <style>
        /* CSS for modal */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="login">
    <img src="img/engin-akyurt-Y5n8mCpvlZU-unsplash.jpg" alt="login image" class="login__img">
    <?php 
    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();
    }
    include "navbar_logged.php" ;
 
    ?>
    
    <div class="titleAccount"><p>COLLECTION</p></div>
    <div class="home__account"><a href="#">Home</a>/Products</div>

        <div class="container">
<!--             
    <div class="All">
        <div class="all">
        <h1>COLLECTION</h1>
        <div class="id">
            <a href="#">Home </a> 
            <h4>/ Products</h4>
        </div>
    </div>
    </div> -->
    <div class="products">
        <div class="left">
            <h2>Filter:</h2>
            <div class="price">
            <button class="btn">Price</button>
            <p>adjust the price</p>
            <div class="input">
            <span>DA</span>
            <input type="number" min="1" max="10" value="1">
            <input type="number" min="1" max="10" value="10">
        </div>
        </div>
        <div class="Amounts">
            <button class="btn">Amounts</button>
            <p>Proteine:</p>
            <input class="x1" type="number" min="1" max="100" value="1">
            <input class="x2" type="range" name="range1" step="5" value="100" min="0" max="100"/>
            <input class="x1" type="number" min="1" max="100" value="100">
            <p>Carbes:</p>
            <input class="x1" type="number" min="1" max="100" value="1">
            <input class="x2" type="range" name="range1" step="5" value="100" min="0" max="100"/>
            <input class="x1" type="number" min="1" max="100" value="100">
            <p>Calories:</p>
            <input class="x1" type="number" min="1" max="100" value="1">
            <input class="x2" type="range" name="range1" step="5" value="100" min="0" max="100"/>
            <input class="x1" type="number" min="1" max="100" value="100">
        </div>
        </div>
        <div class="right">
        <div class="prdcts">
        <?php
        require 'config.php';

        $sql = "SELECT id_produit, nom, price, image FROM produit";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
            <div class="prdct">
                <div class="more">
                    <img src='<?php echo $row['image']; ?>'/>
                    <div class="mysvg">
                        <a class="productPage" href="product.php?id_produit=<?php echo $row['id_produit']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                        </a>
                        <a class="addtocart" href="#" data-id="<?php echo $row['id_produit']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bag" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none">
                                <polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/>
                                <path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/>
                                <circle cx="24.95" cy="51.61" r="3.53"/>
                                <circle cx="46.04" cy="51.61" r="3.53"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <a href="#"><?php echo htmlspecialchars($row["nom"]); ?></a>
                    <h4><?php echo htmlspecialchars($row["price"]); ?> DA</h4>
                </div>
            </div>
        <?php
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add to Cart</h2>
            <form id="addToCartForm" action="add_to_cart.php" method="post">
                <input type="hidden" name="id_produit" id="id_produit">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" required>
                <div class="button-group">
                    <button type="submit">Add to Cart</button>
                    <button type="button" class="cancelBtn">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var addToCartLinks = document.querySelectorAll('.addtocart');

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // Get the cancel button
        var cancelBtn = document.getElementsByClassName("cancelBtn")[0];

        // Loop through add to cart links to bind the click event
        addToCartLinks.forEach(function(link) {
            link.onclick = function() {
                var idProduit = this.getAttribute('data-id');
                document.getElementById('id_produit').value = idProduit;
                modal.style.display = "block";
            }
        });

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks on cancel button, close the modal
        cancelBtn.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
            
        </div>
        </div>
        <?php include "footer.php" ?>
        </div>
    </div>
    
    <!-- <script src="login.js"></script> -->
</body>
</html>
