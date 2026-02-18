<?php 
$pageTitle = "Home";
include 'includes/header.php'; 
?>

    <!-- Hero Slider -->
    <section class="hero-slider" id="home">
        <div class="slider-container">
            <!-- Slide 1: Body Care -->
            <div class="slide active" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/body_milk.jpg');">
                <div class="hero-content">
                    <h1>Pure Resilience</h1>
                    <p>Unlock your skin's natural radiance with our extreme whitening formulations.</p>
                    <a href="shop.php" class="cta-button">Shop Body Care</a>
                </div>
            </div>
            
            <!-- Slide 2: Face Care -->
            <div class="slide" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/luxury_glow_serum_v2.jpg');">
                <div class="hero-content">
                    <h1>The Glow Ritual</h1>
                    <p>Premium facial serums designed for that effortless, glass-skin finish.</p>
                    <a href="shop.php" class="cta-button">Discover Serums</a>
                </div>
            </div>
            
            <!-- Slide 3: Men's Care -->
            <div class="slide" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/noir_kyng_butter.jpg');">
                <div class="hero-content">
                    <h1>Noir Kyng Premium</h1>
                    <p>Meticulously crafted grooming essentials for the modern man of elegance.</p>
                    <a href="shop.php" class="cta-button">Explore Men's Care</a>
                </div>
            </div>
        </div>
        
        <div class="slider-controls">
            <button class="slider-dot active" data-index="0"></button>
            <button class="slider-dot" data-index="1"></button>
            <button class="slider-dot" data-index="2"></button>
        </div>
    </section>

    <section class="section" id="shop">
        <div class="section-header">
            <span style="color: var(--primary); text-transform: uppercase; letter-spacing: 5px; font-weight: 700;">Featured Collection</span>
            <h2>Our Signature Products</h2>
        </div>

        <div class="category-filters">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="body">Body Care</button>
            <button class="filter-btn" data-filter="face">Face Care</button>
            <button class="filter-btn" data-filter="soaps">Soaps</button>
            <button class="filter-btn" data-filter="men">Men's Care</button>
            <button class="filter-btn" data-filter="hair">Hair Care</button>
        </div>

        <div class="product-grid">
            <!-- Product 1: Half-Cast Extreme White Body Milk -->
            <div class="product-card" data-category="body">
                <div class="product-image">
                    <img src="assets/body_milk.jpg" alt="Half-Cast Extreme White Body Milk">
                </div>
                <div class="product-info">
                    <h3>Half-Cast Extreme White Body Milk</h3>
                    <p class="product-price">$45.00</p>
                    <button class="add-to-cart" data-id="1" data-name="Half-Cast Extreme White Body Milk" data-price="45">Add to Cart</button>
                </div>
            </div>

            <!-- Product 2: Eczema & Psoriasis Body Butter -->
            <div class="product-card" data-category="body">
                <div class="product-image">
                    <img src="assets/body_butter.jpg" alt="Eczema & Psoriasis Body Butter">
                </div>
                <div class="product-info">
                    <h3>Eczema & Psoriasis Body Butter</h3>
                    <p class="product-price">$38.00</p>
                    <button class="add-to-cart" data-id="2" data-name="Eczema & Psoriasis Body Butter" data-price="38">Add to Cart</button>
                </div>
            </div>
            
            <!-- See more button for Shop Page -->
            <div style="grid-column: 1/-1; text-align: center; margin-top: 40px;">
                <a href="shop.php" class="btn-primary">View All Products</a>
            </div>
        </div>
    </section>

    <section class="about-section" id="about">
        <div class="about-image">
            <img src="assets/body_milk.jpg" alt="Skincare aesthetic">
        </div>
        <div class="about-content">
            <span style="color: var(--primary); text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">Since 2024</span>
            <h2 style="font-size: 3rem; margin: 20px 0; font-family: 'Playfair Display', serif;">Pure. Gentle. Radiant.</h2>
            <p>At Touchée Glow, we believe skincare is a ritual of self-love. Our formulations are meticulously crafted using the finest botanical extracts and cutting-edge dermatological research to deliver visible results without compromising on skin health.</p>
            <a href="about.php" class="btn-primary" style="margin-top: 30px;">Read Our Story</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
