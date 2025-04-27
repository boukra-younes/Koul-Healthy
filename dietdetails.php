<?php
// Check if id_client is provided in the query string
if(isset($_GET['id_client'])&&isset($_GET['name'])) {
    // Include the database configuration file
    require 'config.php';
    session_start();
    // Sanitize the id_client parameter to prevent SQL injection
    $id_client = $_GET['id_client'];
    $name = $_GET['name'];
    $_SESSION[' $id_client_diet'] = $id_client;
    // Query to retrieve data from the diet table for the specified id_client
    $sql = "SELECT * FROM diet WHERE id_client = '$id_client'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of the client's diet details
        $row = $result->fetch_assoc();
        $target = $row['target'];
        $diseases = $row['diseases'];
        $allergy = $row['allergy'];
        $sex = $row['gender'];
        $age = $row['age'];
        $weight = $row['weight'];
        $height = $row['height'];

        // Display the details
        echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Details du Régime</title>
                    <link rel="stylesheet" href="css/tbiba.css">
                </head>
                <body>
                    <div class="container">
                        <div class="main-content">
                            <div class="client-details">
                                <h2>Détails du Régime</h2>
                                <ul>
                                    <li><strong>Name:</strong> ' . $name . '</li>
                                    <li><strong>gender:</strong> ' . $sex . '</li>
                                    <li><strong>Age:</strong> ' . $age . '</li>
                                    <li><strong>weight:</strong> ' . $weight . '</li>
                                    <li><strong>Target weight:</strong> ' . $weight . '</li>
                                    <li><strong>height:</strong> ' . $height . '</li>
                                </ul>
                                <a href="tbiba.php"><button type="button">Retour</button></a>
                                <a href="tbiba1.php?id_client=' .  $id_client .'"><button type="button">create diet</button></a>
                            </div>
                        </div>
                    </div>
                </body>
                </html>';
    } else {
        echo "Aucun résultat trouvé pour ce client.";
    }

    $conn->close();
} else {
    echo "ID client non spécifié.";
}
?>