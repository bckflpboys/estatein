<?php
/**
 * Template Name: Frontend Dashboard
 */

// Handle Form Submission
$post_msg = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_frontend_post'])) {
    if (isset($_POST['frontend_post_nonce']) && wp_verify_nonce($_POST['frontend_post_nonce'], 'submit_frontend_post_action')) {
        
        // Ensure user is logged in
        if (is_user_logged_in()) {
            $title = sanitize_text_field($_POST['post_title']);
            $content = wp_kses_post($_POST['post_content']);
            
            if (!empty($title) && !empty($content)) {
                $new_post = array(
                    'post_title'    => $title,
                    'post_content'  => $content,
                    'post_status'   => 'publish', // Automatically publish. Change to 'draft' if you want to review first.
                    'post_type'     => 'post',
                    'post_author'   => get_current_user_id()
                );
                
                $post_id = wp_insert_post($new_post);
                
                if (!is_wp_error($post_id)) {
                    $post_msg = '<div style="background: rgba(40, 167, 69, 0.1); border: 1px solid #28a745; color: #28a745; padding: 16px; border-radius: 8px; margin-bottom: 24px;">Post published successfully! <a href="'.get_permalink($post_id).'" style="color: #28a745; text-decoration: underline; font-weight: bold;">View Post</a></div>';
                } else {
                    $post_msg = '<div style="background: rgba(220, 53, 69, 0.1); border: 1px solid #dc3545; color: #dc3545; padding: 16px; border-radius: 8px; margin-bottom: 24px;">Error publishing post. Please try again.</div>';
                }
            } else {
                $post_msg = '<div style="background: rgba(255, 193, 7, 0.1); border: 1px solid #ffc107; color: #ffc107; padding: 16px; border-radius: 8px; margin-bottom: 24px;">Please fill in all required fields.</div>';
            }
        }
    }
}

get_header();
?>

<div class="dashboard-container" style="padding: 80px 0; background-color: #0a0a0a; min-height: 80vh;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        
        <header class="dashboard-header" style="margin-bottom: 40px; text-align: center;">
            <h1 style="font-size: 36px; margin-bottom: 16px;">Author Dashboard</h1>
            <p style="color: #999;">Write and publish your blog posts directly from the frontend.</p>
        </header>

        <?php echo $post_msg; ?>

        <div class="dashboard-card" style="background-color: #1a1a1a; border: 1px solid #262626; border-radius: 12px; padding: 40px;">
            <?php if (is_user_logged_in()) : ?>
                <form method="post" action="" class="frontend-post-form">
                    <?php wp_nonce_field('submit_frontend_post_action', 'frontend_post_nonce'); ?>
                    
                    <div class="form-group" style="margin-bottom: 24px;">
                        <label for="post_title" style="display: block; margin-bottom: 8px; font-weight: 500; color: #e6e6e6;">Post Title *</label>
                        <input type="text" id="post_title" name="post_title" required placeholder="Enter an engaging title..." style="width: 100%; padding: 14px; background-color: #141414; border: 1px solid #262626; border-radius: 8px; color: #fff; font-family: inherit; font-size: 16px;">
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 24px;">
                        <label for="post_content" style="display: block; margin-bottom: 8px; font-weight: 500; color: #e6e6e6;">Post Content *</label>
                        <textarea id="post_content" name="post_content" required rows="12" placeholder="Write your post content here..." style="width: 100%; padding: 14px; background-color: #141414; border: 1px solid #262626; border-radius: 8px; color: #fff; font-family: inherit; font-size: 16px; resize: vertical; line-height: 1.6;"></textarea>
                    </div>
                    
                    <div class="form-actions" style="display: flex; justify-content: flex-end; align-items: center; gap: 16px; margin-top: 32px;">
                        <a href="<?php echo home_url('/blog'); ?>" style="color: #999; text-decoration: none; font-weight: 500;">Cancel</a>
                        <button type="submit" name="submit_frontend_post" style="background-color: #703BF7; color: white; border: none; padding: 14px 32px; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease;">Publish Post</button>
                    </div>
                </form>
            <?php else : ?>
                <div class="login-prompt" style="text-align: center;">
                    <p style="color: #e6e6e6; margin-bottom: 24px; font-size: 18px;">You must be logged in to publish a post.</p>
                    <div class="login-box" style="background-color: #141414; padding: 30px; border-radius: 8px; border: 1px solid #262626; max-width: 400px; margin: 0 auto; text-align: left;">
                        <?php 
                        wp_login_form(array(
                            'redirect' => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                            'form_id' => 'frontend-login-form',
                            'label_username' => __( 'Username' ),
                            'label_password' => __( 'Password' ),
                            'label_remember' => __( 'Remember Me' ),
                            'label_log_in'   => __( 'Log In' ),
                        )); 
                        ?>
                        <style>
                            #frontend-login-form p { margin-bottom: 16px; }
                            #frontend-login-form label { display: block; margin-bottom: 8px; color: #e6e6e6; font-size: 14px; }
                            #frontend-login-form input[type="text"], #frontend-login-form input[type="password"] { width: 100%; padding: 12px; background: #0a0a0a; border: 1px solid #262626; border-radius: 6px; color: white; font-family: inherit; }
                            #frontend-login-form .login-remember { display: flex; align-items: center; gap: 8px; }
                            #frontend-login-form .login-remember label { margin-bottom: 0; }
                            #frontend-login-form .login-submit { margin-bottom: 0; margin-top: 24px; }
                            #frontend-login-form input[type="submit"] { background: #703BF7; color: white; border: none; padding: 12px 24px; border-radius: 6px; cursor: pointer; font-weight: 600; width: 100%; transition: background-color 0.3s ease; }
                            #frontend-login-form input[type="submit"]:hover { background: #5a2fc7; }
                        </style>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>