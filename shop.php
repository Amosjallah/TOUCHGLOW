<?php 
$pageTitle = "Shop Our Collection";
include 'includes/header.php'; 
?>

    <section class="section" style="padding-top: 150px;">
        <div class="section-header">
            <span style="color: var(--primary); text-transform: uppercase; letter-spacing: 5px; font-weight: 700;">Full Catalog</span>
            <h2>Elegance in Every Drop</h2>
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

            <!-- Product 3: Half-Cast Face Milk -->
            <div class="product-card" data-category="face">
                <div class="product-image">
                    <img src="assets/face_milk.jpg" alt="Half-Cast Face Milk">
                </div>
                <div class="product-info">
                    <h3>Half-Cast Face Milk</h3>
                    <p class="product-price">$32.00</p>
                    <button class="add-to-cart" data-id="3" data-name="Half-Cast Face Milk" data-price="32">Add to Cart</button>
                </div>
            </div>

            <!-- Product 4: Whitening Body Scrub -->
            <div class="product-card" data-category="body">
                <div class="product-image">
                    <img src="assets/body_scrub.jpg" alt="Whitening Body Scrub">
                </div>
                <div class="product-info">
                    <h3>Whitening Body Scrub</h3>
                    <p class="product-price">$28.00</p>
                    <button class="add-to-cart" data-id="4" data-name="Whitening Body Scrub" data-price="28">Add to Cart</button>
                </div>
            </div>

            <!-- Product 5: Customized Luxury Snow White Soap -->
            <div class="product-card" data-category="soaps">
                <div class="product-image">
                    <img src="assets/snow_white_soap_v2.jpg" alt="Customized Luxury Snow White Soap">
                </div>
                <div class="product-info">
                    <h3>Customized Luxury Snow White Soap</h3>
                    <p class="product-price">$25.00</p>
                    <button class="add-to-cart" data-id="5" data-name="Customized Luxury Snow White Soap" data-price="25">Add to Cart</button>
                </div>
            </div>

            <!-- Product 6: Half-Cast Oil -->
            <div class="product-card" data-category="body">
                <div class="product-image">
                    <img src="assets/half_cast_oil.jpg" alt="Half-Cast Oil">
                </div>
                <div class="product-info">
                    <h3>Half-Cast Oil</h3>
                    <p class="product-price">$30.00</p>
                    <button class="add-to-cart" data-id="6" data-name="Half-Cast Oil" data-price="30">Add to Cart</button>
                </div>
            </div>

            <!-- Product 7: Brighten soap -->
            <div class="product-card" data-category="soaps">
                <div class="product-image">
                    <img src="assets/brighten_soap_v2.jpg" alt="Brighten soap">
                </div>
                <div class="product-info">
                    <h3>Brighten soap</h3>
                    <p class="product-price">$15.00</p>
                    <button class="add-to-cart" data-id="7" data-name="Brighten soap" data-price="15">Add to Cart</button>
                </div>
            </div>

            <!-- Product 8: Vitamin C Facial Serum -->
            <div class="product-card" data-category="face">
                <div class="product-image">
                    <img src="assets/vitamin_c_serum.jpg" alt="Vitamin C Facial Serum">
                </div>
                <div class="product-info">
                    <h3>Vitamin C Facial Serum</h3>
                    <p class="product-price">$35.00</p>
                    <button class="add-to-cart" data-id="8" data-name="Vitamin C Facial Serum" data-price="35">Add to Cart</button>
                </div>
            </div>

            <!-- Product 9: Rich Aunty Women Body Butter -->
            <div class="product-card" data-category="body">
                <div class="product-image">
                    <img src="assets/rich_aunty_butter_v2.jpg" alt="Rich Aunty Women Body Butter">
                </div>
                <div class="product-info">
                    <h3>Rich Aunty Women Body Butter</h3>
                    <p class="product-price">$40.00</p>
                    <button class="add-to-cart" data-id="9" data-name="Rich Aunty Women Body Butter" data-price="40">Add to Cart</button>
                </div>
            </div>

            <!-- Product 10: Luxury Glow Serum -->
            <div class="product-card" data-category="face">
                <div class="product-image">
                    <img src="assets/luxury_glow_serum_v2.jpg" alt="Luxury Glow Serum">
                </div>
                <div class="product-info">
                    <h3>Luxury Glow Serum</h3>
                    <p class="product-price">$48.00</p>
                    <button class="add-to-cart" data-id="10" data-name="Luxury Glow Serum" data-price="48">Add to Cart</button>
                </div>
            </div>

            <!-- Product 11: 5D Half-Cast Soap -->
            <div class="product-card" data-category="soaps">
                <div class="product-image">
                    <img src="assets/5d_half_cast_soap.jpg" alt="5D Half-Cast Soap">
                </div>
                <div class="product-info">
                    <h3>5D Half-Cast Soap</h3>
                    <p class="product-price">$20.00</p>
                    <button class="add-to-cart" data-id="11" data-name="5D Half-Cast Soap" data-price="20">Add to Cart</button>
                </div>
            </div>

            <!-- Product 12: Customised Luxury White Body Milk -->
            <div class="product-card" data-category="body">
                <div class="product-image">
                    <img src="assets/luxury_white_milk_v2.jpg" alt="Customised Luxury White Body Milk">
                </div>
                <div class="product-info">
                    <h3>Customised Luxury White Body Milk</h3>
                    <p class="product-price">$55.00</p>
                    <button class="add-to-cart" data-id="12" data-name="Customised Luxury White Body Milk" data-price="55">Add to Cart</button>
                </div>
            </div>

            <!-- Product 13: Brightening Herbal Soap -->
            <div class="product-card" data-category="soaps">
                <div class="product-image">
                    <img src="assets/brightening_herbal_soap.jpg" alt="Brightening Herbal Soap">
                </div>
                <div class="product-info">
                    <h3>Brightening Herbal Soap</h3>
                    <p class="product-price">$18.00</p>
                    <button class="add-to-cart" data-id="13" data-name="Brightening Herbal Soap" data-price="18">Add to Cart</button>
                </div>
            </div>

            <!-- Product 14: Beard Care Set -->
            <div class="product-card" data-category="men">
                <div class="product-image">
                    <img src="assets/beard_care.jpg" alt="Beard Care Set">
                </div>
                <div class="product-info">
                    <h3>Beard Care Set</h3>
                    <p class="product-price">$45.00</p>
                    <button class="add-to-cart" data-id="14" data-name="Beard Care Set" data-price="45">Add to Cart</button>
                </div>
            </div>

            <!-- Product 15: Caramel Body Milk -->
            <div class="product-card" data-category="body">
                <div class="product-image">
                    <img src="assets/caramel_body_milk.jpg" alt="Caramel Body Milk">
                </div>
                <div class="product-info">
                    <h3>Caramel Body Milk</h3>
                    <p class="product-price">$45.00</p>
                    <button class="add-to-cart" data-id="15" data-name="Caramel Body Milk" data-price="45">Add to Cart</button>
                </div>
            </div>

            <!-- Product 16: Body Polish Scrub -->
            <div class="product-card" data-category="body">
                <div class="product-image">
                    <img src="assets/body_polish_scrub.jpg" alt="Body Polish Scrub">
                </div>
                <div class="product-info">
                    <h3>Body Polish Scrub</h3>
                    <p class="product-price">$38.00</p>
                    <button class="add-to-cart" data-id="16" data-name="Body Polish Scrub" data-price="38">Add to Cart</button>
                </div>
            </div>

            <!-- Product 17: Dark Knuckles Cream -->
            <div class="product-card" data-category="body">
                <div class="product-image">
                    <img src="assets/dark_knuckles_cream.jpg" alt="Dark Knuckles Cream">
                </div>
                <div class="product-info">
                    <h3>Dark Knuckles Cream</h3>
                    <p class="product-price">$25.00</p>
                    <button class="add-to-cart" data-id="17" data-name="Dark Knuckles Cream" data-price="25">Add to Cart</button>
                </div>
            </div>

            <!-- Product 18: Baby Face Soap -->
            <div class="product-card" data-category="soaps">
                <div class="product-image">
                    <img src="assets/baby_face_soap.jpg" alt="Baby Face Soap">
                </div>
                <div class="product-info">
                    <h3>Baby Face Soap</h3>
                    <p class="product-price">$12.00</p>
                    <button class="add-to-cart" data-id="18" data-name="Baby Face Soap" data-price="12">Add to Cart</button>
                </div>
            </div>

            <!-- Product 19: Flawless Face Cleanser -->
            <div class="product-card" data-category="face">
                <div class="product-image">
                    <img src="assets/flawless_face_cleanser.jpg" alt="Flawless Face Cleanser">
                </div>
                <div class="product-info">
                    <h3>Flawless Face Cleanser</h3>
                    <p class="product-price">$28.00</p>
                    <button class="add-to-cart" data-id="19" data-name="Flawless Face Cleanser" data-price="28">Add to Cart</button>
                </div>
            </div>

            <!-- Product 20: Men Body Oil -->
            <div class="product-card" data-category="men">
                <div class="product-image">
                    <img src="assets/men_body_oil.jpg" alt="Men Body Oil">
                </div>
                <div class="product-info">
                    <h3>Men Body Oil</h3>
                    <p class="product-price">$35.00</p>
                    <button class="add-to-cart" data-id="20" data-name="Men Body Oil" data-price="35">Add to Cart</button>
                </div>
            </div>

            <!-- Product 21: Noir Kyng Men Body Butter -->
            <div class="product-card" data-category="men">
                <div class="product-image">
                    <img src="assets/noir_kyng_butter.jpg" alt="Noir Kyng Men Body Butter">
                </div>
                <div class="product-info">
                    <h3>Noir Kyng Men Body Butter</h3>
                    <p class="product-price">$42.00</p>
                    <button class="add-to-cart" data-id="21" data-name="Noir Kyng Men Body Butter" data-price="42">Add to Cart</button>
                </div>
            </div>

            <!-- Product 22: Turmeric, Koji Acid, Lemon Soap Bar -->
            <div class="product-card" data-category="soaps">
                <div class="product-image">
                    <img src="assets/turmeric_soap_bar.jpg" alt="Turmeric, Koji Acid, Lemon Soap Bar">
                </div>
                <div class="product-info">
                    <h3>Turmeric, Koji Acid, Lemon Soap Bar</h3>
                    <p class="product-price">$20.00</p>
                    <button class="add-to-cart" data-id="22" data-name="Turmeric, Koji Acid, Lemon Soap Bar" data-price="20">Add to Cart</button>
                </div>
            </div>

            <!-- Product 23: Hair Growth Oil -->
            <div class="product-card" data-category="hair">
                <div class="product-image">
                    <img src="assets/hair_growth_oil.jpg" alt="Hair Growth Oil">
                </div>
                <div class="product-info">
                    <h3>Hair Growth Oil</h3>
                    <p class="product-price">$48.00</p>
                    <button class="add-to-cart" data-id="23" data-name="Hair Growth Oil" data-price="48">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
