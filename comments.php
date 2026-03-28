<?php
/**
 * The template for displaying comments
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid #262626;">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title" style="font-size: 24px; margin-bottom: 30px; color: #fff;">
            <?php
            $comment_count = get_comments_number();
            echo esc_html( $comment_count ) . ' Comment' . ($comment_count > 1 ? 's' : '');
            ?>
        </h2>

        <ol class="comment-list" style="list-style: none; padding: 0; margin: 0;">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
                'callback'    => 'estatein_custom_comment'
            ) );
            ?>
        </ol>

        <?php
        the_comments_pagination( array(
            'before_page_number' => esc_html__( 'Page', 'estatein' ) . ' ',
        ) );
        ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
        <p class="no-comments" style="color: #999; margin-top: 20px;"><?php esc_html_e( 'Comments are closed.', 'estatein' ); ?></p>
    <?php endif; ?>

    <?php
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields =  array(
        'author' => '<div class="form-group" style="margin-bottom: 20px;"><label for="author" style="display:block; margin-bottom: 8px; color: #e6e6e6;">Name *</label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' style="width: 100%; padding: 12px; background-color: #141414; border: 1px solid #262626; border-radius: 8px; color: #fff;" /></div>',
        'email'  => '<div class="form-group" style="margin-bottom: 20px;"><label for="email" style="display:block; margin-bottom: 8px; color: #e6e6e6;">Email *</label><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' style="width: 100%; padding: 12px; background-color: #141414; border: 1px solid #262626; border-radius: 8px; color: #fff;" /></div>',
    );

    comment_form( array(
        'fields' => $fields,
        'comment_field' => '<div class="form-group" style="margin-bottom: 20px;"><label for="comment" style="display:block; margin-bottom: 8px; color: #e6e6e6;">Comment</label><textarea id="comment" name="comment" cols="45" rows="6" aria-required="true" style="width: 100%; padding: 12px; background-color: #141414; border: 1px solid #262626; border-radius: 8px; color: #fff;"></textarea></div>',
        'class_submit'  => 'submit-btn',
        'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" style="background-color: #703BF7; color: white; border: none; padding: 12px 24px; border-radius: 8px; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease;">%4$s</button>',
        'title_reply'   => '<h3 style="font-size: 20px; margin-bottom: 20px; color: #fff;">Leave a Reply</h3>',
        'title_reply_to'=> '<h3 style="font-size: 20px; margin-bottom: 20px; color: #fff;">Leave a Reply to %s</h3>',
        'cancel_reply_link' => '<span style="font-size: 14px; font-weight: normal; color: #999; margin-left: 12px;">Cancel Reply</span>',
    ) );
    ?>

</div>