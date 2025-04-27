<!DOCTYPE html>
<html lang="en">
<head>
<?php
require 'config.php';
session_start();

// Redirect if user is already logged in
if (!isset($_SESSION['email'])) {
    
        header("Location: login.php");
    
}

$conn->close();
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet</title>
    <link rel="stylesheet" href="css/choiser.css">
</head>
<body>
    
    <div class="all">
        <form>
            <div class="left">
                <div class="squares">
                    <button type="button" class="square" id="order">
                        <img src="img/chef.jpg"  alt="صورة 1">
                        <div class="number">Dommonde System regime</div>
                    </button>
                </div>
            </div>
            <div class="right">
                <div class="squares">
                    <button type="button" class="square" id="mysistem" >
                        <img src="img/pic2.jpg" alt="صورة 1">
                        <div class="number">Afficher System regime</div>
                    </button>
                </div>
            </div>
        </form>
        <script>
    document.getElementById('mysistem').addEventListener('click', function() {
        window.location.href = 'diet_system.html';
    });
    document.getElementById('order').addEventListener('click', function() {
        window.location.href = 'diet.php';
    });
</script>

    </div>
</body>
</html>
