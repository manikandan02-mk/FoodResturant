<?php
session_start();
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($username) || empty($password)) {
        echo json_encode(["status" => "error", "message" => "Username and password are required."]);
        exit;
    }

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            echo json_encode(["status" => "success", "message" => "Login successful!"]);
            exit;
        } else {
            echo json_encode(["status" => "error", "message" => "Invalid username or password."]);
            exit;
        }
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Server error: " . $e->getMessage()]);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Heavenly Bites</title>
    <link rel="icon" type="image/png" href="./images/main-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />main-
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="./images/main-logo.png" alt="Heavenly Bites Logo" class="logo-icon" style="height: 40px; border-radius: 5px;">
                <span>Heavenly Bites</span>
            </a>

            <ul class="nav-menu">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a href="menu.php" class="nav-link">Menu</a>
                    <div class="dropdown-menu">
                        <a href="menu.php?category=cakes">Cakes</a>
                        <a href="menu.php?category=ice-creams">Ice Creams</a>
                        <a href="menu.php?category=pastries">Pastries</a>
                        <a href="menu.php?category=chocolates">Chocolates</a>
                        <a href="menu.php?category=international">International Specials</a>
                    </div>
                </li>
                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="franchise.php" class="nav-link">Franchise</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link active"><i class="fas fa-user" style="font-size: 1.2rem;"></i></a></li>
            </ul>

            <div class="hamburger">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <!-- Login Section -->
    <section class="login-section">
        <div class="login-card">
            <div class="login-header">
                <h2>Welcome Back</h2>
                <p>Sign in to your Heavenly Bites account</p>
            </div>
            <div class="login-body">
                <div id="loginError" class="error-msg">Invalid username or password.</div>
                
                <form id="loginForm">
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 25px;">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="login-btn">Sign In</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-bottom" style="border-top: none; padding-top: 0;">
                <p>&copy; 2026 Heavenly Bites Dessert Store. All rights reserved.</p>
                <p class="developer-credit">Design and Developed by Manikandan</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>

