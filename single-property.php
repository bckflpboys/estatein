<?php get_header(); ?>

<!-- Property Single Page -->
<?php while (have_posts()) : the_post(); ?>

<div class="property-hero">
    <div class="container">
        <div class="property-breadcrumb">
            <a href="<?php echo home_url('/'); ?>">Home</a> / 
            <a href="<?php echo home_url('/properties'); ?>">Properties</a> / 
            <?php the_title(); ?>
        </div>
        
        <h1><?php the_title(); ?></h1>
        <div class="property-meta">
            <span class="property-location">📍 <?php echo get_post_meta(get_the_ID(), 'property_location', true); ?></span>
            <span class="property-type"><?php echo get_post_meta(get_the_ID(), 'property_type', true); ?></span>
            <span class="property-status"><?php echo get_post_meta(get_the_ID(), 'property_status', true); ?></span>
        </div>
    </div>
</div>

<!-- Property Gallery -->
<section class="property-gallery">
    <div class="container">
        <div class="gallery-main">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" id="mainImage">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-property.jpg" alt="<?php the_title(); ?>" id="mainImage">
            <?php endif; ?>
        </div>
        
        <div class="gallery-thumbnails">
            <?php
            $gallery_images = get_post_meta(get_the_ID(), 'property_gallery', true);
            if ($gallery_images) {
                foreach ($gallery_images as $image) {
                    echo '<img src="' . wp_get_attachment_url($image) . '" alt="' . get_the_title() . '" onclick="changeMainImage(this.src)">';
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Property Details -->
<section class="property-details">
    <div class="container">
        <div class="property-content">
            <div class="property-main">
                <div class="property-price-section">
                    <div class="price">
                        $<?php echo number_format(get_post_meta(get_the_ID(), 'property_price', true)); ?>
                    </div>
                    <div class="price-info">
                        <span class="price-per-sqft">$<?php echo number_format(get_post_meta(get_the_ID(), 'property_price', true) / get_post_meta(get_the_ID(), 'property_area', true)); ?>/sqft</span>
                    </div>
                </div>
                
                <div class="property-features">
                    <div class="feature-item">
                        <span class="feature-icon">🛏️</span>
                        <span class="feature-value"><?php echo get_post_meta(get_the_ID(), 'property_bedrooms', true); ?></span>
                        <span class="feature-label">Bedrooms</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🚿</span>
                        <span class="feature-value"><?php echo get_post_meta(get_the_ID(), 'property_bathrooms', true); ?></span>
                        <span class="feature-label">Bathrooms</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">📐</span>
                        <span class="feature-value"><?php echo number_format(get_post_meta(get_the_ID(), 'property_area', true)); ?></span>
                        <span class="feature-label">Square Feet</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🏗️</span>
                        <span class="feature-value"><?php echo get_post_meta(get_the_ID(), 'property_year_built', true); ?></span>
                        <span class="feature-label">Year Built</span>
                    </div>
                </div>
                
                <div class="property-description">
                    <h3>Property Description</h3>
                    <?php the_content(); ?>
                </div>
                
                <div class="property-amenities">
                    <h3>Property Amenities</h3>
                    <div class="amenities-grid">
                        <?php
                        $amenities = get_post_meta(get_the_ID(), 'property_amenities', true);
                        if ($amenities) {
                            foreach ($amenities as $amenity) {
                                echo '<div class="amenity-item">✓ ' . $amenity . '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
                
                <div class="property-location-details">
                    <h3>Location</h3>
                    <div class="location-info">
                        <p><strong>Address:</strong> <?php echo get_post_meta(get_the_ID(), 'property_address', true); ?></p>
                        <p><strong>Neighborhood:</strong> <?php echo get_post_meta(get_the_ID(), 'property_neighborhood', true); ?></p>
                        <p><strong>City:</strong> <?php echo get_post_meta(get_the_ID(), 'property_city', true); ?></p>
                        <p><strong>ZIP Code:</strong> <?php echo get_post_meta(get_the_ID(), 'property_zip', true); ?></p>
                    </div>
                    
                    <div class="map-placeholder">
                        <p>Interactive map would be displayed here</p>
                    </div>
                </div>
            </div>
            
            <div class="property-sidebar">
                <div class="contact-agent">
                    <h3>Interested in this property?</h3>
                    <p>Get in touch with our team to schedule a viewing or get more information.</p>
                    
                    <form class="property-inquiry-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                        <input type="hidden" name="action" value="property_inquiry">
                        <input type="hidden" name="property_id" value="<?php echo get_the_ID(); ?>">
                        <?php wp_nonce_field('property_inquiry_nonce', 'nonce'); ?>
                        
                        <div class="form-group">
                            <label for="inquiry_name">Name *</label>
                            <input type="text" id="inquiry_name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="inquiry_email">Email *</label>
                            <input type="email" id="inquiry_email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="inquiry_phone">Phone</label>
                            <input type="tel" id="inquiry_phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="inquiry_message">Message</label>
                            <textarea id="inquiry_message" name="message" rows="4"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-secondary">Send Inquiry</button>
                    </form>
                </div>
                
                <div class="property-agent">
                    <h3>Listing Agent</h3>
                    <div class="agent-info">
                        <div class="agent-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/agent-default.jpg" alt="Agent">
                        </div>
                        <div class="agent-details">
                            <h4><?php echo get_post_meta(get_the_ID(), 'agent_name', true); ?></h4>
                            <p>Senior Real Estate Agent</p>
                            <div class="agent-contact">
                                <p>📞 <?php echo get_post_meta(get_the_ID(), 'agent_phone', true); ?></p>
                                <p>✉️ <?php echo get_post_meta(get_the_ID(), 'agent_email', true); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mortgage-calculator">
                    <h3>Mortgage Calculator</h3>
                    <form class="calculator-form">
                        <div class="form-group">
                            <label for="loan_amount">Loan Amount</label>
                            <input type="text" id="loan_amount" value="<?php echo get_post_meta(get_the_ID(), 'property_price', true); ?>" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="down_payment">Down Payment (%)</label>
                            <input type="number" id="down_payment" value="20" min="0" max="100">
                        </div>
                        
                        <div class="form-group">
                            <label for="interest_rate">Interest Rate (%)</label>
                            <input type="number" id="interest_rate" value="6.5" step="0.1">
                        </div>
                        
                        <div class="form-group">
                            <label for="loan_term">Loan Term (years)</label>
                            <select id="loan_term">
                                <option value="15">15 years</option>
                                <option value="30" selected>30 years</option>
                            </select>
                        </div>
                        
                        <button type="button" class="btn btn-primary" onclick="calculateMortgage()">Calculate</button>
                        
                        <div class="calculator-result" id="calculator_result" style="display: none;">
                            <p><strong>Monthly Payment:</strong> $<span id="monthly_payment">0</span></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Similar Properties -->
<section class="similar-properties">
    <div class="container">
        <h2>Similar Properties</h2>
        <div class="similar-properties-grid">
            <?php
            $current_property_type = get_post_meta(get_the_ID(), 'property_type', true);
            $args = array(
                'post_type' => 'property',
                'posts_per_page' => 3,
                'post__not_in' => array(get_the_ID()),
                'meta_query' => array(
                    array(
                        'key' => 'property_type',
                        'value' => $current_property_type,
                        'compare' => '='
                    )
                )
            );
            
            $similar_query = new WP_Query($args);
            
            if ($similar_query->have_posts()) :
                while ($similar_query->have_posts()) : $similar_query->the_post();
            ?>
            
            <div class="property-card">
                <div class="property-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-property.jpg" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <div class="property-price">
                        $<?php echo number_format(get_post_meta(get_the_ID(), 'property_price', true)); ?>
                    </div>
                </div>
                
                <div class="property-content">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="property-location">📍 <?php echo get_post_meta(get_the_ID(), 'property_location', true); ?></div>
                    
                    <div class="property-features">
                        <span><?php echo get_post_meta(get_the_ID(), 'property_bedrooms', true); ?> beds</span>
                        <span><?php echo get_post_meta(get_the_ID(), 'property_bathrooms', true); ?> baths</span>
                        <span><?php echo get_post_meta(get_the_ID(), 'property_area', true); ?> sqft</span>
                    </div>
                </div>
            </div>
            
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
