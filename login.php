<?php
require 'config.php';
session_start();

if (isset($_SESSION['email'])) {
    header("Location: home.php?id=" . $_SESSION['id']);
    exit();
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $stmt = $conn->prepare("SELECT * FROM client WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
           


            if (md5($password) == $user['password']) {
                $_SESSION['email'] = $user['email'];
                $_SESSION['first-name'] = $user['fname'];
                $_SESSION['last-name'] = $user['lname'];
                $_SESSION['id'] = $user['id_client']; 
                $stmt2 = $conn->prepare("SELECT * FROM cart WHERE client = ?");
                $stmt2->bind_param("i", $_SESSION['id']);
                $stmt2->execute();
                $result2 = $stmt2->get_result();
                $cart = $result2->fetch_assoc();
                $_SESSION['id_cart'] = $cart['id_cart']; 
                 header("Location: home.php?id=" . $_SESSION['id']);
                echo($_SESSION['id_cart']);
                exit();
            } else {
                $message = 'incorrect password';
            }
        } else {
            $message = 'Invalid email or password';
        }

        $stmt->close();
    } else {
        $message = 'Please fill in both fields';
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login">
        <img src="img/engin-akyurt-Y5n8mCpvlZU-unsplash.jpg" alt="login image" class="login__img">
        
        <?php include "navbar.php"; ?>
        
        <div class="titleAccount"><p>ACCOUNT</p></div>
        <div class="home__account"><a href="#">Home</a>/Account</div>

        <div class="container">
            <?php if (!empty($message)) { echo "<div class='error'>$message</div>"; } ?>
            <form action="login.php" method="post" class="login__form">
                <h1 class="login__title">Login</h1>
                <div class="login__content">
                    <div class="login__box">
                        <div class="login__box-input">
                            <input type="email" name="email" required class="login__input" id="login-email" placeholder=" ">
                            <label for="login-email" class="login__label">Email</label>
                        </div>
                    </div>
                    <div class="login__box">
                        <div class="login__box-input">
                            <input type="password" name="password" required class="login__input" id="login-pass" placeholder=" ">
                            <label for="login-pass" class="login__label">Password</label>
                            <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                        </div>
                    </div>
                </div>
                <input type="submit" class="login__button" name="submit" value="Sign in">
                <div class="element"></div>
                <div class="login__check">
                    <a href="forgotAccount.php" class="login__forgot">Forgot your Password?</a>
                    <p class="login__register">
                        <a href="createAccount.php">Create account</a>
                    </p>
                </div>
            </form>

            <?php include "footer.php"; ?>
        </div>
        <button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">&#8593;</button>
    </div>

    <script src="js/login.js"></script>
    <script>
        window.onload = function() {
            <?php if (!empty($message)) { ?>
                Swal.fire({
                    title: 'Error',
                    text: '<?php echo $message; ?>',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            <?php } ?>
        }
    </script>
</body>
</html>
