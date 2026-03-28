<?php get_header(); ?>

<!-- Contact Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with our expert team</p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <p>We're here to help you with all your real estate needs. Whether you're looking to buy, sell, or invest, our team is ready to assist you.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-info-text">
                            <h3>Office Location</h3>
                            <p>123 Real Estate Avenue<br>Downtown District, NY 10001</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-info-text">
                            <h3>Phone</h3>
                            <p>Main: +1 (555) 123-4567<br>Fax: +1 (555) 123-4568</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div class="contact-info-text">
                            <h3>Email</h3>
                            <p>General: info@estatein.com<br>Support: support@estatein.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">🕐</div>
                        <div class="contact-info-text">
                            <h3>Office Hours</h3>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                
                <div class="social-links">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon">📘</a>
                        <a href="#" class="social-icon">📷</a>
                        <a href="#" class="social-icon">🐦</a>
                        <a href="#" class="social-icon">💼</a>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-section">
                <div class="form-container">
                    <h2>Send Us a Message</h2>
                    <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                    
                    <?php if (isset($_GET['success'])) : ?>
                        <div class="success-message">
                            Thank you for your message! We'll get back to you soon.
                        </div>
                    <?php endif; ?>
                    
                    <form id="contactForm" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                        <input type="hidden" name="action" value="estatein_contact">
                        <?php wp_nonce_field('estatein_contact_nonce', 'nonce'); ?>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                            
                            <div class="form-group">
                                <label for="subject">Subject *</label>
                                <select id="subject" name="subject" required>
                                    <option value="">Select a subject</option>
                                    <option value="buying">Buying a Property</option>
                                    <option value="selling">Selling a Property</option>
                                    <option value="renting">Renting</option>
                                    <option value="investment">Investment</option>
                                    <option value="general">General Inquiry</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="newsletter" id="newsletter">
                                <span class="checkmark"></span>
                                I would like to receive property updates and newsletters
                            </label>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" id="submitBtn" class="btn btn-secondary">Send Message</button>
                        </div>
                        
                        <div class="error-message" style="display: none;">
                            There was an error sending your message. Please try again.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="map-container">
        <div class="map-placeholder">
            <div class="map-content">
                <h3>Visit Our Office</h3>
                <p>123 Real Estate Avenue<br>Downtown District, NY 10001</p>
                <a href="https://maps.google.com/?q=123+Real+Estate+Avenue+NY+10001" target="_blank" class="btn btn-primary">Get Directions</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <p>Find answers to common questions about our services</p>
        
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How long does it typically take to sell a property?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>The time it takes to sell a property varies depending on market conditions, location, and pricing. On average, properties in our portfolio sell within 30-60 days, though some may sell faster or take longer depending on various factors.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What documents do I need to buy a property?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Typically, you'll need proof of income, bank statements, tax returns, identification documents, and pre-approval for a mortgage. Our team will provide you with a complete checklist based on your specific situation.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you offer property management services?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer comprehensive property management services including tenant screening, rent collection, maintenance coordination, and financial reporting for property owners.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you determine property values?</h3>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We use a combination of market analysis, comparable property sales, location factors, property condition, and current market trends to determine accurate property valuations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
