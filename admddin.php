<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/admindesign.css">
</head>
<body>
    <nav>
        <div class="logo"><img src="img/logo2.png" alt=""></div>
        <h1><a>Home</a></h1>
    </nav>
    <div class="all">
        <div class="left">
            <button><a>Statistics</a></button>
            <button><a>Add Product</a></button>
            <button><a>Display list of available products</a></button>
        </div>
        <div class="right">
        <div class="container" id="addProductContainer">
    <h1>Add Product</h1>
    <form id="productForm" action="add_product.php" method="post" enctype="multipart/form-data">
        <label for="name">Nom du Produit:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        
        <label for="price">Prix:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        
        <label for="Calories">Calories:</label>
        <input type="number" id="Calories" name="Calories" step="0.01" required>
        
        <label for="Protein">Protein:</label>
        <input type="number" id="Protein" name="Protein" step="0.01" required>
        
        <label for="Carbs">Carbs:</label>
        <input type="number" id="Carbs" name="Carbs" step="0.01" required>

        <label for="type">Type:</label> <!-- corrected id="type" -->
        <input type="text" id="type" name="type" required>
        
        <label for="benefits">Benefits:</label> <!-- corrected name="benefits" -->
        <textarea id="benefits" name="benefits" required></textarea>
        
        <label for="facts">Facts:</label> <!-- corrected name="facts" -->
        <textarea id="facts" name="facts" required></textarea>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
        
        <button type="submit">Add Product</button>
    </form>
</div>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Produits</title>
</head>
<body>
    <div class="container1" id="productListContainer">
        <h1>Liste des Produits</h1>
        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
    <?php
    require 'config.php';

    $sql = "SELECT * FROM produit";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td>
                    <div class='prdct'>
                        <div class='more'>
                            <img src='<?php echo $row['image']; ?>'/>
                            <a href='#'><?php echo $row['nom']; ?></a>
                        </div>
                        <div class='info1'> 
                            <h4>price:</h4><span><?php echo $row['price']; ?></span>
                            <h4>type:</h4><span><?php echo $row['type']; ?></span>
                            <h4>Calories:</h4><span><?php echo $row['calories']; ?></span>
                            <h4>Protein:</h4><span><?php echo $row['protein']; ?></span>
                            <h4>Carbs:</h4><span><?php echo $row['carbs']; ?></span>
                        </div>
                    </div>
                </td>
                <td>
                    <button class='edit'>Edit</button>
                    <button class='delete' onclick='deleteProduct(<?php echo $row['id_produit']; ?>)'>Delete</button>
                </td>
            </tr>
        <?php }
    } else {
        echo "<tr><td colspan='2'>0 results</td></tr>";
    }

    $conn->close();
    ?>
</tbody>


        </table>
    </div>

    <script>
        function deleteProduct(id) {
            if (confirm('Are you sure you want to delete this product?')) {
                window.location.href = 'delete_product.php?id=' + id;
            }
        }
    </script>
</body>
</html>

        </body>
        </html>
        </div>
    </div>
</body>