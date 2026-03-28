<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

<!-- Blog Header Section -->
<section class="page-header" style="background-color: #1a1a1a; padding: 60px 0; border-bottom: 1px solid #262626;">
    <div class="container">
        <h1 style="font-size: 38px; margin-bottom: 16px;">Our Latest Blogs</h1>
        <p style="color: #999;">Insights, news, and tips from the real estate experts at Estatein.</p>
    </div>
</section>

<!-- Blog Content Section -->
<section class="blog-archive" style="padding: 60px 0;">
    <div class="container">
        <div class="blog-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 30px;">
            <?php
            if ( have_posts() ) :
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?> style="background-color: #1a1a1a; border: 1px solid #262626; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column;">
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="blog-thumbnail" style="width: 100%; height: 240px; overflow: hidden;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', ['style' => 'width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;']); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="blog-content" style="padding: 24px; display: flex; flex-direction: column; flex-grow: 1;">
                            <div class="blog-meta" style="font-size: 14px; color: #999; margin-bottom: 12px; display: flex; gap: 16px;">
                                <span class="blog-date"><?php echo get_the_date(); ?></span>
                                <span class="blog-author">By <?php the_author(); ?></span>
                            </div>
                            
                            <h2 class="blog-title" style="font-size: 20px; margin-bottom: 16px; line-height: 1.4;">
                                <a href="<?php the_permalink(); ?>" style="color: #fff; text-decoration: none; transition: color 0.3s ease;"><?php the_title(); ?></a>
                            </h2>
                            
                            <div class="blog-excerpt" style="color: #999; margin-bottom: 24px; font-size: 15px; line-height: 1.6; flex-grow: 1;">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="btn btn-secondary" style="align-self: flex-start; padding: 10px 20px; background-color: #141414; border: 1px solid #262626; border-radius: 8px; color: #fff; text-decoration: none; font-size: 14px; font-weight: 500; transition: all 0.3s ease;">Read More</a>
                        </div>
                    </article>
                    <?php
                endwhile;

                // Pagination
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'estatein' ),
                    'next_text'          => __( 'Next page', 'estatein' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'estatein' ) . ' </span>',
                ) );

            else :
                ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'estatein' ); ?></p>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
