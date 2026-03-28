<section class="footer-cta">
    <div class="footer-cta-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/line-background.png');"></div>
    <div class="container">
        <div class="footer-cta-content">
            <div class="cta-text">
                <h2>Start Your Real Estate Journey Today</h2>
                <p>Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way. Take the first step towards your real estate goals and explore our available properties or get in touch with our team for personalized assistance.</p>
            </div>
            <a href="<?php echo get_permalink(get_page_by_path('properties')); ?>" class="btn btn-purple cta-button">Explore Properties</a>
        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div class="brand">
                <div class="brand-icon">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C7 6 7 12 12 22C17 12 17 6 12 2Z" fill="#703BF7"/>
                        <path d="M6 8C6 5 8 3 11 3C8 6 8 9 9 12C7 11 6 10 6 8Z" fill="#9B6CFF"/>
                    </svg>
                </div>
                <div class="brand-name">Estatein</div>
            </div>
            <form class="newsletter" action="#" method="post">
                <div class="newsletter-input">
                    <span class="input-icon-left">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M4 4h16v16H4z" stroke="#999999" stroke-width="1.5"/><path d="M4 7l8 6 8-6" stroke="#999999" stroke-width="1.5" fill="none"/></svg>
                    </span>
                    <input type="email" name="email" placeholder="Enter Your Email" required>
                    <button type="submit" class="send-btn" aria-label="Send">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M3 11l18-8-8 18-2-8-8-2z" stroke="#ffffff" stroke-width="1.5" fill="none"/></svg>
                    </button>
                </div>
            </form>
        </div>

        <div class="footer-links-grid">
            <div class="links-column">
                <div class="column-title">Home</div>
                <a href="<?php echo home_url('/'); ?>#hero">Hero Section</a>
                <a href="<?php echo home_url('/'); ?>#features">Features</a>
                <a href="<?php echo home_url('/'); ?>#properties">Properties</a>
                <a href="<?php echo home_url('/'); ?>#testimonials">Testimonials</a>
                <a href="<?php echo home_url('/'); ?>#faq">FAQ's</a>
            </div>
            <div class="links-column">
                <div class="column-title">About Us</div>
                <a href="<?php echo home_url('/about'); ?>">Our Story</a>
                <a href="<?php echo home_url('/about'); ?>">Our Works</a>
                <a href="<?php echo home_url('/about'); ?>">How It Works</a>
                <a href="<?php echo home_url('/about'); ?>">Our Team</a>
                <a href="<?php echo home_url('/about'); ?>">Our Clients</a>
            </div>
            <div class="links-column">
                <div class="column-title">Properties</div>
                <a href="<?php echo home_url('/properties'); ?>">Portfolio</a>
                <a href="<?php echo home_url('/properties'); ?>">Categories</a>
            </div>
            <div class="links-column">
                <div class="column-title">Services</div>
                <a href="<?php echo home_url('/services'); ?>">Valuation Mastery</a>
                <a href="<?php echo home_url('/services'); ?>">Strategic Marketing</a>
                <a href="<?php echo home_url('/services'); ?>">Negotiation Wizardry</a>
                <a href="<?php echo home_url('/services'); ?>">Closing Success</a>
                <a href="<?php echo home_url('/services'); ?>">Property Management</a>
            </div>
            <div class="links-column">
                <div class="column-title">Contact Us</div>
                <a href="<?php echo home_url('/contact'); ?>">Contact Form</a>
                <a href="<?php echo home_url('/contact'); ?>">Our Offices</a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-left">
                <div class="copyright">@2023 Estatein. All Rights Reserved.</div>
                <a class="terms" href="<?php echo home_url('/terms'); ?>">Terms & Conditions</a>
            </div>
            <div class="socials">
                <a href="#" class="social-pill" aria-label="Facebook">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M13 20v-7h3l1-4h-4V7a2 2 0 0 1 2-2h2V1h-3a5 5 0 0 0-5 5v3H6v4h3v7h4z" fill="#ffffff"/></svg>
                </a>
                <a href="#" class="social-pill" aria-label="LinkedIn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M4 4h4v16H4zM10 10h4v10h-4zM14 10h4v10h-4z" fill="#ffffff"/></svg>
                </a>
                <a href="#" class="social-pill" aria-label="Twitter">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M22 5.8a8.4 8.4 0 0 1-2.4.7 4.2 4.2 0 0 0 1.8-2.3 8.3 8.3 0 0 1-2.7 1 4.2 4.2 0 0 0-7.1 3.8A11.9 11.9 0 0 1 3 4.9a4.2 4.2 0 0 0 1.3 5.6 4 4 0 0 1-1.9-.5v.1a4.2 4.2 0 0 0 3.3 4.1 4.2 4.2 0 0 1-1.9.1 4.2 4.2 0 0 0 3.9 2.9A8.5 8.5 0 0 1 2 19.5a12 12 0 0 0 6.5 1.9c7.8 0 12.1-6.5 12.1-12.1v-.6A8.7 8.7 0 0 0 22 5.8z" fill="#ffffff"/></svg>
                </a>
                <a href="#" class="social-pill" aria-label="YouTube">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M21.8 8.2a3 3 0 0 0-2.1-2.1C18 5.6 12 5.6 12 5.6s-6 0-7.7.5a3 3 0 0 0-2.1 2.1C1.6 10 1.6 12 1.6 12s0 2 .5 3.8a3 3 0 0 0 2.1 2.1c1.7.5 7.7.5 7.7.5s6 0 7.7-.5a3 3 0 0 0 2.1-2.1c.5-1.7.5-3.8.5-3.8s0-2-.5-3.8z" fill="#ffffff"/><path d="M10 9.8v4.4l4-2.2-4-2.2z" fill="#0a0a0a"/></svg>
                </a>
            </div>
        </div>
    </div>
</footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.mobile-menu-toggle');
            const headerContent = document.querySelector('.header-content');
            
            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    headerContent.classList.toggle('nav-open');
                });
            }
        });
    </script>
    <?php wp_footer(); ?>
</body>
