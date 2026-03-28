<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <!-- Top Banner -->
    <div class="top-banner" id="topBanner">
        <div class="top-banner-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/line-background.png');"></div>
        <div class="container">
            <div class="top-banner-content">
                <span>✨ Discover Your Dream Property with Estatein</span>
                <a href="#" class="learn-more-link">Learn More</a>
            </div>
            <button class="close-banner" onclick="document.getElementById('topBanner').style.display='none'">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="12" fill="#262626"/>
                    <path d="M16 8L8 16" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8 8L16 16" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <a href="<?php echo home_url('/'); ?>" class="logo">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#703BF7"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 20C10 14.4772 14.4772 10 20 10C25.5228 10 30 14.4772 30 20C30 25.5228 25.5228 30 20 30C14.4772 30 10 25.5228 10 20ZM14.4444 20C14.4444 23.0681 16.9319 25.5556 20 25.5556C23.0681 25.5556 25.5556 23.0681 25.5556 20C25.5556 16.9319 23.0681 14.4444 20 14.4444C16.9319 14.4444 14.4444 16.9319 14.4444 20Z" fill="white"/>
                    </svg>
                    <span>Estatein</span>
                </a>
                
                <nav>
                    <ul class="primary-menu">
                        <li><a href="<?php echo home_url('/'); ?>" class="active">Home</a></li>
                        <li><a href="<?php echo home_url('/about'); ?>">About Us</a></li>
                        <li><a href="<?php echo home_url('/properties'); ?>">Properties</a></li>
                        <li><a href="<?php echo home_url('/services'); ?>">Services</a></li>
                    </ul>
                </nav>
                
                <a href="#contact" class="contact-btn">Contact Us</a>
            </div>
        </div>
    </header>
