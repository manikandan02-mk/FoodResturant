<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavenly Bites - Premium Desserts</title>
    <link rel="icon" type="image/png" href="./images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="./images/logo.png" alt="Heavenly Bites Logo" class="logo-icon"
                    style="height: 40px; border-radius: 5px;">
                <span>Heavenly Bites</span>
            </a>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">Home</a>
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
                    <a href="about.php" class="nav-link">About</a>
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

    <!-- Carousel Banner -->
    <section class="carousel-section">
        <div class="carousel-container">
            <div class="carousel-slide active" data-category="cakes">
                <img src="./images/warm_carousel_cakes.png" alt="Cakes">
                <div class="carousel-content">
                    <h1>Premium Cakes</h1>
                    <p>Beautifully layered, delicious cakes for every occasion</p>
                    <a href="menu.php?category=cakes" class="carousel-btn">Add to cart</a>
                </div>
            </div>

            <div class="carousel-slide" data-category="ice-creams">
                <img src="./images/warm_carousel_ice_creams.png" alt="Ice Creams">
                <div class="carousel-content">
                    <h1>Gourmet Ice Creams</h1>
                    <p>Rich and creamy flavors made from the finest ingredients</p>
                    <a href="menu.php?category=ice-creams" class="carousel-btn">Add to cart</a>
                </div>
            </div>

            <div class="carousel-slide" data-category="pastries">
                <img src="./images/warm_carousel_pastries.png" alt="Pastries">
                <div class="carousel-content">
                    <h1>French Pastries</h1>
                    <p>Freshly baked artisanal pastries and tarts</p>
                    <a href="menu.php?category=pastries" class="carousel-btn">Add to cart</a>
                </div>
            </div>

            <div class="carousel-slide" data-category="chocolates">
                <img src="./images/warm_carousel_chocolates.png" alt="Chocolates">
                <div class="carousel-content">
                    <h1>Artisan Chocolates</h1>
                    <p>Luxury truffles and rich chocolate creations</p>
                    <a href="menu.php?category=chocolates" class="carousel-btn">Add to cart</a>
                </div>
            </div>

            <div class="carousel-slide" data-category="international">
                <img src="./images/warm_carousel_international.png" alt="International Specials">
                <div class="carousel-content">
                    <h1>International Specials</h1>
                    <p>Exquisite desserts from around the world</p>
                    <a href="menu.php?category=international" class="carousel-btn">Add to cart</a>
                </div>
            </div>

            <button class="carousel-prev">
                <i class="fas fa-chevron-up"></i>
            </button>
            <button class="carousel-next">
                <i class="fas fa-chevron-down"></i>
            </button>

            <div class="carousel-indicators">
                <button class="indicator active" data-slide="0"></button>
                <button class="indicator" data-slide="1"></button>
                <button class="indicator" data-slide="2"></button>
                <button class="indicator" data-slide="3"></button>
                <button class="indicator" data-slide="4"></button>
            </div>
        </div>
    </section>

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="container">
            <h2>Why Choose Heavenly Bites?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-leaf"></i>
                    <h3>Finest Ingredients</h3>
                    <p>We use premium cocoa, fresh dairy, and high-quality seasonal fruits.</p>
                </div>
                <div class="feature-card">
                    <i class="fa-solid fa-cake-candles"></i>
                    <h3>Master Pastry Chefs</h3>
                    <p>Our talented team brings sweet culinary excellence to every dessert.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-heart"></i>
                    <h3>Made with Love</h3>
                    <p>Every pastry and cake is crafted to bring joy and sweetness to your day.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-award"></i>
                    <h3>Award Winning</h3>
                    <p>Recognized globally for our dedication to dessert perfection.</p>
                </div>
            </div>
        </div>
    </section>



    <script src="script.js"></script>
</body>

</html>