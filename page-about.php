<?php get_header(); ?>

<!-- About Page Header -->
<section class="page-header">
    <div class="container">
        <h1>About Estatein</h1>
        <p>Your trusted partner in finding the perfect property</p>
    </div>
</section>

<!-- About Hero -->
<section class="about-hero">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2>Leading Real Estate Excellence Since 2008</h2>
                <p>At Estatein, we're more than just a real estate agency – we're your dedicated partners in finding the perfect property. With over 16 years of experience in the industry, we've helped thousands of clients discover their dream homes and make smart investment decisions.</p>
                <p>Our team of experienced professionals combines deep market knowledge with cutting-edge technology to provide you with the best possible real estate experience. Whether you're buying, selling, or investing, we're here to guide you every step of the way.</p>
                
                <div class="about-stats">
                    <div class="stat-item">
                        <div class="stat-number">200+</div>
                        <div class="stat-label">Happy Customers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">10k+</div>
                        <div class="stat-label">Properties Sold</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">16+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
            </div>
            
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-hero.jpg" alt="About Estatein">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Values -->
<section class="mission-values">
    <div class="container">
        <div class="mission-content">
            <div class="mission-section">
                <h3>Our Mission</h3>
                <p>To provide exceptional real estate services that exceed client expectations through innovation, integrity, and personalized attention to every detail.</p>
            </div>
            
            <div class="values-section">
                <h3>Our Values</h3>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">🎯</div>
                        <h4>Excellence</h4>
                        <p>We strive for excellence in everything we do, from property selection to customer service.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">🤝</div>
                        <h4>Integrity</h4>
                        <p>Honest and transparent communication is the foundation of our client relationships.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">💡</div>
                        <h4>Innovation</h4>
                        <p>We embrace technology and creative solutions to enhance the real estate experience.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">❤️</div>
                        <h4>Client-Centric</h4>
                        <p>Your needs and goals are at the center of every decision we make.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section">
    <div class="container">
        <h2>Meet Our Expert Team</h2>
        <p>Passionate professionals dedicated to your success</p>
        
        <div class="team-grid">
            <?php
            // Team members would typically be managed through a custom post type or ACF
            $team_members = array(
                array(
                    'name' => 'John Anderson',
                    'position' => 'Founder & CEO',
                    'bio' => 'With over 20 years in real estate, John leads our team with vision and expertise.',
                    'image' => 'team-1.jpg'
                ),
                array(
                    'name' => 'Sarah Mitchell',
                    'position' => 'Senior Agent',
                    'bio' => 'Sarah specializes in luxury properties and has helped over 200 families find their dream homes.',
                    'image' => 'team-2.jpg'
                ),
                array(
                    'name' => 'Michael Chen',
                    'position' => 'Property Manager',
                    'bio' => 'Michael ensures our clients\' investments are well-managed and profitable.',
                    'image' => 'team-3.jpg'
                ),
                array(
                    'name' => 'Emily Rodriguez',
                    'position' => 'Client Relations',
                    'bio' => 'Emily is dedicated to providing exceptional service and support to all our clients.',
                    'image' => 'team-4.jpg'
                )
            );
            
            foreach ($team_members as $member) :
            ?>
            
            <div class="team-member">
                <div class="member-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                </div>
                <div class="member-info">
                    <h3><?php echo $member['name']; ?></h3>
                    <div class="member-position"><?php echo $member['position']; ?></div>
                    <p><?php echo $member['bio']; ?></p>
                    <div class="member-social">
                        <a href="#" class="social-link">📧</a>
                        <a href="#" class="social-link">💼</a>
                        <a href="#" class="social-link">📱</a>
                    </div>
                </div>
            </div>
            
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials">
    <div class="container">
        <h2>What Our Clients Say</h2>
        <p>Real experiences from satisfied customers</p>
        
        <div class="testimonials-slider">
            <?php
            $testimonials = array(
                array(
                    'name' => 'David & Lisa Thompson',
                    'text' => 'Estatein made our home-buying experience incredibly smooth. Their expertise and patience helped us find the perfect family home.',
                    'rating' => 5
                ),
                array(
                    'name' => 'Robert Martinez',
                    'text' => 'As an investor, I appreciate their market insights and property recommendations. They\'ve helped me build a successful portfolio.',
                    'rating' => 5
                ),
                array(
                    'name' => 'Jennifer Williams',
                    'text' => 'The team went above and beyond to help me sell my property quickly and at a great price. Highly recommended!',
                    'rating' => 5
                )
            );
            
            foreach ($testimonials as $testimonial) :
            ?>
            
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <?php for ($i = 0; $i < $testimonial['rating']; $i++) : ?>
                        <span class="star">⭐</span>
                    <?php endfor; ?>
                </div>
                <p class="testimonial-text">"<?php echo $testimonial['text']; ?>"</p>
                <div class="testimonial-author">- <?php echo $testimonial['name']; ?></div>
            </div>
            
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="contact-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Work with Us?</h2>
            <p>Get in touch with our team to discuss your real estate needs</p>
            <a href="#contact" class="btn btn-secondary">Contact Our Team</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
