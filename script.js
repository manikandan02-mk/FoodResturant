// === FUNCTION-BASED REFACTORING ===

// === NAVIGATION FUNCTIONALITY ===
function initNavigation() {
    let hamburger = document.querySelector(".hamburger");
    let navMenu = document.querySelector(".nav-menu");
    let navLinks = document.querySelectorAll(".nav-link");
    let dropdown = document.querySelector(".dropdown");
    
    function toggleMenu() {
        if (hamburger && navMenu) {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }
    }
    
    function closeMenu() {
        if (hamburger && navMenu) {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }
        if (dropdown) {
            dropdown.classList.remove("active");
        }
    }

    if (hamburger) {
        hamburger.addEventListener("click", toggleMenu);
    }

    for (let i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener("click", closeMenu);
    }

    if (dropdown) {
        let dropdownLink = dropdown.querySelector(".nav-link");
        if (dropdownLink) {
            dropdownLink.addEventListener("click", function(e) {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    dropdown.classList.toggle("active");
                }
            });
        }
    }

    function setActiveLink() {
        let pathParts = window.location.pathname.split("/");
        let currentPage = pathParts[pathParts.length - 1];
        if (currentPage === "") {
            currentPage = "index.html";
        }
        
        for (let i = 0; i < navLinks.length; i++) {
            navLinks[i].classList.remove("active");
            if (navLinks[i].getAttribute("href") === currentPage) {
                navLinks[i].classList.add("active");
            }
        }
    }
    
    setActiveLink();
    
    window.addEventListener("resize", function() {
        if (window.innerWidth > 768) {
            closeMenu();
        }
    });
}

// === SEARCH FUNCTIONALITY ===
function initSearch() {
    let searchInput = document.querySelector(".search-input");
    let searchBtn = document.querySelector(".search-btn");

    function handleSearch() {
        if (searchInput) {
            let query = searchInput.value.trim();
            if (query !== "") {
                console.log("Searching for:", query);
                window.location.href = "menu.html?search=" + encodeURIComponent(query);
            }
        }
    }

    if (searchBtn) {
        searchBtn.addEventListener("click", handleSearch);
    }

    if (searchInput) {
        searchInput.addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                handleSearch();
            }
        });
    }
}

// === CAROUSEL FUNCTIONALITY ===
function initCarousel() {
    let slides = document.querySelectorAll(".carousel-slide");
    let indicators = document.querySelectorAll(".indicator");
    let prevBtn = document.querySelector(".carousel-prev");
    let nextBtn = document.querySelector(".carousel-next");
    let currentSlide = 0;
    let autoPlayInterval = null;

    if (slides.length === 0) return;

    function showSlide(n) {
        for (let i = 0; i < slides.length; i++) {
            slides[i].classList.remove("active");
        }
        for (let i = 0; i < indicators.length; i++) {
            indicators[i].classList.remove("active");
        }

        slides[n].classList.add("active");
        if (indicators.length > n) {
            indicators[n].classList.add("active");
        }
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(function() {
            nextSlide();
        }, 5000);
    }

    function stopAutoPlay() {
        if (autoPlayInterval !== null) {
            clearInterval(autoPlayInterval);
        }
    }

    function nextSlide() {
        stopAutoPlay();
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
        startAutoPlay();
    }

    function prevSlide() {
        stopAutoPlay();
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
        startAutoPlay();
    }

    function goToSlide(n) {
        stopAutoPlay();
        currentSlide = n;
        showSlide(currentSlide);
        startAutoPlay();
    }

    if (prevBtn) {
        prevBtn.addEventListener("click", prevSlide);
    }
    if (nextBtn) {
        nextBtn.addEventListener("click", nextSlide);
    }

    for (let i = 0; i < indicators.length; i++) {
        let iCopy = i;
        indicators[i].addEventListener("click", function() {
            goToSlide(iCopy);
        });
    }

    startAutoPlay();

    document.addEventListener("visibilitychange", function() {
        if (document.hidden) {
            stopAutoPlay();
        } else {
            startAutoPlay();
        }
    });
}

// === FORM VALIDATION ===
function initFormValidator() {
    let form = document.querySelector("#contactForm");
    if (!form) return;

    function validateField(field) {
        let value = field.value.trim();
        let errorElement = document.querySelector("#" + field.id + "Error");
        let error = "";

        if (field.hasAttribute("required") && value === "") {
            error = "This field is required";
        } else if (field.type === "email" && value !== "") {
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                error = "Please enter a valid email address";
            }
        } else if (field.id === "phone" && value !== "") {
            let phoneRegex = /^\d{10}$/;
            if (!phoneRegex.test(value)) {
                error = "Please enter a valid phone number";
            }
        } else if (field.id === "name" && value !== "") {
            if (value.length < 2) {
                error = "Name must be at least 2 characters";
            }
        } else if (field.id === "message" && value !== "") {
            if (value.length < 10) {
                error = "Message must be at least 10 characters";
            }
        }

        if (error !== "") {
            field.classList.add("error");
            if (errorElement) {
                errorElement.textContent = error;
            }
            return false;
        } else {
            field.classList.remove("error");
            if (errorElement) {
                errorElement.textContent = "";
            }
            return true;
        }
    }

    function clearError(field) {
        let errorElement = document.querySelector("#" + field.id + "Error");
        if (field.classList.contains("error")) {
            field.classList.remove("error");
            if (errorElement) {
                errorElement.textContent = "";
            }
        }
    }

    function submitForm() {
        let modal = document.querySelector("#successModal");
        if (modal) {
            modal.classList.add("active");
            form.reset();

            let closeBtn = modal.querySelector(".modal-close");
            let btn = modal.querySelector(".modal-btn");

            function closeModal() {
                modal.classList.remove("active");
            }

            if (closeBtn) closeBtn.addEventListener("click", closeModal);
            if (btn) btn.addEventListener("click", closeModal);

            setTimeout(closeModal, 5000);
        }
    }

    let inputs = form.querySelectorAll("input, textarea, select");
    for (let i = 0; i < inputs.length; i++) {
        let input = inputs[i];
        input.addEventListener("blur", function() {
            validateField(input);
        });
        input.addEventListener("input", function() {
            clearError(input);
        });
    }

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        let reqInputs = form.querySelectorAll("input[required], textarea[required], select[required]");
        let isValid = true;

        for (let i = 0; i < reqInputs.length; i++) {
            if (!validateField(reqInputs[i])) {
                isValid = false;
            }
        }

        if (isValid) {
            submitForm();
        }
    });
}

// === MODAL FUNCTIONALITY ===
function initModal() {
    let modals = document.querySelectorAll(".modal");
    
    for (let i = 0; i < modals.length; i++) {
        let modal = modals[i];
        let closeBtn = modal.querySelector(".modal-close");
        let btn = modal.querySelector(".modal-btn");

        if (closeBtn) {
            closeBtn.addEventListener("click", function() {
                modal.classList.remove("active");
            });
        }

        if (btn && btn.textContent.indexOf("Continue") !== -1) {
            btn.addEventListener("click", function() {
                modal.classList.remove("active");
            });
        }

        modal.addEventListener("click", function(e) {
            if (e.target === modal) {
                modal.classList.remove("active");
            }
        });
    }

    let addToCartButtons = document.querySelectorAll(".add-to-cart-btn");
    for (let i = 0; i < addToCartButtons.length; i++) {
        let button = addToCartButtons[i];
        button.addEventListener("click", function(e) {
            e.preventDefault();
            let itemName = button.getAttribute("data-item");
            let modal = document.querySelector("#addToCartModal");

            if (modal) {
                let messageElement = document.querySelector("#modalMessage");
                if (messageElement) {
                    messageElement.textContent = itemName + " has been added to your cart!";
                }
                modal.classList.add("active");

                setTimeout(function() {
                    modal.classList.remove("active");
                }, 3000);
            }
        });
    }
}

// === ACCORDION FUNCTIONALITY ===
function initAccordion() {
    let accordions = document.querySelectorAll(".accordion-header");
    for (let i = 0; i < accordions.length; i++) {
        let header = accordions[i];
        header.addEventListener("click", function() {
            let activeHeader = document.querySelector(".accordion-header.active");
            if (activeHeader && activeHeader !== header) {
                activeHeader.classList.remove("active");
                activeHeader.nextElementSibling.style.maxHeight = null;
            }
            
            header.classList.toggle("active");
            let content = header.nextElementSibling;
            if (header.classList.contains("active")) {
                content.style.maxHeight = content.scrollHeight + "px";
            } else {
                content.style.maxHeight = null;
            }
        });
    }
}

// === MENU FILTER FUNCTIONALITY ===
function initMenuFilter() {
    let categoryBtns = document.querySelectorAll(".category-btn");
    let menuCards = document.querySelectorAll(".menu-card");

    if (categoryBtns.length === 0 || menuCards.length === 0) return;

    for (let i = 0; i < categoryBtns.length; i++) {
        let btn = categoryBtns[i];
        btn.addEventListener("click", function() {
            // Remove active class from all
            for (let j = 0; j < categoryBtns.length; j++) {
                categoryBtns[j].classList.remove("active");
            }
            // Add active class to clicked
            btn.classList.add("active");

            let filterValue = btn.getAttribute("data-filter");

            // Filter items
            for (let k = 0; k < menuCards.length; k++) {
                let card = menuCards[k];
                if (filterValue === "all") {
                    card.style.display = "flex";
                } else {
                    if (card.getAttribute("data-category") === filterValue) {
                        card.style.display = "flex";
                    } else {
                        card.style.display = "none";
                    }
                }
            }
        });
    }

    // Handle URL parameters for immediate filtering
    let urlParams = new URLSearchParams(window.location.search);
    let categoryParam = urlParams.get('category');
    let searchParam = urlParams.get('search');

    if (categoryParam) {
        let targetBtn = document.querySelector(".category-btn[data-filter='" + categoryParam + "']");
        if (targetBtn) {
            targetBtn.click();
        }
    } else if (searchParam) {
        for (let j = 0; j < categoryBtns.length; j++) {
            categoryBtns[j].classList.remove("active");
        }
        
        let searchTerm = searchParam.toLowerCase();
        
        for (let k = 0; k < menuCards.length; k++) {
            let card = menuCards[k];
            let title = card.querySelector("h3").textContent.toLowerCase();
            let desc = card.querySelector("p").textContent.toLowerCase();
            
            if (title.indexOf(searchTerm) !== -1 || desc.indexOf(searchTerm) !== -1) {
                card.style.display = "flex";
            } else {
                card.style.display = "none";
            }
        }
    }
}

// ==== INITIALIZATION ===
document.addEventListener("DOMContentLoaded", function() {
    initNavigation();
    initSearch();
    initCarousel();
    initFormValidator();
    initModal();
    initAccordion();
    initMenuFilter();
});
