<?php
/**
 * Template Name: Frontend Dashboard
 */

$post_msg = '';
$action = isset($_GET['action']) ? sanitize_text_field($_GET['action']) : 'list';
$edit_post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;

// Handle Post Deletion
if ($action === 'delete' && $edit_post_id) {
    if (isset($_GET['_wpnonce']) && wp_verify_nonce($_GET['_wpnonce'], 'delete_post_' . $edit_post_id)) {
        $post_author = get_post_field('post_author', $edit_post_id);
        if ($post_author == get_current_user_id() || current_user_can('delete_others_posts')) {
            wp_trash_post($edit_post_id);
            $post_msg = '<div style="background: rgba(40, 167, 69, 0.1); border: 1px solid #28a745; color: #28a745; padding: 16px; border-radius: 8px; margin-bottom: 24px;">Post deleted successfully.</div>';
        }
    }
    $action = 'list';
}

// Handle Form Submission (Create/Edit)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_frontend_post'])) {
    if (isset($_POST['frontend_post_nonce']) && wp_verify_nonce($_POST['frontend_post_nonce'], 'submit_frontend_post_action')) {
        if (is_user_logged_in()) {
            $title = sanitize_text_field($_POST['post_title']);
            $content = wp_kses_post($_POST['post_content']);
            $category_id = isset($_POST['post_category']) ? intval($_POST['post_category']) : 0;
            $cover_url = esc_url_raw($_POST['cover_image_url']);
            $post_id_to_edit = isset($_POST['edit_post_id']) ? intval($_POST['edit_post_id']) : 0;

            if (!empty($title) && !empty($content)) {
                $post_data = array(
                    'post_title'    => $title,
                    'post_content'  => $content,
                    'post_status'   => 'publish',
                    'post_type'     => 'post',
                    'post_author'   => get_current_user_id()
                );

                if ($post_id_to_edit > 0) {
                    $post_data['ID'] = $post_id_to_edit;
                    $post_id = wp_update_post($post_data);
                    $success_msg = 'Post updated successfully!';
                } else {
                    $post_id = wp_insert_post($post_data);
                    $success_msg = 'Post published successfully!';
                }

                if (!is_wp_error($post_id)) {
                    // Set category
                    if ($category_id > 0) {
                        wp_set_post_categories($post_id, array($category_id));
                    }
                    
                    // Set Cover URL
                    if (!empty($cover_url)) {
                        update_post_meta($post_id, '_cover_image_url', $cover_url);
                    } else {
                        delete_post_meta($post_id, '_cover_image_url');
                    }

                    // Handle File Upload
                    if (!empty($_FILES['cover_image_file']['name'])) {
                        require_once(ABSPATH . 'wp-admin/includes/image.php');
                        require_once(ABSPATH . 'wp-admin/includes/file.php');
                        require_once(ABSPATH . 'wp-admin/includes/media.php');
                        
                        $attachment_id = media_handle_upload('cover_image_file', $post_id);
                        if (!is_wp_error($attachment_id)) {
                            set_post_thumbnail($post_id, $attachment_id);
                        }
                    }

                    $post_msg = '<div style="background: rgba(40, 167, 69, 0.1); border: 1px solid #28a745; color: #28a745; padding: 16px; border-radius: 8px; margin-bottom: 24px;">' . $success_msg . ' <a href="'.get_permalink($post_id).'" style="color: #28a745; text-decoration: underline; font-weight: bold;">View Post</a></div>';
                    $action = 'list'; // Redirect to list view
                } else {
                    $post_msg = '<div style="background: rgba(220, 53, 69, 0.1); border: 1px solid #dc3545; color: #dc3545; padding: 16px; border-radius: 8px; margin-bottom: 24px;">Error publishing post. Please try again.</div>';
                    $action = $post_id_to_edit > 0 ? 'edit' : 'new';
                }
            } else {
                $post_msg = '<div style="background: rgba(255, 193, 7, 0.1); border: 1px solid #ffc107; color: #ffc107; padding: 16px; border-radius: 8px; margin-bottom: 24px;">Please fill in all required fields.</div>';
                $action = $post_id_to_edit > 0 ? 'edit' : 'new';
            }
        }
    }
}

get_header();
?>

<div class="dashboard-container" style="padding: 80px 0; background-color: #0a0a0a; min-height: 80vh;">
    <div class="container" style="max-width: 900px; margin: 0 auto;">
        
        <header class="dashboard-header" style="margin-bottom: 40px; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h1 style="font-size: 36px; margin-bottom: 8px;">Author Dashboard</h1>
                <p style="color: #999;">Manage, write, and publish your blog posts.</p>
            </div>
            <?php if (is_user_logged_in() && $action === 'list') : ?>
                <a href="?action=new" class="btn" style="background-color: #703BF7; color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; font-weight: 600;">+ Create New Post</a>
            <?php endif; ?>
        </header>

        <?php echo $post_msg; ?>

        <div class="dashboard-card" style="background-color: #1a1a1a; border: 1px solid #262626; border-radius: 12px; padding: 40px;">
            <?php if (is_user_logged_in()) : ?>
                
                <?php if ($action === 'list') : ?>
                    <!-- List Posts -->
                    <div class="posts-list">
                        <h2 style="font-size: 24px; margin-bottom: 24px; border-bottom: 1px solid #262626; padding-bottom: 16px;">My Posts</h2>
                        <?php
                        $user_posts = new WP_Query(array(
                            'author' => get_current_user_id(),
                            'post_type' => 'post',
                            'post_status' => array('publish', 'pending', 'draft', 'future', 'private'),
                            'posts_per_page' => -1
                        ));

                        if ($user_posts->have_posts()) :
                            echo '<ul style="list-style: none; padding: 0;">';
                            while ($user_posts->have_posts()) : $user_posts->the_post();
                                ?>
                                <li style="display: flex; justify-content: space-between; align-items: center; padding: 16px; border-bottom: 1px solid #262626; transition: background-color 0.3s ease;">
                                    <div>
                                        <h3 style="font-size: 18px; margin-bottom: 4px;"><a href="<?php the_permalink(); ?>" style="color: #fff; text-decoration: none;" target="_blank"><?php the_title(); ?></a></h3>
                                        <span style="font-size: 12px; color: #999;"><?php echo get_the_date(); ?> &middot; Status: <?php echo get_post_status(); ?></span>
                                    </div>
                                    <div style="display: flex; gap: 12px;">
                                        <a href="?action=edit&post_id=<?php echo get_the_ID(); ?>" style="color: #703BF7; text-decoration: none; font-size: 14px; font-weight: 500;">Edit</a>
                                        <a href="?action=delete&post_id=<?php echo get_the_ID(); ?>&_wpnonce=<?php echo wp_create_nonce('delete_post_' . get_the_ID()); ?>" onclick="return confirm('Are you sure you want to delete this post?');" style="color: #dc3545; text-decoration: none; font-size: 14px; font-weight: 500;">Delete</a>
                                    </div>
                                </li>
                                <?php
                            endwhile;
                            echo '</ul>';
                            wp_reset_postdata();
                        else :
                            echo '<p style="color: #999;">You have not published any posts yet.</p>';
                        endif;
                        ?>
                    </div>

                <?php elseif ($action === 'new' || $action === 'edit') : 
                    
                    $edit_title = '';
                    $edit_content = '';
                    $edit_category = 0;
                    $edit_cover_url = '';
                    $form_title = 'Create New Post';
                    
                    if ($action === 'edit' && $edit_post_id) {
                        $post_to_edit = get_post($edit_post_id);
                        if ($post_to_edit && ($post_to_edit->post_author == get_current_user_id() || current_user_can('edit_others_posts'))) {
                            $edit_title = $post_to_edit->post_title;
                            $edit_content = $post_to_edit->post_content;
                            $categories = wp_get_post_categories($edit_post_id);
                            if (!empty($categories)) $edit_category = $categories[0];
                            $edit_cover_url = get_post_meta($edit_post_id, '_cover_image_url', true);
                            $form_title = 'Edit Post';
                        } else {
                            echo '<p style="color: #dc3545;">You do not have permission to edit this post.</p>';
                            $action = 'list';
                        }
                    }
                    
                    if ($action !== 'list') :
                ?>
                    <!-- Form -->
                    <h2 style="font-size: 24px; margin-bottom: 24px; border-bottom: 1px solid #262626; padding-bottom: 16px;"><?php echo $form_title; ?></h2>
                    <form method="post" action="" enctype="multipart/form-data" class="frontend-post-form">
                        <?php wp_nonce_field('submit_frontend_post_action', 'frontend_post_nonce'); ?>
                        <?php if ($action === 'edit') : ?>
                            <input type="hidden" name="edit_post_id" value="<?php echo $edit_post_id; ?>">
                        <?php endif; ?>
                        
                        <div class="form-group" style="margin-bottom: 24px;">
                            <label for="post_title" style="display: block; margin-bottom: 8px; font-weight: 500; color: #e6e6e6;">Post Title *</label>
                            <input type="text" id="post_title" name="post_title" required value="<?php echo esc_attr($edit_title); ?>" placeholder="Enter an engaging title..." style="width: 100%; padding: 14px; background-color: #141414; border: 1px solid #262626; border-radius: 8px; color: #fff; font-family: inherit; font-size: 16px;">
                        </div>

                        <div class="form-group" style="margin-bottom: 24px;">
                            <label for="post_category" style="display: block; margin-bottom: 8px; font-weight: 500; color: #e6e6e6;">Category</label>
                            <?php 
                            wp_dropdown_categories(array(
                                'name' => 'post_category',
                                'id' => 'post_category',
                                'selected' => $edit_category,
                                'show_option_none' => 'Select a Category',
                                'hide_empty' => 0,
                                'class' => 'custom-select',
                            )); 
                            ?>
                            <style>
                                .custom-select { width: 100%; padding: 14px; background-color: #141414; border: 1px solid #262626; border-radius: 8px; color: #fff; font-family: inherit; font-size: 16px; appearance: none; }
                            </style>
                        </div>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
                            <div class="form-group">
                                <label for="cover_image_file" style="display: block; margin-bottom: 8px; font-weight: 500; color: #e6e6e6;">Upload Cover Image</label>
                                <input type="file" id="cover_image_file" name="cover_image_file" accept="image/*" style="width: 100%; padding: 11px; background-color: #141414; border: 1px solid #262626; border-radius: 8px; color: #999; font-family: inherit;">
                                <small style="color: #666; display: block; margin-top: 6px;">Overrides URL link if both are provided.</small>
                            </div>
                            
                            <div class="form-group">
                                <label for="cover_image_url" style="display: block; margin-bottom: 8px; font-weight: 500; color: #e6e6e6;">Or Provide Image URL Link</label>
                                <input type="url" id="cover_image_url" name="cover_image_url" value="<?php echo esc_url($edit_cover_url); ?>" placeholder="https://example.com/image.jpg" style="width: 100%; padding: 14px; background-color: #141414; border: 1px solid #262626; border-radius: 8px; color: #fff; font-family: inherit; font-size: 16px;">
                            </div>
                        </div>
                        
                        <div class="form-group" style="margin-bottom: 24px;">
                            <label for="post_content" style="display: block; margin-bottom: 8px; font-weight: 500; color: #e6e6e6;">Post Content *</label>
                            <textarea id="post_content" name="post_content" required rows="12" placeholder="Write your post content here..." style="width: 100%; padding: 14px; background-color: #141414; border: 1px solid #262626; border-radius: 8px; color: #fff; font-family: inherit; font-size: 16px; resize: vertical; line-height: 1.6;"><?php echo esc_textarea($edit_content); ?></textarea>
                        </div>
                        
                        <div class="form-actions" style="display: flex; justify-content: flex-end; align-items: center; gap: 16px; margin-top: 32px;">
                            <a href="?action=list" style="color: #999; text-decoration: none; font-weight: 500;">Cancel</a>
                            <button type="submit" name="submit_frontend_post" style="background-color: #703BF7; color: white; border: none; padding: 14px 32px; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease;"><?php echo $action === 'edit' ? 'Update Post' : 'Publish Post'; ?></button>
                        </div>
                    </form>
                    <?php endif; ?>
                <?php endif; ?>

            <?php else : ?>
                <div class="login-prompt" style="text-align: center;">
                    <p style="color: #e6e6e6; margin-bottom: 24px; font-size: 18px;">You must be logged in to manage posts.</p>
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