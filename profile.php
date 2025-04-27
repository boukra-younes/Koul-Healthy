<?php
session_start();
$user_id = $_SESSION['id'];
include 'config.php'; // Include your database connection

// Fetch user data
$sql = "SELECT * FROM client WHERE id_client = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$error_message = '';

// Update user data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['form_type'])) {
        if ($_POST['form_type'] == 'firstname') {
            $first_name = $_POST['firstname'];
            $sql = "UPDATE client SET fname = ? WHERE id_client = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $first_name, $user_id);
            $stmt->execute();
            header("Location: profile.php");
            exit();
        } elseif ($_POST['form_type'] == 'lastname') {
            $last_name = $_POST['lastname'];
            $sql = "UPDATE client SET lname = ? WHERE id_client = ?";
            $stmt->prepare($sql);
            $stmt->bind_param("si", $last_name, $user_id);
            $stmt->execute();
            header("Location: profile.php");
            exit();
        } elseif ($_POST['form_type'] == 'phone') {
            $phone = $_POST['phone'];
            $sql = "UPDATE client SET phone = ? WHERE id_client = ?";
            $stmt->prepare($sql);
            $stmt->bind_param("si", $phone, $user_id);
            $stmt->execute();
            header("Location: profile.php");
            exit();
        } elseif ($_POST['form_type'] == 'email') {
            $email = $_POST['email'];
            
            // Check if email already exists
            $check_sql = "SELECT id_client FROM client WHERE email = ?";
            $check_stmt = $conn->prepare($check_sql);
            $check_stmt->bind_param("s", $email);
            $check_stmt->execute();
            $check_stmt->store_result();
            
            if ($check_stmt->num_rows > 0) {
                $error_message = "Email already exists. Please use a different email.";
            } else {
                $update_sql = "UPDATE client SET email = ? WHERE id_client = ?";
                $update_stmt = $conn->prepare($update_sql); 
                $update_stmt->bind_param("si", $email, $user_id);
                $update_stmt->execute();
                header("Location: profile.php");
                exit();
            }
        } elseif ($_POST['form_type'] == 'password') {
            $currentPassword = $_POST['currentPassword'];
            $newPassword = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];
            if (md5($currentPassword) == $user['password']) {
                if ($newPassword === $confirmPassword) {
                    $newPasswordHash = md5($newPassword);
                    $sql = "UPDATE client SET password = ? WHERE id_client = ?";
                    $stmt->prepare($sql);
                    $stmt->bind_param("si", $newPasswordHash, $user_id);
                    $stmt->execute();
                    header("Location: profile.php");
                    exit();
                } else {
                    $error_message = "New password and confirmation password do not match.";
                }
            } else {
                $error_message = "Current password is incorrect.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <script defer src="js/profile.js"></script>
    <?php if (!empty($error_message)): ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const alertDiv = document.getElementById('alert');
            alertDiv.innerHTML = '<?php echo $error_message; ?><br><button id="okButton">OK</button>';
            alertDiv.style.display = 'block';
            
            document.getElementById('okButton').addEventListener('click', function() {
                window.location.href = 'profile.php';
            });
        });
    </script>
    <?php endif; ?>
    <style>
        #alert {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
            text-align: center;
        }
        #alert button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #721c24;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #alert button:hover {
            background-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo"><img src="img/logo2.png" alt=""></div>
        <h1><a href="home.php">Home</a></h1>
    </nav> 
    <div class="all">
        <div class="profile-container">
            <h1>User profile</h1>
            <div class="profile-info">
                <div class="info-field" id="firstname-field">
                    <label for="firstname">First name:</label>
                    <span id="firstname"><?php echo  $user['fname']; ?></span>
                    <button class="edit-btn" onclick="editField('firstname')">Edit</button>
                    <form id="firstname-form" class="edit-form" style="display:none;" method="POST">
                        <input type="hidden" name="form_type" value="firstname">
                        <label for="firstnameEdit">Edit First Name:</label>
                        <input type="text" id="firstnameEdit" name="firstname" required>
                        <button type="submit">Save</button>
                        <button type="button" onclick="cancelEdit('firstname')">Cancel</button>
                    </form>
                </div>
                <div class="info-field" id="lastname-field">
                    <label for="lastname">Last name:</label>
                    <span id="lastname"><?php echo  $user['lname']; ?></span>
                    <button class="edit-btn" onclick="editField('lastname')">Edit</button>
                    <form id="lastname-form" class="edit-form" style="display:none;" method="POST">
                        <input type="hidden" name="form_type" value="lastname">
                        <label for="lastnameEdit">Edit Last Name:</label>
                        <input type="text" id="lastnameEdit" name="lastname" required>
                        <button type="submit">Save</button>
                        <button type="button" onclick="cancelEdit('lastname')">Cancel</button>
                    </form>
                </div>
                <div class="info-field" id="phone-field">
                    <label for="phone">Phone:</label>
                    <span id="phone"><?php echo  $user['phone']; ?></span>
                    <button class="edit-btn" onclick="editField('phone')">Edit</button>
                    <form id="phone-form" class="edit-form" style="display:none;" method="POST">
                        <input type="hidden" name="form_type" value="phone">
                        <label for="phoneEdit">Edit Phone:</label>
                        <input type="text" id="phoneEdit" name="phone" required placeholder="<?php echo  $user['phone']; ?>">
                        <button type="submit">Save</button>
                        <button type="button" onclick="cancelEdit('phone')">Cancel</button>
                    </form>
                </div>
                <div class="info-field" id="email-field">
                    <label for="email">Email:</label>
                    <span id="email"><?php echo  $user['email']; ?></span>
                    <button class="edit-btn" onclick="editField('email')">Edit</button>
                    <form id="email-form" class="edit-form" style="display:none;" method="POST">
                        <input type="hidden" name="form_type" value="email">
                        <label for="emailEdit">Edit Email:</label>
                        <input type="email" id="emailEdit" name="email" required placeholder="<?php echo  $user['email']; ?>">
                        <button type="submit">Save</button>
                        <button type="button" onclick="cancelEdit('email')">Cancel</button>
                    </form>
                </div>
                <div class="info-field" id="password-field">
                    <label for="password">Password:</label>
                    <span>********</span>
                    <button class="edit-btn" onclick="editPassword()">Edit</button>
                    <form id="password-form" class="edit-form" style="display:none;" method="POST">
                        <input type="hidden" name="form_type" value="password">
                        <label for="currentPassword">Current password:</label>
                        <input type="password" id="currentPassword" name="currentPassword" required><br>
                        <label for="newPassword">New password:</label>
                        <input type="password" id="newPassword" name="newPassword" required><br>
                        <label for="confirmPassword">Confirm password:</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" required><br>
                        <button type="submit">Save</button>
                        <button type="button" onclick="cancelPasswordEdit()">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="profile-img">
            <div class="image">
                <img src="img/profile.jpg">
            </div>
        </div>
    </div>
    <div id="alert"></div>
</body>
</html>
