<?php
require_once 'db_connect.php';

$message_status = "";
$message_text = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form inputs-ai safe-ah get pannuvom
    $first_name = trim($_POST['fname'] ?? '');
    $last_name = trim($_POST['lname'] ?? '');
    $email = trim($_POST['femail'] ?? '');
    $phone = trim($_POST['fphone'] ?? '');
    $city = trim($_POST['city'] ?? '');
    $capital_available = trim($_POST['capital'] ?? '');
    $background_message = trim($_POST['fmessage'] ?? '');

    // Required fields check
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($city)) {
        $message_status = "error";
        $message_text = "Please fill all required fields.";
    } else {
        try {
            // Database Insertion Query
            $sql = "INSERT INTO franchise_applications (first_name, last_name, email, phone, city, capital_available, background_message) 
                    VALUES (:first_name, :last_name, :email, :phone, :city, :capital_available, :background_message)";

            $stmt = $conn->prepare($sql);

            $stmt->execute([
                ':first_name' => $first_name,
                ':last_name' => $last_name,
                ':email' => $email,
                ':phone' => $phone,
                ':city' => $city,
                ':capital_available' => $capital_available,
                ':background_message' => $background_message
            ]);

            $message_status = "success";
            $message_text = "Application received successfully!";
        } catch (PDOException $e) {
            $message_status = "error";
            $message_text = "Database Error: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franchise - Heavenly Bites</title>
    <link rel="icon" type="image/png" href="./images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="./images/logo.png" alt="Heavenly Bites Logo" class="logo-icon" style="height: 40px; border-radius: 5px;">
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
                <li class="nav-item"><a href="franchise.php" class="nav-link active">Franchise</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>

            </ul>

            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search dishes...">
                <button class="search-btn" aria-label="Search"><i class="fas fa-search"></i></button>
            </div>

            <div class="hamburger"><span></span><span></span><span></span></div>
        </div>
    </nav>

    <section class="franchise-hero">
        <div>
            <h1>Join the Heavenly Bites Family</h1>
            <p>Bring premium desserts to your city. Own a Heavenly Bites franchise today.</p>
        </div>
    </section>

    <?php if ($message_status === "success"): ?>
        <div style="background-color: #d4edda; color: #155724; padding: 15px; margin: 20px auto; max-width: 1200px; border-radius: 5px; text-align: center; font-weight: bold;">
            <?php echo $message_text; ?>
        </div>
    <?php elseif ($message_status === "error"): ?>
        <div style="background-color: #f8d7da; color: #721c24; padding: 15px; margin: 20px auto; max-width: 1200px; border-radius: 5px; text-align: center; font-weight: bold;">
            <?php echo $message_text; ?>
        </div>
    <?php endif; ?>

    <section class="franchise-info">
        <div class="container">
            <div class="section-title">
                <h2>Why Franchise with Us?</h2>
            </div>
            <div class="franchise-grid">
                <div class="franchise-card">
                    <i class="fas fa-store"></i>
                    <h3>Proven Business Model</h3>
                    <p>Our operational model is designed for efficiency and profitability.</p>
                </div>
                <div class="franchise-card">
                    <i class="fas fa-book-open"></i>
                    <h3>Comprehensive Training</h3>
                    <p>Receive extensive training in operations, marketing, and culinary standards.</p>
                </div>
                <div class="franchise-card">
                    <i class="fas fa-bullhorn"></i>
                    <h3>Marketing Support</h3>
                    <p>Benefit from our national brand presence and ongoing marketing campaigns.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="franchise-form-section">
        <div class="container">
            <div class="section-title">
                <h2>Apply for a Franchise</h2>
            </div>
            <div class="franchise-form-wrapper">
                <div class="franchise-form-image">
                    <img src="./images/dessert-shop-image.png" alt="Heavenly Bites Storefront">
                </div>
                <div class="franchise-form-container">
                    <form action="franchise.php" method="POST" class="contact-form">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                            <div class="form-group">
                                <label for="fname">First Name *</label>
                                <input type="text" id="fname" name="fname" required>
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name *</label>
                                <input type="text" id="lname" name="lname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="femail">Email Address *</label>
                            <input type="email" id="femail" name="femail" required>
                        </div>
                        <div class="form-group">
                            <label for="fphone">Phone Number *</label>
                            <input type="tel" id="fphone" name="fphone" required>
                        </div>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                            <div class="form-group">
                                <label for="city">Interested City *</label>
                                <input type="text" id="city" name="city" required>
                            </div>
                            <div class="form-group">
                                <label for="capital">Available Capital</label>
                                <select id="capital" name="capital" style="height: 48px;">
                                    <option value="">Select an amount</option>
                                    <option value="under50k">Under ₹6L</option>
                                    <option value="50k-100k">₹6L - ₹12L</option>
                                    <option value="over100k">Over ₹20L</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fmessage">Tell us about your background</label>
                            <textarea id="fmessage" name="fmessage" rows="3"></textarea>
                        </div>
                        <button type="submit" class="submit-btn" style="margin-top: 10px;">Submit Inquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

   <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Heavenly Bites</h4>
                    <p>Premium dessert experience since 2026</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="franchise.php">Franchise</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <p>Email: info@FoodiesDelight.com</p>
                    <p>Phone: +91 98765 43210</p>
                </div>
                <div class="footer-section">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/login/" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/login" target="_blank"><i class="fab fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Heavenly Bites Dessert Store. All rights reserved.</p>
                <p class="developer-credit">Design and Developed by Manikandan</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>