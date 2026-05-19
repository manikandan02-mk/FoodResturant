<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Heavenly Bites</title>
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
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="franchise.php" class="nav-link">Franchise</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link active">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link"><i class="fas fa-user" style="font-size: 1.1rem;"></i></a>
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

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-header">
                <h1>Get In Touch</h1>
                <p>We'd love to hear from you. Reach out for custom cakes, sweet orders, or any inquiries.</p>
            </div>

            <div class="contact-content">
                <div class="contact-infos-container">
                    <div class="contact-info">
                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="info-details">
                                <h3>Address</h3>
                                <p>12/A, Foodie Lane<br>T. Nagar, Chennai - 600017<br>Tamil Nadu, India</p>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-phone"></i></div>
                            <div class="info-details">
                                <h3>Phone</h3>
                                <p>+91 98765 43210</p>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-envelope"></i></div>
                            <div class="info-details">
                                <h3>Email</h3>
                                <p>info@HeavenlyBites.com<br>orders@HeavenlyBites.com</p>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-clock"></i></div>
                            <div class="info-details">
                                <h3>Hours</h3>
                                <p>Mon - Thu: 10am - 10pm<br>Fri - Sun: 10am - 11pm</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="faq-section">
                        <h2>Frequently Asked Questions</h2>
                        <div class="accordion-container">
                            <div class="accordion-item">
                                <button class="accordion-header">What are your timings? <i class="fas fa-chevron-down indicator-icon"></i></button>
                                <div class="accordion-content">
                                    <p>We are open every day from 8:00 AM to 10:00 PM for all your sweet cravings. Special holiday hours may apply.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">Do you offer delivery? <i class="fas fa-chevron-down indicator-icon"></i></button>
                                <div class="accordion-content">
                                    <p>Yes, we offer home delivery within a 5-mile radius of our store. You can order online through our website or delivery partners.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">How can I place a custom cake order? <i class="fas fa-chevron-down indicator-icon"></i></button>
                                <div class="accordion-content">
                                    <p>You can place a custom cake order by filling out our contact form with the subject "Custom Cake Order," or by calling us directly.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">Do you host private events or parties? <i class="fas fa-chevron-down indicator-icon"></i></button>
                                <div class="accordion-content">
                                    <p>Yes, we offer catering for events, weddings, and corporate meetings. We have customized dessert tables and pastry platters available.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">Do you have dietary options? <i class="fas fa-chevron-down indicator-icon"></i></button>
                                <div class="accordion-content">
                                    <p>Yes, we have a selection of gluten-free, vegan, and sugar-free desserts available daily.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <form id="contactForm" class="contact-form" novalidate>
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                            <span class="error-message" id="nameError"></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                            <span class="error-message" id="emailError"></span>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                            <span class="error-message" id="phoneError"></span>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="custom-cake">Custom Cake Order</option>
                                <option value="catering">Dessert Catering</option>
                                <option value="feedback">Feedback</option>
                                <option value="complaint">Complaint</option>
                                <option value="other">Other</option>
                            </select>
                            <span class="error-message" id="subjectError"></span>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                            <span class="error-message" id="messageError"></span>
                        </div>

                        <div class="form-group checkbox">
                            <input type="checkbox" id="subscribe" name="subscribe">
                            <label for="subscribe">Subscribe to our newsletter for special offers</label>
                        </div>

                        <button type="submit" class="submit-btn">Send Message</button>
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
                    <p>Email: info@HeavenlyBites.com</p>
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

    <!-- Success Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <div class="modal-icon success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2>Message Sent Successfully!</h2>
            <p>Thank you for reaching out. We'll get back to you soon.</p>
            <button class="modal-btn">Close</button>
        </div>
    </div>

    <script src="./script.js"></script>


</body>
</html>

