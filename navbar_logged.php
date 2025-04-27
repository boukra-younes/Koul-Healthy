<style>
        
    .dropdown-menu {
        margin-top: 45px;
        margin-left: -40px;
        display: none;
        position: absolute;
        background-color: white;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-menu,.dropdown-menu:hover {
        display: block;
    }

    .dropdown-item {
        padding: 8px 16px;
        text-decoration: none;
        display: block;
        color: black;
    }

    .dropdown-item:hover {
        background-color: #f1f1f1;
    }
    .nav {
        list-style-type: none;
        display: flex;
        justify-content: flex-end; 
        align-items: center;
        padding: 0;
        margin: 0;
    }

    .nav li {
        margin-right: 5px; 
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: white;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        padding: 8px 16px;
        text-decoration: none;
        display: block;
        color: black;
    }

    .dropdown-item:hover{
        background-color: #f1f1f1;
    }

    .nav li:last-child {
        margin-right: 0; 
    }
    .dropdown-item.logout p{
        color: rgb(184, 0, 0);
    }

    .custom-divider {
        height: 1px;
        background-color: #d0d0d0;
        margin: 0 15px; 
    }
</style>



<div class="navigator" id="navigator">
    <div class="containerTop">
        <button class="icon-button">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-github"></i>
        </button>
        <button class="click-mail">
            <i class="fa-solid fa-envelope"></i>
            <p class="mail">email@example.com</p>
        </button>
        
    </div>
    <div class="navigator__bar" id="navigator__bar">
        <div class="logo"><img src="img/logo2.png" alt=""></div>
        <nav id="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#About">About Me</a></li>
                <li class="dropdown">
                    <a href="choiser.php">Diet Plans</a>
                    <!-- <div class="dropdown__menu">
                        <div class="dropdown__item">
                            <div class="plan">
                                <img src="../img/logo.png" alt="Diet Plan 1">
                                <button onclick="handleButtonClick(1)">Button 1</button>
                            </div>
                            <div class="plan">
                                <img src="../img/logo.png" alt="Diet Plan 2">
                                <button onclick="handleButtonClick(2)">Button 2</button>
                            </div>
                            <div class="plan">
                                <img src="../img/logo.png" alt="Diet Plan 3">
                                <button onclick="handleButtonClick(3)">Button 3</button>
                            </div>
                            
                        </div>
                    </div>-->
                </li>
                <li><a href="products.php">Shop</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <ul class="nav">
                    <li class="dropdown">
                        <?php
                        
                        require 'config.php';
                        $user_id = $_SESSION['id']; // Assuming user_id is stored in session
                        
                        $sql = "SELECT fname, lname FROM client WHERE id_client = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("i", $user_id);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $row = $result->fetch_assoc();
                        
                        
                        $stmt->close();
                        $conn->close();
                         ?>
                        <i class="fa-solid fa-user"></i>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><p><?php echo ($row['fname'] .$row['fname']) ?></p></a>
                            <a class="dropdown-item" href="Profile.php"><p>Profile</p></a>
                            <div class="dropdown-divider"></div>
                            <div class="custom-divider"></div> 
                            <a class="dropdown-item logout" href="logout.php"><p>Log out</p></a>
                        </div>
                    </li>
                    <li id="cartIcon" style="cursor: pointer;"><i class="fa-solid fa-cart-shopping"></i></li>

                    <script>
    document.getElementById('cartIcon').addEventListener('click', function() {
        window.location.href = 'cart.php';
    });
</script>

                    <li><i class="fa-solid fa-magnifying-glass"></i></li>
                </ul> 
                
                
            </ul>
        </nav>
    </div>
    
</div>
<script src="js/navbar.js"></script>