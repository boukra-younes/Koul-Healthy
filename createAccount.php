<?php
require 'config.php';
session_start();

// Redirect if user is already logged in
if (isset($_SESSION['email'])) {
    header("Location: home.php");
    exit();
}

// Initialize variables for alert display and form field values
$alertMessage = "";
$alertType = "";
$firstNameValue = "";
$lastNameValue = "";
$emailValue = "";
$phoneValue = "";
$accounttype = 0;

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $phone = $_POST['phone'];

    // Store form values to repopulate fields if necessary
    $firstNameValue = $firstName;
    $lastNameValue = $lastName;
    $emailValue = $email;
    $phoneValue = $phone;

    // Validate form data
    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password) && !empty($cpassword)) {
        if ($password !== $cpassword) {
            $alertMessage = "Passwords do not match!";
            $alertType = "error";
        } else {
            // Check if email already exists
            $stmt = $conn->prepare("SELECT * FROM client WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $alertMessage = "This email already exists!";
                $alertType = "error";
            } else {
                // Hash the password
                $hashedPassword = md5($password);

                // Insert new user into database
                $stmt = $conn->prepare("INSERT INTO client (fname, lname, email, password, phone) VALUES (?, ?, ?, ?, ?q)");
                $stmt->bind_param("sssss", $firstName, $lastName, $email, $hashedPassword, $phone);

                if ($stmt->execute()) {
                    // Store user ID in session
                    $_SESSION['id'] = $stmt->insert_id;
                    $_SESSION['email'] = $email;
                    $_SESSION['first_name'] = $firstName;
                    $_SESSION['last_name'] = $lastName;
                
                    // Insert into 'cart' table
                    $cart_stmt = $conn->prepare("INSERT INTO cart (client) VALUES (?)");
                    $cart_stmt->bind_param("i", $_SESSION['id']);
                    if ($cart_stmt->execute()) {
                        // Retrieve the last inserted id_cart
                        $_SESSION['id_cart'] = $cart_stmt->insert_id;
                        
                        // Clear form values after successful registration (if needed)
                        $firstNameValue = "";
                        $lastNameValue = "";
                        $emailValue = "";
                        $phoneValue = "";
                
                        // Redirect to home.php
                        header("Location: home.php");
                        echo($_SESSION['id_cart']);
                        exit();
                    } else {
                        // Handle cart insertion failure
                        $alertMessage = "Error inserting into cart: " . $cart_stmt->error;
                        $alertType = "error";
                    }
                } else {
                    // Handle user registration failure
                    $alertMessage = "Error registering user: " . $stmt->error;
                    $alertType = "error";
                }
                
              
            }
        }
    } else {
        $alertMessage = "All fields are required!";
        $alertType = "error";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesCreate.css">
    <style>
        /* Styling for alert box */
        .alert {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f0f0f0;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            display: none;
        }
        .alert p {
            margin: 0;
            font-size: 18px;
            color: #333;
        }
        .alert .ok-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .alert.error {
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        .alert.success {
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
    </style>
</head>
<body>
    <div class="login">
        <img src="img/engin-akyurt-Y5n8mCpvlZU-unsplash.jpg" alt="login image" class="login__img">
        
        <?php include "navbar.php"; ?>
        
        <div class="titleAccount"><p>CREATE ACCOUNT</p></div>
        <div class="home__account"><a href="#">Home</a>/Create Account</div>

        <div class="container">
            <form action="createAccount.php" method="post" class="login__form" id="create-account-form">
                <h1 class="login__title">Create Account</h1>
        
                <div class="login__content">
                    <div class="login__box">
                        <div class="login__box-input">
                            <input type="text" required class="login__input" name="first-name" id="first-name" placeholder=" " value="<?php echo htmlspecialchars($firstNameValue); ?>">
                            <label for="first-name" class="login__label">First Name</label>
                        </div>
                    </div>
        
                    <div class="login__box">
                        <div class="login__box-input">
                            <input type="text" name="last-name" required class="login__input" id="last-name" placeholder=" " value="<?php echo htmlspecialchars($lastNameValue); ?>">
                            <label for="last-name" class="login__label">Last Name</label>
                        </div>
                    </div>
        
                    <div class="login__box">
                        <div class="login__box-input">
                            <input type="email" name="email" required class="login__input" id="login-email" placeholder=" " value="<?php echo htmlspecialchars($emailValue); ?>">
                            <label for="login-email" class="login__label">Email</label>
                        </div>
                    </div>
        
                    <div class="login__box">
                        <div class="login__box-input">
                            <input type="number" name="phone" required class="login__input" id="login-phone" placeholder=" " value="<?php echo htmlspecialchars($phoneValue); ?>">
                            <label for="login-phone" class="login__label">Phone</label>
                        </div>
                    </div>
                
                    <div class="login__box">
                        <div class="login__box-input">
                            <input type="password" name="password" required class="login__input" id="login-pass" placeholder=" ">
                            <label for="login-pass" class="login__label">Password</label>
                            <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                        </div>
                    </div>
                    
                    <div class="login__box">
                        <div class="login__box-input">
                            <input type="password" name="cpassword" required class="login__input" id="login-cpass" placeholder=" ">
                            <label for="login-cpass" class="login__label">Confirm password</label>
                            <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                        </div>
                    </div>
                    
                    <input type="submit" class="login__button" name="submit" value="Create">
                </div>
            </form>
        </div>
        <?php include "footer.php"; ?>
    </div>

    <!-- Alert Box -->
    <div class="alert <?php echo $alertType; ?>" id="alert" style="display: <?php echo !empty($alertMessage) ? 'block' : 'none'; ?>">
        <p><?php echo $alertMessage; ?></p>
        <button class="ok-button" onclick="closeAlert()">OK</button>
    </div>

    <button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">&#8593</button>
    
    <script>
        // Function to close the alert box
        function closeAlert() {
            document.getElementById('alert').style.display = 'none';
        }
    </script>
</body>
</html>
