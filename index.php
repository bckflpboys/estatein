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

<section class="featured-properties" id="properties">
    <div class="container">
        <div class="featured-header">
            <div class="featured-title-wrap">
                <div class="sparkles">
                    <span class="sparkle"></span>
                    <span class="sparkle small"></span>
                </div>
                <h2>Featured Properties</h2>
                <p>Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes and investments available through Estatein. Click 'View Details' for more information.</p>
            </div>
            <a href="<?php echo get_permalink(get_page_by_path('properties')); ?>" class="btn btn-outline">View All Properties</a>
        </div>
        <div class="property-grid">
            <article class="property-card">
                <div class="property-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/card1.png" alt="Seaside Serenity Villa">
                </div>
                <div class="property-body">
                    <h3 class="property-title">Seaside Serenity Villa</h3>
                    <p class="property-desc">A stunning 4-bedroom, 3-bathroom villa in a peaceful suburban neighborhood. <a href="#" class="read-more">Read More</a></p>
                    <div class="property-tags">
                        <span class="tag">
                            <span class="tag-icon">
                                <svg viewBox="0 0 24 24" width="16" height="16"><path d="M4 21V8l8-6 8 6v13" stroke="#ffffff" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            4-Bedroom
                        </span>
                        <span class="tag">
                            <span class="tag-icon">
                                <svg viewBox="0 0 24 24" width="16" height="16"><path d="M3 10h18v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4z" stroke="#ffffff" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            3-Bathroom
                        </span>
                        <span class="tag">
                            <span class="tag-icon">
                                <svg viewBox="0 0 24 24" width="16" height="16"><rect x="4" y="10" width="16" height="10" rx="2" ry="2" stroke="#ffffff" stroke-width="1.5" fill="none"/><path d="M8 10V6h8v4" stroke="#ffffff" stroke-width="1.5" fill="none" stroke-linecap="round"/></svg>
                            </span>
                            Villa
                        </span>
                    </div>
                    <div class="property-footer">
                        <div class="price">
                            <div class="price-label">Price</div>
                            <div class="price-value">$550,000</div>
                        </div>
                        <a href="#" class="btn btn-purple">View Property Details</a>
                    </div>
                </div>
            </article>
            <article class="property-card">
                <div class="property-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/card2.png" alt="Metropolitan Haven">
                </div>
                <div class="property-body">
                    <h3 class="property-title">Metropolitan Haven</h3>
                    <p class="property-desc">A chic and fully-furnished 2-bedroom apartment with panoramic city views. <a href="#" class="read-more">Read More</a></p>
                    <div class="property-tags">
                        <span class="tag">
                            <span class="tag-icon">
                                <svg viewBox="0 0 24 24" width="16" height="16"><path d="M4 21V8l8-6 8 6v13" stroke="#ffffff" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            2-Bedroom
                        </span>
                        <span class="tag">
                            <span class="tag-icon">
                                <svg viewBox="0 0 24 24" width="16" height="16"><path d="M3 10h18v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4z" stroke="#ffffff" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            2-Bathroom
                        </span>
                        <span class="tag">
                            <span class="tag-icon">
                                <svg viewBox="0 0 24 24" width="16" height="16"><rect x="4" y="10" width="16" height="10" rx="2" ry="2" stroke="#ffffff" stroke-width="1.5" fill="none"/><path d="M8 10V6h8v4" stroke="#ffffff" stroke-width="1.5" fill="none" stroke-linecap="round"/></svg>
                            </span>
                            Villa
                        </span>
                    </div>
                    <div class="property-footer">
                        <div class="price">
                            <div class="price-label">Price</div>
                            <div class="price-value">$550,000</div>
                        </div>
                        <a href="#" class="btn btn-purple">View Property Details</a>
                    </div>
                </div>
            </article>
            <article class="property-card">
                <div class="property-image with-gradient">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/card3.png" alt="Rustic Retreat Cottage">
                </div>
                <div class="property-body">
                    <h3 class="property-title">Rustic Retreat Cottage</h3>
                    <p class="property-desc">An elegant 3-bedroom, 2.5-bathroom townhouse in a gated community. <a href="#" class="read-more">Read More</a></p>
                    <div class="property-tags">
                        <span class="tag">
                            <span class="tag-icon">
                                <svg viewBox="0 0 24 24" width="16" height="16"><path d="M4 21V8l8-6 8 6v13" stroke="#ffffff" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            3-Bedroom
                        </span>
                        <span class="tag">
                            <span class="tag-icon">
                                <svg viewBox="0 0 24 24" width="16" height="16"><path d="M3 10h18v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4z" stroke="#ffffff" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </span>
                            3-Bathroom
                        </span>
                        <span class="tag">
                            <span class="tag-icon">
                                <svg viewBox="0 0 24 24" width="16" height="16"><rect x="4" y="10" width="16" height="10" rx="2" ry="2" stroke="#ffffff" stroke-width="1.5" fill="none"/><path d="M8 10V6h8v4" stroke="#ffffff" stroke-width="1.5" fill="none" stroke-linecap="round"/></svg>
                            </span>
                            Villa
                        </span>
                    </div>
                    <div class="property-footer">
                        <div class="price">
                            <div class="price-label">Price</div>
                            <div class="price-value">$550,000</div>
                        </div>
                        <a href="#" class="btn btn-purple">View Property Details</a>
                    </div>
                </div>
            </article>
        </div>
        <div class="featured-pagination">
            <div class="featured-count">01 of 60</div>
            <div class="featured-controls">
                <button class="pager-btn" aria-label="Previous">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <button class="pager-btn" aria-label="Next">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="featured-header">
            <div class="featured-title-wrap">
                <div class="sparkles">
                    <span class="sparkle"></span>
                    <span class="sparkle small"></span>
                </div>
                <h2>What Our Clients Say</h2>
                <p>Read the success stories and heartfelt testimonials from our valued clients. Discover why they chose Estatein for their real estate needs.</p>
            </div>
            <a href="<?php echo get_permalink(get_page_by_path('testimonials')); ?>" class="btn btn-outline">View All Testimonials</a>
        </div>
        <div class="testimonial-grid">
            <article class="testimonial-card">
                <div class="stars">
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                </div>
                <h3 class="testimonial-title">Exceptional Service!</h3>
                <p class="testimonial-text">Our experience with Estatein was outstanding. Their team's dedication and professionalism made finding our dream home a breeze. Highly recommended!</p>
                <div class="testimonial-user">
                    <img class="avatar" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?w=100&h=100&fit=crop&crop=faces" alt="Wade Warren">
                    <div class="user-meta">
                        <div class="user-name">Wade Warren</div>
                        <div class="user-location">USA, California</div>
                    </div>
                </div>
            </article>
            <article class="testimonial-card">
                <div class="stars">
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                </div>
                <h3 class="testimonial-title">Efficient and Reliable</h3>
                <p class="testimonial-text">Estatein provided us with top-notch service. They helped us sell our property quickly and at a great price. We couldn't be happier with the results.</p>
                <div class="testimonial-user">
                    <img class="avatar" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100&h=100&fit=crop&crop=faces" alt="Emelie Thomson">
                    <div class="user-meta">
                        <div class="user-name">Emelie Thomson</div>
                        <div class="user-location">USA, Florida</div>
                    </div>
                </div>
            </article>
            <article class="testimonial-card">
                <div class="stars">
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                    <span class="star-badge"><svg viewBox="0 0 24 24" width="16" height="16"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#F5D020"/></svg></span>
                </div>
                <h3 class="testimonial-title">Trusted Advisors</h3>
                <p class="testimonial-text">The Estatein team guided us through the entire buying process. Their knowledge and commitment to our needs were impressive. Thank you for your support!</p>
                <div class="testimonial-user">
                    <img class="avatar" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?w=100&h=100&fit=crop&crop=faces" alt="John Mans">
                    <div class="user-meta">
                        <div class="user-name">John Mans</div>
                        <div class="user-location">USA, Nevada</div>
                    </div>
                </div>
            </article>
        </div>
        <div class="testimonials-divider"></div>
        <div class="featured-pagination">
            <div class="featured-count">01 of 10</div>
            <div class="featured-controls">
                <button class="pager-btn" aria-label="Previous">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <button class="pager-btn" aria-label="Next">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M9 6l6 6-6 6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
            </div>
        </div>
        <div class="sparkles bottom">
            <span class="sparkle"></span>
            <span class="sparkle small"></span>
        </div>
    </div>
</section>

<?php get_footer(); ?>
