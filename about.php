<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Heavenly Bites</title>
    <link rel="icon" type="image/png" href="./images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="./images/logo.png" alt="Heavenly Bites Logo" class="logo-icon" style="height: 40px; border-radius: 5px;">
                <span>Heavenly Bites</span>
            </a>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
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
                <li class="nav-item">
                    <a href="about.php" class="nav-link active">About</a>
                </li>
                <li class="nav-item">
                    <a href="franchise.php" class="nav-link">Franchise</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>

            </ul>

            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search dishes...">
                <button class="search-btn" aria-label="Search">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- About Hero Section -->
    <section class="about-hero">
        <div class="about-hero-content">
            <h1>Our Sweet Story</h1>
            <p>From a small bakery kitchen to your favorite premium dessert destination.</p>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="vision-mission">
        <div class="container">
            <div class="vm-grid">
                <div class="vm-card">
                    <i class="fas fa-eye"></i>
                    <h2>Our Vision</h2>
                    <p>To redefine the dessert experience by bringing world-class sweet creations crafted with premium ingredients to every table.</p>
                </div>
                <div class="vm-card">
                    <i class="fas fa-bullseye"></i>
                    <h2>Our Mission</h2>
                    <p>Creating unforgettable moments of joy through exceptional sweet treats, innovative pastry recipes, and warm hospitality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Chef Details Section -->
    <section class="chefs-section">
        <div class="container">
            <div class="section-title">
                <h2>Meet Our Master Pastry Chefs</h2>
            </div>
            <div class="chefs-grid">
                <div class="chef-card">
                    <img src="./images/chef-cooking-kitchen-while-wearing-professional-attire.jpg" alt="Chef Alex">
                    <div class="chef-info">
                        <h3>Alex Robertson</h3>
                        <span>Executive Pastry Chef</span>
                        <p>With over 15 years of culinary expertise, Alex brings a fusion of traditional flavors to our modern cakes.</p>
                        <div class="chef-socials">
                            <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/login" target="_blank"><i class="fab fa-x-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="chef-card">
                    <img src="./images/woman-working-as-professional-chef.jpg" alt="Chef Maria">
                    <div class="chef-info">
                        <h3>Maria </h3>
                        <span>Master Chocolatier</span>
                        <p>Specializing in fine chocolates, Maria turns premium cocoa into extraordinary sweet masterpieces.</p>
                        <div class="chef-socials">
                            <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/login" target="_blank"><i class="fab fa-x-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="chef-card">
                    <img src="./images/medium-shot-professional-chef-posing.jpg" alt="Chef David">
                    <div class="chef-info">
                        <h3>David Chen</h3>
                        <span>International Dessert Specialist</span>
                        <p>A master of authentic baking techniques, David brings delicate macarons and vibrant international sweets to our menu.</p>
                        <div class="chef-socials">
                            <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/login" target="_blank"><i class="fab fa-x-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Reviews -->
    <section class="reviews-section">
        <div class="container">
            <div class="section-title">
                <h2>What Our Guests Say</h2>
            </div>
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"The best dessert experience I've had in years! The red velvet cake was absolute perfection. Highly recommended!"</p>
                    <div class="reviewer">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop" alt="Sarah J.">
                        <h4>Sarah Jenkins</h4>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>"A wonderful atmosphere combined with pastries that are as beautiful as they are delicious. The staff was incredibly sweet."</p>
                    <div class="reviewer">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop" alt="Michael T.">
                        <h4>Michael Thorne</h4>
                    </div>
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
                        <a href="https://twitter.com/login" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
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

