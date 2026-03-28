<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
?>

<div class="single-post-container" style="padding: 60px 0;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header" style="margin-bottom: 40px; text-align: center;">
                    <?php
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo '<div class="post-categories" style="margin-bottom: 16px;">';
                        foreach( $categories as $category ) {
                            echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" style="background-color: #1a1a1a; border: 1px solid #262626; padding: 4px 12px; border-radius: 20px; font-size: 12px; color: #999; text-decoration: none; margin-right: 8px;">' . esc_html( $category->name ) . '</a>';
                        }
                        echo '</div>';
                    }
                    ?>
                    
                    <h1 class="entry-title" style="font-size: 42px; margin-bottom: 24px; line-height: 1.2;"><?php the_title(); ?></h1>
                    
                    <div class="entry-meta" style="color: #999; font-size: 14px; display: flex; justify-content: center; gap: 24px; align-items: center;">
                        <span class="posted-on">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle; margin-right: 4px;"><path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 2V6" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 2V6" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 10H21" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <?php echo get_the_date(); ?>
                        </span>
                        <span class="byline">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle; margin-right: 4px;"><path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <?php the_author(); ?>
                        </span>
                    </div>
                </header>
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail" style="margin-bottom: 40px; border-radius: 12px; overflow: hidden; border: 1px solid #262626;">
                        <?php the_post_thumbnail('full', ['style' => 'width: 100%; height: auto; display: block;']); ?>
                    </div>
                <?php endif; ?>
                
                <div class="entry-content" style="font-size: 18px; line-height: 1.8; color: #e6e6e6;">
                    <?php
                    the_content();
                    
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'estatein' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>
                
                <footer class="entry-footer" style="margin-top: 60px; padding-top: 30px; border-top: 1px solid #262626; display: flex; justify-content: space-between; align-items: center;">
                    <div class="post-tags">
                        <?php
                        $tags = get_the_tags();
                        if ( $tags ) {
                            echo '<span style="color: #fff; font-weight: 500; margin-right: 12px;">Tags:</span>';
                            foreach ( $tags as $tag ) {
                                echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" style="color: #999; text-decoration: none; margin-right: 12px;">#' . esc_html( $tag->name ) . '</a>';
                            }
                        }
                        ?>
                    </div>
                </footer>
                
            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            
        endwhile; // End of the loop.
        ?>
        
    </div>
</div>

<?php
get_footer();
