<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $conn = mysqli_connect('localhost', 'root', '', 'account');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $message = "Click the link to reset your password: <a href='login.php?email=$email'>Reset Password</a>";
        $subject = "Password Reset";
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

        if (mail($email, $subject, $message, $headers)) {
            echo "<div class='success'>A reset link has been sent to your email address.</div>";
        } else {
            echo "<div class='error'>Failed to send email. Please try again later.</div>";
        }
    } else {
        $alrt = "This Email does not exist please try again.";
    }

    mysqli_close($conn);
}
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Account</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/forgotAccount.css">
</head>
<body>

    <div class="login" >
        <img src="img/engin-akyurt-Y5n8mCpvlZU-unsplash.jpg" alt="login image" class="login__img">
        
        <?php include "navbar.php"?>
        
        <div class="titleAccount"><p>ACCOUNT</p></div>
        <div class="home__account"><a href="#">Home</a>/Account</div>
        <div class="container">
        <?php if (!empty($alrt)) { echo "<div class='error'>$alrt</div>"; } ?>

            <form action="forgotAccount.php" method="post" class="login__form">
                <h1 class="login__title">Reset your password</h1>
                <p class="sub">We will send you an email to reset your password</p>
                <div class="login__content">
                    <div class="login__box" id="login__box">
                        <div class="login__box-input">
                            <input type="email" name="email" required class="login__input" placeholder=" ">
                            <label for="login-email" class="login__label">Email</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="login__button" id="login__button">Submit</button>
            </form>
            <?php include "footer.php" ?>
        </div>
    </div>
    <button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">&#8593;</button>
    <script src="js/forgotAccount.js"></script>
    <script>
        window.onload = function() {
            <?php if (!empty($alrt)) { ?>
                Swal.fire({
                    title: 'Error',
                    text: '<?php echo $alrt; ?>',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            <?php } ?>
        }
    </script>
</body>
</html>
