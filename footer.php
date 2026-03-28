<!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div class="logo-icon" style="width: 30px; height: 30px;"></div>
                        <span>Estatein</span>
                    </div>
                </div>
                
                <div class="footer-links">
                    <a href="<?php echo home_url('/'); ?>">Home</a>
                    <a href="<?php echo home_url('/about'); ?>">About Us</a>
                    <a href="<?php echo home_url('/properties'); ?>">Properties</a>
                    <a href="<?php echo home_url('/services'); ?>">Services</a>
                    <a href="#contact">Contact</a>
                </div>
                
                <div class="footer-copyright">
                    <p>&copy; <?php echo date('Y'); ?> Estatein. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
