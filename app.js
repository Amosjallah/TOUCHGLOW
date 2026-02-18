// Cart State
let cart = JSON.parse(localStorage.getItem('touchglow_cart')) || [];

// Global Product Array for Search
const PRODUCTS = [
    { id: "1", name: "Half-Cast Extreme White Body Milk", price: 45.00, category: "body", img: "assets/body_milk.jpg" },
    { id: "2", name: "Eczema & Psoriasis Body Butter", price: 38.00, category: "body", img: "assets/body_butter.jpg" },
    { id: "3", name: "Half-Cast Face Milk", price: 32.00, category: "face", img: "assets/face_milk.jpg" },
    { id: "4", name: "Whitening Body Scrub", price: 28.00, category: "body", img: "assets/body_scrub.jpg" },
    { id: "5", name: "Customized Luxury Snow White Soap", price: 25.00, category: "soaps", img: "assets/snow_white_soap_v2.jpg" },
    { id: "6", name: "Half-Cast Oil", price: 30.00, category: "body", img: "assets/half_cast_oil.jpg" },
    { id: "7", name: "Brighten soap", price: 15.00, category: "soaps", img: "assets/brighten_soap_v2.jpg" },
    { id: "8", name: "Vitamin C Facial Serum", price: 35.00, category: "face", img: "assets/vitamin_c_serum.jpg" },
    { id: "9", name: "Rich Aunty Women Body Butter", price: 40.00, category: "body", img: "assets/rich_aunty_butter_v2.jpg" },
    { id: "10", name: "Luxury Glow Serum", price: 48.00, category: "face", img: "assets/luxury_glow_serum_v2.jpg" },
    { id: "11", name: "5D Half-Cast Soap", price: 20.00, category: "soaps", img: "assets/5d_half_cast_soap.jpg" },
    { id: "12", name: "Customised Luxury White Body Milk", price: 55.00, category: "body", img: "assets/luxury_white_milk_v2.jpg" },
    { id: "13", name: "Brightening Herbal Soap", price: 18.00, category: "soaps", img: "assets/brightening_herbal_soap.jpg" },
    { id: "14", name: "Beard Care Set", price: 45.00, category: "men", img: "assets/beard_care.jpg" },
    { id: "15", name: "Caramel Body Milk", price: 45.00, category: "body", img: "assets/caramel_body_milk.jpg" },
    { id: "16", name: "Body Polish Scrub", price: 38.00, category: "body", img: "assets/body_polish_scrub.jpg" },
    { id: "17", name: "Dark Knuckles Cream", price: 25.00, category: "body", img: "assets/dark_knuckles_cream.jpg" },
    { id: "18", name: "Baby Face Soap", price: 12.00, category: "soaps", img: "assets/baby_face_soap.jpg" },
    { id: "19", name: "Flawless Face Cleanser", price: 28.00, category: "face", img: "assets/flawless_face_cleanser.jpg" },
    { id: "20", name: "Men Body Oil", price: 35.00, category: "men", img: "assets/men_body_oil.jpg" },
    { id: "21", name: "Noir Kyng Men Body Butter", price: 42.00, category: "men", img: "assets/noir_kyng_butter.jpg" },
    { id: "22", name: "Turmeric, Koji Acid, Lemon Soap Bar", price: 20.00, category: "soaps", img: "assets/turmeric_soap_bar.jpg" },
    { id: "23", name: "Hair Growth Oil", price: 48.00, category: "hair", img: "assets/hair_growth_oil.jpg" }
];

// DOM Elements
const cartCount = document.querySelector('.cart-count');
const nav = document.getElementById('main-nav');
const cartSidebar = document.getElementById('cart-sidebar');
const cartToggle = document.getElementById('cart-toggle');
const cartClose = document.getElementById('cart-close');
const overlay = document.getElementById('overlay');
const cartItemsContainer = document.getElementById('cart-items-container');
const cartTotalAmount = document.getElementById('cart-total-amount');
const filterBtns = document.querySelectorAll('.filter-btn');
const productCards = document.querySelectorAll('.product-card');

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    updateCartUI();

    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });

    // Cart Sidebar Toggle
    cartToggle.addEventListener('click', () => {
        cartSidebar.classList.add('open');
        overlay.classList.add('open');
    });

    cartClose.addEventListener('click', () => {
        cartSidebar.classList.remove('open');
        overlay.classList.remove('open');
    });

    overlay.addEventListener('click', () => {
        cartSidebar.classList.remove('open');
        overlay.classList.remove('open');
    });

    // Category Filtering
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            productCards.forEach(card => {
                const category = card.dataset.category;
                if (filter === 'all' || category === filter) {
                    card.classList.remove('hidden');
                    // Trigger animation
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });

    // Hero Slider Logic
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');
    let currentSlide = 0;
    const slideInterval = 5000; // 5 seconds

    function showSlide(index) {
        if (!slides.length) return;
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentSlide = index;
    }

    function nextSlide() {
        if (!slides.length) return;
        let index = (currentSlide + 1) % slides.length;
        showSlide(index);
    }

    // Auto Advance
    let autoSlide = setInterval(nextSlide, slideInterval);

    // Manual Controls
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            clearInterval(autoSlide);
            showSlide(index);
            autoSlide = setInterval(nextSlide, slideInterval);
        });
    });

    // Add to Cart Buttons
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', (e) => {
            const product = {
                id: e.target.dataset.id,
                name: e.target.dataset.name,
                price: parseFloat(e.target.dataset.price),
                quantity: 1
            };
            addToCart(product);

            // Basic feedback
            const originalText = e.target.innerText;
            e.target.innerText = 'Added!';
            e.target.style.background = '#D4A373';
            setTimeout(() => {
                e.target.innerText = originalText;
                e.target.style.background = '#1A1A1A';
            }, 1000);

            // Open sidebar to show addition
            setTimeout(() => {
                cartSidebar.classList.add('open');
                overlay.classList.add('open');
            }, 500);
        });
    });

    // Search Overlay Logic
    const searchTrigger = document.getElementById('search-trigger');
    const searchOverlay = document.getElementById('search-overlay');
    const searchClose = document.getElementById('search-close');
    const searchInput = document.getElementById('search-input');

    if (searchTrigger) {
        searchTrigger.addEventListener('click', () => {
            searchOverlay.classList.add('open');
            searchTrigger.classList.add('active');
            setTimeout(() => searchInput.focus(), 300);
        });
    }

    if (searchClose) {
        searchClose.addEventListener('click', () => {
            searchOverlay.classList.remove('open');
            searchTrigger.classList.remove('active');
            searchInput.value = '';
            document.getElementById('search-results').innerHTML = '';
        });
    }

    // Live Search Execution
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            const resultsContainer = document.getElementById('search-results');

            if (term.length < 2) {
                resultsContainer.innerHTML = '';
                return;
            }

            const matches = PRODUCTS.filter(p =>
                p.name.toLowerCase().includes(term) ||
                p.category.toLowerCase().includes(term)
            );

            resultsContainer.innerHTML = matches.map(p => `
                <div class="search-result-item" onclick="location.href='shop.php'">
                    <img src="${p.img}" alt="${p.name}">
                    <h4>${p.name}</h4>
                    <p>$${p.price.toFixed(2)}</p>
                </div>
            `).join('');

            if (matches.length === 0) {
                resultsContainer.innerHTML = '<p style="grid-column: 1/-1; margin-top: 20px;">No products found matching your search.</p>';
            }
        });
    }

    // Suggestion Term Click
    document.querySelectorAll('.suggest-term').forEach(span => {
        span.addEventListener('click', () => {
            searchInput.value = span.innerText;
            searchInput.dispatchEvent(new Event('input'));
        });
    });

    // Account Modal Logic
    const accountTrigger = document.getElementById('account-trigger');
    const accountOverlay = document.getElementById('account-overlay');
    const accountClose = document.getElementById('account-close');

    if (accountTrigger) {
        accountTrigger.addEventListener('click', () => {
            accountOverlay.classList.add('open');
            accountTrigger.classList.add('active');
        });
    }

    if (accountClose) {
        accountClose.addEventListener('click', () => {
            accountOverlay.classList.remove('open');
            accountTrigger.classList.remove('active');
        });
    }

    // Close overlays on Esc key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            searchOverlay.classList.remove('open');
            accountOverlay.classList.remove('open');
            searchTrigger.classList.remove('active');
            accountTrigger.classList.remove('active');
            if (cartSidebar) cartSidebar.classList.remove('open');
            if (overlay) overlay.classList.remove('open');
        }
    });

    // Initialize Icons
    lucide.createIcons();
});

function addToCart(product) {
    const existing = cart.find(item => item.id === product.id);
    if (existing) {
        existing.quantity += 1;
    } else {
        cart.push(product);
    }
    saveCart();
    updateCartUI();

    // Add temporary animation to cart icon
    const cartToggle = document.getElementById('cart-toggle');
    if (cartToggle) {
        cartToggle.classList.add('bump');
        setTimeout(() => cartToggle.classList.remove('bump'), 300);
    }
}

function saveCart() {
    localStorage.setItem('touchglow_cart', JSON.stringify(cart));
}

function updateCartUI() {
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    const totalPrice = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);

    if (cartCount) {
        cartCount.innerText = totalItems;
        // Only pulse if there are items
        if (totalItems > 0) {
            cartCount.style.display = 'flex';
            cartCount.style.animation = 'pulseBadge 2s infinite';
        } else {
            cartCount.style.display = 'none';
        }
    }

    if (cartTotalAmount) {
        cartTotalAmount.innerText = `$${totalPrice.toFixed(2)}`;
    }

    if (cartItemsContainer) {
        if (cart.length === 0) {
            cartItemsContainer.innerHTML = '<p style="text-align: center; color: #888; margin-top: 50px;">Your cart is empty.</p>';
        } else {
            cartItemsContainer.innerHTML = cart.map(item => `
                <div class="cart-item">
                    <div style="width: 60px; height: 60px; background: #eee;"></div>
                    <div class="cart-item-info">
                        <h4>${item.name}</h4>
                        <p style="color: #666; font-size: 0.9rem;">${item.quantity} x $${item.price.toFixed(2)}</p>
                    </div>
                    <div style="margin-left: auto; cursor: pointer;" onclick="removeFromCart('${item.id}')">
                        <i data-lucide="trash-2" style="width: 18px; color: #ff6b6b;"></i>
                    </div>
                </div>
            `).join('');
            lucide.createIcons();
        }
    }
}

window.removeFromCart = function (productId) {
    cart = cart.filter(item => item.id !== productId);
    saveCart();
    updateCartUI();
};

// Simple Intersection Observer for Fade-In
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

document.querySelectorAll('.product-card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(30px)';
    card.style.transition = 'all 0.6s ease-out';
    observer.observe(card);
});
