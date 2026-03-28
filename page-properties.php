<?php get_header(); ?>

<!-- Properties Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Properties</h1>
        <p>Explore our extensive collection of premium properties</p>
    </div>
</section>

<!-- Properties Filter -->
<section class="properties-filter">
    <div class="container">
        <div class="filter-controls">
            <select class="property-filter" id="propertyType">
                <option value="all">All Properties</option>
                <option value="apartment">Apartments</option>
                <option value="house">Houses</option>
                <option value="commercial">Commercial</option>
                <option value="land">Land</option>
            </select>
            
            <select class="property-filter" id="propertyPrice">
                <option value="all">All Prices</option>
                <option value="0-500000">Under $500,000</option>
                <option value="500000-1000000">$500,000 - $1,000,000</option>
                <option value="1000000-2000000">$1,000,000 - $2,000,000</option>
                <option value="2000000+">Over $2,000,000</option>
            </select>
            
            <select class="property-filter" id="propertyLocation">
                <option value="all">All Locations</option>
                <option value="downtown">Downtown</option>
                <option value="suburbs">Suburbs</option>
                <option value="waterfront">Waterfront</option>
            </select>
        </div>
    </div>
</section>

<!-- Properties Grid -->
<section class="properties-grid">
    <div class="container">
        <div class="property-listings">
            <?php
            $args = array(
                'post_type' => 'property',
                'posts_per_page' => 12,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            
            $properties_query = new WP_Query($args);
            
            if ($properties_query->have_posts()) :
                while ($properties_query->have_posts()) : $properties_query->the_post();
            ?>
            
            <div class="property-card" data-category="<?php echo get_post_meta(get_the_ID(), 'property_type', true); ?>">
                <div class="property-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-property.jpg" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <div class="property-price">
                        $<?php echo number_format(get_post_meta(get_the_ID(), 'property_price', true)); ?>
                    </div>
                    <div class="property-status">
                        <?php echo get_post_meta(get_the_ID(), 'property_status', true); ?>
                    </div>
                </div>
                
                <div class="property-content">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="property-location">
                        📍 <?php echo get_post_meta(get_the_ID(), 'property_location', true); ?>
                    </div>
                    
                    <div class="property-features">
                        <div class="feature">
                            <span class="feature-icon">🛏️</span>
                            <span><?php echo get_post_meta(get_the_ID(), 'property_bedrooms', true); ?> Beds</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">🚿</span>
                            <span><?php echo get_post_meta(get_the_ID(), 'property_bathrooms', true); ?> Baths</span>
                        </div>
                        <div class="feature">
                            <span class="feature-icon">📐</span>
                            <span><?php echo get_post_meta(get_the_ID(), 'property_area', true); ?> sqft</span>
                        </div>
                    </div>
                    
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    
                    <div class="property-actions">
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Details</a>
                        <button class="btn btn-secondary schedule-tour" data-property="<?php echo get_the_ID(); ?>">Schedule Tour</button>
                    </div>
                </div>
            </div>
            
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
            
            <div class="no-properties">
                <h3>No properties found</h3>
                <p>Please check back later for new listings.</p>
            </div>
            
            <?php endif; ?>
        </div>
        
        <!-- Pagination -->
        <div class="pagination">
            <?php
            $big = 999999999;
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $properties_query->max_num_pages,
                'prev_text' => '← Previous',
                'next_text' => 'Next →',
            ));
            ?>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="contact-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Find Your Dream Property?</h2>
            <p>Our expert team is here to help you every step of the way</p>
            <a href="#contact" class="btn btn-secondary">Contact Us Today</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
