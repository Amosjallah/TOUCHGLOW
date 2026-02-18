<?php 
$pageTitle = "Contact Us";
include 'includes/header.php'; 
?>

    <section class="section" style="padding-top: 150px; background-color: var(--white);">
        <div class="section-header">
            <span style="color: var(--primary); text-transform: uppercase; letter-spacing: 5px; font-weight: 700;">Get In Touch</span>
            <h2>We’re Here to Help Your Glow</h2>
        </div>

        <div style="max-width: 1000px; margin: 0 auto; display: grid; grid-template-columns: 1.2fr 1fr; gap: 80px;">
            <!-- Contact Form -->
            <div>
                <form style="display: flex; flex-direction: column; gap: 25px;">
                    <div style="display: flex; gap: 20px;">
                        <div style="flex: 1;">
                            <label style="display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Full Name</label>
                            <input type="text" placeholder="Your Name" style="width: 100%; padding: 15px; border: 1px solid #eee; background: #fafafa;">
                        </div>
                        <div style="flex: 1;">
                            <label style="display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Email Address</label>
                            <input type="email" placeholder="email@example.com" style="width: 100%; padding: 15px; border: 1px solid #eee; background: #fafafa;">
                        </div>
                    </div>
                    <div>
                        <label style="display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Subject</label>
                        <select style="width: 100%; padding: 15px; border: 1px solid #eee; background: #fafafa;">
                            <option>Product Inquiry</option>
                            <option>Order Status</option>
                            <option>Consultation Request</option>
                            <option>Wholesale/Collaboration</option>
                        </select>
                    </div>
                    <div>
                        <label style="display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Message</label>
                        <textarea rows="6" placeholder="How can we assist you today?" style="width: 100%; padding: 15px; border: 1px solid #eee; background: #fafafa; resize: none;"></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="align-self: flex-start; border: none; cursor: pointer;">Send Message</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div style="display: flex; flex-direction: column; gap: 40px;">
                <div>
                    <h3 style="margin-bottom: 15px;">Our Flagship</h3>
                    <p style="color: #666;">Experience Touchée Glow in person. Visit our studio for a personalized consultation.</p>
                    <p style="margin-top: 10px; font-weight: 600;">123 Radiance Blvd, Suite 400<br>Lux City, EG 56789</p>
                </div>

                <div>
                    <h3 style="margin-bottom: 15px;">Direct Contact</h3>
                    <div style="display: flex; flex-direction: column; gap: 10px; color: #666;">
                        <span style="display: flex; align-items: center; gap: 10px;"><i data-lucide="phone" style="width: 18px; color: var(--primary);"></i> +1 (234) 567-890</span>
                        <span style="display: flex; align-items: center; gap: 10px;"><i data-lucide="mail" style="width: 18px; color: var(--primary);"></i> support@toucheeglow.com</span>
                    </div>
                </div>

                <div>
                    <h3 style="margin-bottom: 15px;">Follow the Glow</h3>
                    <div style="display: flex; gap: 20px;">
                        <a href="#" style="color: var(--text-dark); transition: color 0.3s;"><i data-lucide="instagram"></i></a>
                        <a href="#" style="color: var(--text-dark); transition: color 0.3s;"><i data-lucide="facebook"></i></a>
                        <a href="#" style="color: var(--text-dark); transition: color 0.3s;"><i data-lucide="twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
