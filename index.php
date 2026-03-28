<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/line-background.png');"></div>
    <div class="hero-purple-glow"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text-area">
                <h1>Discover Your Dream<br>Property with Estatein</h1>
                <p>Your journey to finding the perfect property begins here. Explore our listings to find the home<br>that matches your dreams.</p>
                
                <div class="hero-buttons">
                    <a href="#learn-more" class="btn btn-primary">Learn More</a>
                    <a href="#properties" class="btn btn-secondary">Browse Properties</a>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number">200+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">10k+</div>
                        <div class="stat-label">Properties For Clients</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">16+</div>
                        <div class="stat-label">Years of Experience</div>
                    </div>
                </div>
            </div>
            
            <div class="hero-image-area">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-building.png" alt="Modern Properties">
                <div class="hero-circle-badge">
                    <svg viewBox="0 0 120 120" class="circular-text">
                        <defs>
                            <path id="circle" d="M 60, 60 m -45, 0 a 45,45 0 1,1 90,0 a 45,45 0 1,1 -90,0"></path>
                        </defs>
                        <text font-size="12" fill="white" font-weight="500" letter-spacing="3.5">
                            <textPath href="#circle">✨ Discover Your Dream Property</textPath>
                        </text>
                    </svg>
                    <div class="badge-arrow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H7M17 7V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature Cards Section -->
<section class="features">
    <div class="container">
        <div class="features-grid">
            <div class="feature-card">
            <div class="feature-arrow">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="feature-icon-wrapper">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9 22V12H15V22" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h3 class="feature-title">Find Your Dream Home</h3>
        </div>
        
        <div class="feature-card">
            <div class="feature-arrow">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="feature-icon-wrapper">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 16V12" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 8H12.01" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h3 class="feature-title">Unlock Property Value</h3>
        </div>
        
        <div class="feature-card">
            <div class="feature-arrow">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="feature-icon-wrapper">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 22H20" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 2V22" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8 2V22" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4 12H8" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 12H20" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4 7H8" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 7H20" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4 17H8" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 17H20" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h3 class="feature-title">Effortless Property Management</h3>
        </div>
        
        <div class="feature-card">
            <div class="feature-arrow">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="feature-icon-wrapper">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 8V12L15 15" stroke="#9952FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h3 class="feature-title">Smart Investments, Informed Decisions</h3>
        </div>
    </div>
    </div>
</section>

<?php get_footer(); ?>
