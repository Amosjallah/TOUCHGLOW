<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . " | Touchée Glow" : "Touchée Glow | Premium Skincare Experience"; ?></title>
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

    <nav id="main-nav">
        <div class="logo-container">
            <a href="index.php" style="text-decoration: none;">
                <img src="assets/logo.png" alt="Touchée Glow" class="logo-image">
            </a>
        </div>
        
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="about.php">Our Story</a>
            <a href="contact.php">Contact</a>
        </div>

        <div class="nav-actions">
            <i data-lucide="search" id="search-trigger" style="cursor: pointer;"></i>
            <i data-lucide="user" id="account-trigger" style="cursor: pointer;"></i>
            <div class="cart-icon" id="cart-toggle">
                <i data-lucide="shopping-bag"></i>
                <span class="cart-count">0</span>
            </div>
        </div>
    </nav>

    <!-- Search Overlay -->
    <div class="search-overlay" id="search-overlay">
        <div class="search-container">
            <div class="search-header">
                <span class="brand-name">Touchée Glow</span>
                <i data-lucide="x" id="search-close" class="close-icon"></i>
            </div>
            <div class="search-body">
                <div class="search-input-group">
                    <input type="text" id="search-input" placeholder="What are you looking for?" autofocus>
                    <i data-lucide="search"></i>
                </div>
                <div class="search-suggestions" id="search-suggestions">
                    <p>Trending: <span class="suggest-term">Body Milk</span>, <span class="suggest-term">Luxury Glow</span>, <span class="suggest-term">Men's Butter</span></p>
                </div>
                <div class="search-results-container" id="search-results">
                    <!-- Results will be injected here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Account Overlay/Modal -->
    <div class="account-overlay" id="account-overlay">
        <div class="account-modal">
            <i data-lucide="x" id="account-close" class="close-icon"></i>
            <div class="account-content">
                <h3 class="brand-name">Welcome Back</h3>
                <p>Sign in to access your glowing rewards and orders.</p>
                
                <form class="account-form">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="••••••••">
                    </div>
                    <button type="submit" class="btn-primary">Sign In</button>
                </form>
                
                <div class="account-footer">
                    <p>New to Touchée Glow? <a href="#">Create Account</a></p>
                    <a href="#" class="forgot-link">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>
