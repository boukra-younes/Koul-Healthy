<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tbiba</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/tbiba.css">
</head>
<body>
    <div class="container">
        <div class="sidebar main-content">
            <h2>Commandes de Clients</h2>
            <?php
            // Include the database configuration file
            require 'config.php';

            // Query to fetch client orders with their names
            $sql = "SELECT diet.id_client, client.fname, client.lname FROM diet 
                    INNER JOIN client ON diet.id_client = client.id_client";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="order" data-client="' . $row["id_client"] . '">
                            <span>' . $row["fname"] . ' ' . $row["lname"] . '</span>
                            <a href="dietdetails.php?id_client=' . $row["id_client"] .' &name='.$row["fname"] . ' ' . $row["lname"].'"><button>Formule</button></a>
                          </div>';
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
