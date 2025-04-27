<?php

require 'config.php';
session_start();

if(!isset($_SESSION['email'])){
    echo "<script>alert(\"You must login first to continue your buying !\")</script>";
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command</title>
    <link rel="stylesheet" href="css/commande.css">
    <!--<script defer src="js/commande.js"></script>-->
</head>
<body>
    <div class="header"> 
        <div class="logo">
            <img src="img/kol healthy.png" alt="" height="150px" width="150px">
        </div>
        <hr>
    </div>
    <div class="all">
        <section class="left">
            <div class="insideleft">
                <h3>Contact</h3>
                <input type="email" placeholder="Email ">
               <div> <input type="checkbox" name="" id="email">
                <label for="email">Email me with news and offers</label></div>
                <h3>Delivery</h3>
                <input type="search" name="" id="" placeholder="wilaya">
              <div>
                <form action="" method="post">
                <input type="text" placeholder="First name">
                <input type="text" placeholder="Family name">
              </div>
              <input type="text" placeholder="Address">
              <input type="number" name="" id="">
              <h3>Payment</h3>
              <p>all transaction are secure and ecrypted</p>
              <div class="creditcard">
                <div class="creditup"> 
                    <h2>credit card</h2>
                    <img src="" alt=""></div>
              </div>
                <div class="creditdown">
                    <div><input type="text" placeholder="Card number"></div>
                    <div>
                        <input type="date" name="" id="" placeholder="Expiration date (MM / YY)">
                        <input type="number" name="" id="" placeholder="security code">
                    </div>
                    <div> <input type="text" placeholder="name on card"></div>
                </form>

                </div>

            </div>

            <div></div>
        </section>
        <section class="right">
        </section>
    </div>
</body>
</html>