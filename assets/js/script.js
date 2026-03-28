jQuery(document).ready(function($) {
    
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });
    
    // Header scroll effect
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('header').addClass('scrolled');
        } else {
            $('header').removeClass('scrolled');
        }
    });
    
    // Mobile menu toggle
    $('.mobile-menu-toggle').on('click', function() {
        $('nav').toggleClass('active');
        $(this).toggleClass('active');
    });
    
    // Animate elements on scroll
    function animateOnScroll() {
        $('.stat-card, .feature-card').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('animate-in');
            }
        });
    }
    
    $(window).scroll(animateOnScroll);
    animateOnScroll(); // Initial check
    
    // Contact form validation
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        
        var form = $(this);
        var formData = new FormData(this);
        formData.append('action', 'estatein_contact');
        formData.append('nonce', estatein_ajax.nonce);
        
        $.ajax({
            url: estatein_ajax.ajax_url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('#submitBtn').prop('disabled', true).text('Sending...');
            },
            success: function(response) {
                $('#submitBtn').prop('disabled', false).text('Send Message');
                if (response.success) {
                    form[0].reset();
                    $('.success-message').fadeIn().delay(3000).fadeOut();
                } else {
                    $('.error-message').fadeIn().delay(3000).fadeOut();
                }
            },
            error: function() {
                $('#submitBtn').prop('disabled', false).text('Send Message');
                $('.error-message').fadeIn().delay(3000).fadeOut();
            }
        });
    });
    
    // Property filter functionality
    $('.property-filter').on('change', function() {
        var filterValue = $(this).val();
        $('.property-card').hide();
        
        if (filterValue === 'all') {
            $('.property-card').show();
        } else {
            $('.property-card[data-category="' + filterValue + '"]').show();
        }
    });
    
    // Image lazy loading
    if ('IntersectionObserver' in window) {
        let imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    let image = entry.target;
                    image.src = image.dataset.src;
                    image.classList.remove('lazy');
                    imageObserver.unobserve(image);
                }
            });
        });
        
        document.querySelectorAll('img.lazy').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // Counter animation for statistics
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        let increment = target / (duration / 16);
        let current = start;
        
        let timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.text(Math.floor(current) + (element.text().includes('+') ? '+' : ''));
        }, 16);
    }
    
    // Trigger counter animation when stats are visible
    let statsAnimated = false;
    $(window).scroll(function() {
        if (!statsAnimated && $('.statistics').length) {
            var statsTop = $('.statistics').offset().top;
            var statsBottom = statsTop + $('.statistics').outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            
            if (statsBottom > viewportTop && statsTop < viewportBottom) {
                statsAnimated = true;
                $('.stat-number').each(function() {
                    var text = $(this).text();
                    var number = parseInt(text.replace(/\D/g, ''));
                    animateCounter($(this), number);
                });
            }
        }
    });
    
    // Gallery lightbox
    $('.gallery-item').on('click', function() {
        var imgSrc = $(this).find('img').attr('src');
        var lightbox = $('<div class="lightbox"><img src="' + imgSrc + '" alt="Gallery Image"><button class="lightbox-close">&times;</button></div>');
        $('body').append(lightbox);
        
        $('.lightbox').on('click', function() {
            $(this).remove();
        });
        
        $('.lightbox-close').on('click', function(e) {
            e.stopPropagation();
            $('.lightbox').remove();
        });
    });
    
    // Form field focus effects
    $('input, textarea').on('focus', function() {
        $(this).parent().addClass('focused');
    }).on('blur', function() {
        if ($(this).val() === '') {
            $(this).parent().removeClass('focused');
        }
    });
    
    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
    
    $('.back-to-top').on('click', function() {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
    
});
