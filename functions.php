<?php

// Add basic SEO and Performance enhancements
function estatein_performance_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    
    // Enable support for title tag
    add_theme_support('title-tag');
    
    // Enable support for HTML5 semantic markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}
add_action('after_setup_theme', 'estatein_performance_setup');

// Defer parsing of JavaScript for performance
function estatein_defer_scripts($tag, $handle) {
    if (is_admin()) return $tag;
    if (strpos($tag, 'estatein-script') !== false) {
        return str_replace(' src', ' defer="defer" src', $tag);
    }
    return $tag;
}
add_filter('script_loader_tag', 'estatein_defer_scripts', 10, 2);

// Theme Setup
function estatein_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    
    // Enable support for title tag
    add_theme_support('title-tag');
    
    // Enable support for HTML5 semantic markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'estatein'),
        'footer-menu' => __('Footer Menu', 'estatein'),
    ));
}
add_action('after_setup_theme', 'estatein_theme_setup');

// Enqueue scripts and styles
function estatein_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('estatein-style', get_stylesheet_uri());
    
    // Enqueue Google Fonts
    wp_enqueue_style('estatein-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null);
    
    // Enqueue custom JavaScript
    wp_enqueue_script('estatein-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('estatein-script', 'estatein_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('estatein_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'estatein_scripts');

    // Default menu fallback
function estatein_default_menu() {
    echo '<ul class="primary-menu">';
    echo '<li><a href="' . home_url('/') . '">Home</a></li>';
    echo '<li><a href="' . home_url('/about') . '">About Us</a></li>';
    echo '<li><a href="' . home_url('/properties') . '">Properties</a></li>';
    echo '<li><a href="' . home_url('/services') . '">Services</a></li>';
    echo '<li><a href="' . home_url('/blog') . '">Blog</a></li>';
    echo '<li><a href="' . home_url('/dashboard') . '">Dashboard</a></li>';
    echo '</ul>';
}

// Custom comment template
function estatein_custom_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>" style="margin-bottom: 24px; padding-bottom: 24px; border-bottom: 1px solid #262626;">
        <div id="comment-<?php comment_ID(); ?>" class="comment-body" style="display: flex; gap: 20px;">
            <div class="comment-author-avatar">
                <?php echo get_avatar($comment, 50, '', '', array('style' => 'border-radius: 50%;')); ?>
            </div>
            <div class="comment-content-wrap" style="flex-grow: 1;">
                <div class="comment-meta" style="margin-bottom: 8px; display: flex; justify-content: space-between; align-items: center;">
                    <b class="fn" style="color: #fff; font-size: 16px;"><?php echo get_comment_author_link(); ?></b>
                    <div class="comment-metadata" style="font-size: 12px; color: #999;">
                        <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>" style="color: #999; text-decoration: none;">
                            <?php printf('%1$s at %2$s', get_comment_date(), get_comment_time()); ?>
                        </a>
                    </div>
                </div>
                <div class="comment-content" style="color: #e6e6e6; line-height: 1.6; margin-bottom: 12px;">
                    <?php comment_text(); ?>
                </div>
                <div class="reply" style="font-size: 14px;">
                    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => 'Reply &darr;'))); ?>
                </div>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em style="color: #ffc107; font-size: 12px; display: block; margin-top: 8px;">Your comment is awaiting moderation.</em>
                <?php endif; ?>
            </div>
        </div>
    <?php
}

// Auto-create Dashboard page on theme activation or init
function estatein_create_dashboard_page() {
    $page_slug = 'dashboard';
    $page_title = 'Dashboard';
    
    // Check if page exists
    $page = get_page_by_path($page_slug);
    
    if (!$page) {
        $page_id = wp_insert_post(array(
            'post_title'     => $page_title,
            'post_name'      => $page_slug,
            'post_status'    => 'publish',
            'post_type'      => 'page',
        ));
        
        if ($page_id && !is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', 'page-dashboard.php');
        }
    }
}
add_action('after_setup_theme', 'estatein_create_dashboard_page');

// Custom Post Types
function estatein_custom_post_types() {
    // Properties Post Type
    register_post_type('property', array(
        'labels' => array(
            'name' => __('Properties', 'estatein'),
            'singular_name' => __('Property', 'estatein'),
            'add_new' => __('Add New Property', 'estatein'),
            'add_new_item' => __('Add New Property', 'estatein'),
            'edit_item' => __('Edit Property', 'estatein'),
            'new_item' => __('New Property', 'estatein'),
            'view_item' => __('View Property', 'estatein'),
            'search_items' => __('Search Properties', 'estatein'),
            'not_found' => __('No properties found', 'estatein'),
            'not_found_in_trash' => __('No properties found in Trash', 'estatein'),
            'parent_item_colon' => __('Parent Property:', 'estatein'),
            'menu_name' => __('Properties', 'estatein'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'properties'),
    ));
    
    // Services Post Type
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services', 'estatein'),
            'singular_name' => __('Service', 'estatein'),
            'add_new' => __('Add New Service', 'estatein'),
            'add_new_item' => __('Add New Service', 'estatein'),
            'edit_item' => __('Edit Service', 'estatein'),
            'new_item' => __('New Service', 'estatein'),
            'view_item' => __('View Service', 'estatein'),
            'search_items' => __('Search Services', 'estatein'),
            'not_found' => __('No services found', 'estatein'),
            'not_found_in_trash' => __('No services found in Trash', 'estatein'),
            'parent_item_colon' => __('Parent Service:', 'estatein'),
            'menu_name' => __('Services', 'estatein'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'services'),
    ));
}
add_action('init', 'estatein_custom_post_types');

// Customizer settings
function estatein_customize_register($wp_customize) {
    // Logo settings
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    
    // Add custom colors
    $wp_customize->add_section('estatein_colors', array(
        'title' => __('Theme Colors', 'estatein'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('estatein_primary_color', array(
        'default' => '#6366f1',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'estatein_primary_color', array(
        'label' => __('Primary Color', 'estatein'),
        'section' => 'estatein_colors',
        'settings' => 'estatein_primary_color',
    )));
}
add_action('customize_register', 'estatein_customize_register');

// Widget Areas
function estatein_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'estatein'),
        'id' => 'footer-widgets',
        'description' => __('Widgets displayed in the footer area', 'estatein'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'estatein_widgets_init');

// Theme options page
function estatein_theme_options_page() {
    add_theme_page(
        'Estatein Theme Options',
        'Theme Options',
        'manage_options',
        'estatein-options',
        'estatein_theme_options_html'
    );
}
add_action('admin_menu', 'estatein_theme_options_page');

function estatein_theme_options_html() {
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <p>Estatein Theme Options</p>
        <form action="options.php" method="post">
            <?php
            settings_fields('estatein_options');
            do_settings_sections('estatein_options');
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}

// Contact form handler
function estatein_handle_contact_form() {
    if (!wp_verify_nonce($_POST['nonce'], 'estatein_contact_nonce')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);
    
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from Estatein';
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    wp_mail($to, $subject, $body, $headers);
    
    wp_redirect(home_url('/thank-you'));
    exit;
}
add_action('admin_post_estatein_contact', 'estatein_handle_contact_form');

?>
