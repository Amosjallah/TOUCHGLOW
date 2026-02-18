    <footer id="contact">
        <div class="footer-grid">
            <div class="footer-col">
                <h3 class="brand-name" style="color: white; margin-bottom: 20px;">Touchée Glow</h3>
                <p>Elegance in every drop. Your journey to radiant skin starts here.</p>
            </div>
            <div class="footer-col">
                <h4>Shop</h4>
                <ul>
                    <li><a href="shop.php">All Products</a></li>
                    <li><a href="shop.php?category=new">New Arrivals</a></li>
                    <li><a href="shop.php?category=best">Best Sellers</a></li>
                    <li><a href="shop.php?category=sets">Gift Sets</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Returns & Exchanges</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Newsletter</h4>
                <p>Join our community for exclusive skincare tips and early access.</p>
                <div style="margin-top: 20px; display: flex;">
                    <input type="email" placeholder="Email Address" style="padding: 10px; border: none; flex: 1;">
                    <button style="background: var(--primary); border: none; color: white; padding: 0 15px; cursor: pointer;">Join</button>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2026 Touchée Glow Skincare. All Rights Reserved.
        </div>
    </footer>

    <!-- Cart Sidebar -->
    <div class="overlay" id="overlay"></div>
    <div class="cart-sidebar" id="cart-sidebar">
        <div class="cart-header">
            <h3>Your Cart</h3>
            <i data-lucide="x" id="cart-close" style="cursor: pointer;"></i>
        </div>
        <div class="cart-items" id="cart-items-container">
            <!-- Items will be injected by JS -->
            <p style="text-align: center; color: #888; margin-top: 50px;">Your cart is empty.</p>
        </div>
        <div class="cart-footer">
            <div class="cart-total">
                <span>Total</span>
                <span id="cart-total-amount">$0.00</span>
            </div>
            <button class="btn-checkout">Checkout Now</button>
        </div>
    </div>

    <script src="app.js"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>
