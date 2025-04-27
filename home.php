<?php
require 'config.php';
session_start();

// Redirect if user is already logged in
if (isset($_SESSION['email'])) {
    if (!isset($_GET['id'])) {
        // Redirect to home.php with the session ID
        header("Location: home.php?id=" . $_SESSION['id']);
        exit();
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
    <script defer src="home.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <script defer src="home.js"></script>
</head>
<body>

    
<div class="login">
    <img src="img/engin-akyurt-Y5n8mCpvlZU-unsplash.jpg" alt="login image" class="login__img">
    <?php 
    if (isset($_SESSION['email'])) {
    include "navbar_logged.php" ;
    }else{
        include "navbar.php";
    }
    ?>
    <div class="left">
        <h2 class="t1">Get the best products</h2>
        <h2 class="t2">Get the best diet system in store</h2>
        <a href="#" class="btn">ORDER NOW !</a>
    </div> 

    <div class="container">
        
    <div class="about">
        <div class="title">About Me</div>
        <div class="row" >
        <div class="col1" id="myCol1">
        
        

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
        </svg>
        
        <h5 >Safety</h5>
        <p id="p">Our ecommerce service prioritizes the safety and security of our customers above all else. We take every measure to ensure that your personal and financial information is fully protected at every stage of the transaction process.</p>
        <a href="#" >Read More</a>
    </div>
    <div class="col1" id="myCol2">
        
        

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
            <path d="M48 0C21.5 0 0 21.5 0 48V368c0 26.5 21.5 48 48 48H64c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H48zM416 160h50.7L544 237.3V256H416V160zM112 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm368-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
        </svg>
        
        <h5 >Safety</h5>
        <p id="p">Our ecommerce service prioritizes the safety and security of our customers above all else. We take every measure to ensure that your personal and financial information is fully protected at every stage of the transaction process.</p>
        <a href="#" >Read More</a>
    </div>
    <div class="col1" id="myCol3">
        
        

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-event-fill" viewBox="0 0 16 16">
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5M11.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
        </svg>
        
        <h5 >Safety</h5>
        <p id="p">Our ecommerce service prioritizes the safety and security of our customers above all else. We take every measure to ensure that your personal and financial information is fully protected at every stage of the transaction process.</p>
        <a href="#" >Read More</a>
    </div>
    </div>
        </div>
    


    <div class="contain">
        <div class="title">New Arrivals</div>
        <div class="prdcts">
            <div class="prdct" >
                <div class="more">
                    <img src="img/5555.png"/>
                    <div class="mysvg">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bag" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/><path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/>
                        </svg></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#">Plat</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus eaque veritatis eos iusto est.</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h4>99.99DA</h4>
                </div>
            </div>
            <div class="prdct" >
                <div class="more">
                    <img src="img/5555.png"/>
                    <div class="mysvg">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bag" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/><path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/>
                        </svg></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#">Plat</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus eaque veritatis eos iusto est.</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h4>99.99DA</h4>
                </div>
            </div>
            <div class="prdct" >
                <div class="more">
                    <img src="img/5555.png"/>
                    <div class="mysvg">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bag" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/><path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/>
                        </svg></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#">Plat</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus eaque veritatis eos iusto est.</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h4>99.99DA</h4>
                </div>
            </div>
            <div class="prdct" >
                <div class="more">
                    <img src="img/5555.png"/>
                    <div class="mysvg">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bag" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/><path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/>
                        </svg></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#">Plat</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus eaque veritatis eos iusto est.</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h4>99.99DA</h4>
                </div>
            </div>
            <div class="prdct" >
                <div class="more">
                    <img src="img/5555.png"/>
                    <div class="mysvg">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bag" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/><path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/>
                        </svg></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#">Plat</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus eaque veritatis eos iusto est.</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h4>99.99DA</h4>
                </div>
            </div>
            <div class="prdct" >
                <div class="more">
                    <img src="img/5555.png"/>
                    <div class="mysvg">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bag" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/><path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/>
                        </svg></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#">Plat</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus eaque veritatis eos iusto est.</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h4>99.99DA</h4>
                </div>
            </div>
            <div class="prdct" >
                <div class="more">
                    <img src="img/5555.png"/>
                    <div class="mysvg">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bag" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/><path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/>
                        </svg></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#">Plat</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus eaque veritatis eos iusto est.</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h4>99.99DA</h4>
                </div>
            </div>
            <div class="prdct" >
                <div class="more">
                    <img src="img/5555.png"/>
                    <div class="mysvg">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bag" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/><path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/>
                        </svg></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#">Plat</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus eaque veritatis eos iusto est.</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h4>99.99DA</h4>
                </div>
            </div>
            <div class="prdct" >
                <div class="more">
                    <img src="img/5555.png"/>
                    <div class="mysvg">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bag" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/><path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/>
                        </svg></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#">Plat</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus eaque veritatis eos iusto est.</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h4>99.99DA</h4>
                </div>
            </div>
            <div class="prdct" >
                <div class="more">
                    <img src="img/5555.png"/>
                    <div class="mysvg">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bag" viewBox="0 0 64 64" stroke-width="3" stroke="currentColor" fill="none"><polyline points="4.62 9.96 15.34 9.96 21.71 37.85 49.69 37.85 56.17 16.35 16.67 15.79"/><path d="M51.73,44.35H21.67a3.21,3.21,0,0,1-3.28-3.28c0-3.22,3.32-3.22,3.32-3.22"/><circle cx="24.95" cy="51.61" r="3.53"/><circle cx="46.04" cy="51.61" r="3.53"/>
                        </svg></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#">Plat</a>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus eaque veritatis eos iusto est.</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h4>99.99DA</h4>
                </div>
            </div>
        </div>
        </div>
        <?php include "footer.php" ?>
    
    </div>
</div>
<script src="js/home.js"></script>
</body>
</html>