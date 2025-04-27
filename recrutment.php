<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>recrutment</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/recrutment.css">
    <script defer src="js/recrutment.js"></script>
</head>
<body>
    <div class="login">
        <img src="img/engin-akyurt-Y5n8mCpvlZU-unsplash.jpg" alt="login image" class="login__img">
        <?php include "navbar.php" ?>
    
        <div class="titleAccount"><p>RECRUTMENT</p></div>
        <div class="home__account"><a href="#">Home</a>/Recrutment</div>
        <div class="container">
            <div class="flix">
            <div class="left">
                <div class="info">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam iste accusantium dolorem harum odit tenetur voluptatem et odio quaerat blanditiis debitis quod doloribus velit culpa recusandae quisquam quasi, eum assumenda.</p>
                    <label for="checkchef">Chef</label>
                    <input type="checkbox" id="checkchef">
                    <label for="checklivrere">Livrere</label>
                    <input type="checkbox" id="checklivrere">
                </div>     
                <div class="form">
                    <h3>General information:</h3>
                    <input type="text" placeholder="Name" required>
                    <input type="text" placeholder="Email *" required>
                    <input type="text" placeholder="Phone number" required>
                    <input type="text" placeholder="Address" required>
                </div>
                
                <h3>Private Information:</h3>
                <div class="file-input-container">
                    <a>Certificat:</a>
                    <input type="file" id="fileInput1" class="file-input">
                    <label for="fileInput1" class="file-input-label">Choose a file</label>
                    <a>National card:</a>
                    <input type="file" id="fileInput2" class="file-input">
                    <label for="fileInput2" class="file-input-label">Choose a file</label>
                </div>
                <div class="file-input-container1">
                    <a>driving license:</a>
                    <input type="file" id="fileInput3" class="file-input">
                    <label for="fileInput3" class="file-input-label">Choose a file</label>
                    <a>National card:</a>
                    <input type="file" id="fileInput4" class="file-input">
                    <label for="fileInput4" class="file-input-label">Choose a file</label>
                </div>
                <button class="btn" type="submit">Send</button>
            </div>
            <div class="right">
                <div class="test1">
                    <h2>Welcome to be the chef on this site</h2>
                    <img src="img/chef.jpg">
                </div>
                <div class="test2" style="display: none;">
                    <h2>Welcome to be the livrere on this site</h2>
                    <img src="img/livrer.jpg"/>
                </div>
            </div>
            </div>
            <?php include "footer.php" ?>
        </div>
    </div>
    
    <script src="js/recrutment.js"></script>
</body>
</html>
