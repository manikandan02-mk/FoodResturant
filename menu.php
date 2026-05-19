<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Heavenly Bites</title>
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
                    <a href="menu.php" class="nav-link active">Menu</a>
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

    <!-- Menu Hero Section -->
    <section class="menu-hero">
        <div class="menu-hero-content">
            <h1>Our Sweet Menu</h1>
            <p>Discover our carefully crafted desserts made with premium ingredients</p>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="menu-section">
        <div class="container">
            <!-- Categories -->
            <div class="menu-categories">
                <button class="category-btn active" data-filter="all">All</button>
                <button class="category-btn" data-filter="cakes">Cakes</button>
                <button class="category-btn" data-filter="ice-creams">Ice Creams</button>
                <button class="category-btn" data-filter="pastries">Pastries</button>
                <button class="category-btn" data-filter="chocolates">Chocolates</button>
                <button class="category-btn" data-filter="international">International Specials</button>
            </div>

            <!-- Menu Grid -->
            <div class="menu-grid">
                <!-- Cakes -->
                <div class="menu-card" data-category="cakes">
                    <div class="menu-card-img">
                        <img src="./images/new_carousel_cakes.png" alt="Chocolate Truffle Cake">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Chocolate Truffle Cake</h3>
                            <span class="price">₹550</span>
                        </div>
                        <p>Rich and decadent layers of dark chocolate sponge and smooth truffle ganache.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Chocolate Truffle Cake" data-price="550">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-card" data-category="cakes">
                    <div class="menu-card-img">
                        <img src="https://images.unsplash.com/photo-1616541823729-00fe0aacd32c?w=600&h=400&fit=crop" alt="Red Velvet Cake">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Red Velvet Cake</h3>
                            <span class="price">₹600</span>
                        </div>
                        <p>Classic soft red velvet sponge layered with signature cream cheese frosting.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Red Velvet Cake" data-price="600">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-card" data-category="cakes">
                    <div class="menu-card-img">
                        <img src="https://images.unsplash.com/photo-1606890737304-57a1ca8a5b62?w=600&h=400&fit=crop" alt="Black Forest Cake">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Black Forest Cake</h3>
                            <span class="price">₹580</span>
                        </div>
                        <p>Chocolate sponge cake with a rich cherry filling based on the German dessert.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Black Forest Cake" data-price="580">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ice Creams -->
                <div class="menu-card" data-category="ice-creams">
                    <div class="menu-card-img">
                        <img src="./images/vanilla_bean_ice_cream.png" alt="Vanilla Bean Ice Cream">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Vanilla Bean Ice Cream</h3>
                            <span class="price">₹150</span>
                        </div>
                        <p>Classic, creamy ice cream made with real Madagascar vanilla beans.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Vanilla Bean Ice Cream" data-price="150">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-card" data-category="ice-creams">
                    <div class="menu-card-img">
                        <img src="./images/strawberry_swirl_ice_cream.png" alt="Strawberry Swirl Ice Cream">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Strawberry Swirl Ice Cream</h3>
                            <span class="price">₹180</span>
                        </div>
                        <p>Fresh strawberry ice cream rippled with sweet fruit compote.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Strawberry Swirl Ice Cream" data-price="180">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-card" data-category="ice-creams">
                    <div class="menu-card-img">
                        <img src="https://images.unsplash.com/photo-1557142046-c704a3adf364?w=600&h=400&fit=crop" alt="Chocolate Fudge Ice Cream">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Chocolate Fudge Ice Cream</h3>
                            <span class="price">₹190</span>
                        </div>
                        <p>Rich chocolate ice cream blended with gooey fudge brownies.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Chocolate Fudge Ice Cream" data-price="190">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pastries -->
                <div class="menu-card" data-category="pastries">
                    <div class="menu-card-img">
                        <img src="./images/air-croissant-with-strawberry-syrup-top-glass-milk.jpg" alt="French Butter Croissant">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>French Butter Croissant</h3>
                            <span class="price">₹120</span>
                        </div>
                        <p>Authentic, flaky, and buttery pastry freshly baked every morning.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="French Butter Croissant" data-price="120">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-card" data-category="pastries">
                    <div class="menu-card-img">
                        <img src="https://images.unsplash.com/photo-1519915028121-7d3463d20b13?w=600&h=400&fit=crop" alt="Fresh Fruit Tart">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Fresh Fruit Tart</h3>
                            <span class="price">₹200</span>
                        </div>
                        <p>Crisp sweet pastry filled with vanilla custard and topped with fresh berries.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Fresh Fruit Tart" data-price="200">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-card" data-category="pastries">
                    <div class="menu-card-img">
                        <img src="https://images.unsplash.com/photo-1603532648955-039310d9ed75?w=600&h=400&fit=crop" alt="Chocolate Éclair">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Chocolate Éclair</h3>
                            <span class="price">₹160</span>
                        </div>
                        <p>Choux pastry filled with vanilla cream and topped with chocolate icing.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Chocolate Éclair" data-price="160">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chocolates -->
                <div class="menu-card" data-category="chocolates">
                    <div class="menu-card-img">
                        <img src="./images/assortment-colorful-chocolate-truffles-arranged-metal-tray-dark-wooden-surface.jpg" alt="Artisan Truffles Box">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Artisan Truffles Box</h3>
                            <span class="price">₹450</span>
                        </div>
                        <p>A handpicked selection of our finest dark, milk, and white chocolate truffles.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Artisan Truffles Box" data-price="450">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-card" data-category="chocolates">
                    <div class="menu-card-img">
                        <img src="https://images.unsplash.com/photo-1604514813560-1e4f5726db65?w=600&h=400&fit=crop" alt="Dark Chocolate Bar">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>70% Dark Chocolate Bar</h3>
                            <span class="price">₹300</span>
                        </div>
                        <p>Premium single-origin dark chocolate bar with roasted almonds and sea salt.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="70% Dark Chocolate Bar" data-price="300">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-card" data-category="chocolates">
                    <div class="menu-card-img">
                        <img src="https://images.unsplash.com/photo-1582293041079-7814c2f12063?w=600&h=400&fit=crop" alt="Hazelnut Praline">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Hazelnut Praline Box</h3>
                            <span class="price">₹480</span>
                        </div>
                        <p>Delicate chocolate shells filled with smooth, roasted hazelnut praline paste.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Hazelnut Praline Box" data-price="480">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- International Specials -->
                <div class="menu-card" data-category="international">
                    <div class="menu-card-img">
                        <img src="https://images.unsplash.com/photo-1569864358642-9d1684040f43?w=600&h=400&fit=crop" alt="Macarons">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>French Macarons Box</h3>
                            <span class="price">₹500</span>
                        </div>
                        <p>Colorful and delicate meringue-based cookies with assorted creamy fillings.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="French Macarons Box" data-price="500">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-card" data-category="international">
                    <div class="menu-card-img">
                        <img src="./images/tasty-homemade-tiramisu-cake.jpg" alt="Tiramisu">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Italian Tiramisu</h3>
                            <span class="price">₹350</span>
                        </div>
                        <p>Classic Italian dessert with layers of coffee-soaked ladyfingers and mascarpone cream.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Italian Tiramisu" data-price="350">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="menu-card" data-category="international">
                    <div class="menu-card-img">
                        <img src="./images/pakhlava-black-tea-served-armudu-glass.jpg" alt="Baklava">
                    </div>
                    <div class="menu-card-content">
                        <div class="menu-card-header">
                            <h3>Turkish Baklava</h3>
                            <span class="price">₹400</span>
                        </div>
                        <p>Rich, sweet dessert pastry made of layers of filo filled with chopped nuts and sweetened with honey.</p>
                        <div class="action-row">
                            <button class="add-to-cart-btn" data-item="Turkish Baklava" data-price="400">
                                Order Now
                            </button>
                            <div class="quantity-control">
                                <button class="qty-btn minus">-</button>
                                <input type="number" class="qty-input" value="1" min="1" readonly>
                                <button class="qty-btn plus">+</button>
                            </div>
                        </div>
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

    <!-- Modal for Add to Cart -->
    <div id="addToCartModal" class="modal">
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <h2>Added to Order</h2>
            <p id="modalMessage"></p>
            <button class="modal-btn">Continue Shopping</button>
        </div>
    </div>

    <script src="script.js"></script>
    <div id="toast-container"></div>
</body>
</html>

