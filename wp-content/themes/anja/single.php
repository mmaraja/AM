<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header(); ?>
    <div class="ct"></div>
    <div class="cr"></div>
    <div class="cb"></div>
    <div class="cl"></div>
    <div class="container">
    <div class="row">
            <div class="col-lg-3" id="single-post">
            <div class="postname"><?php echo get_the_title( $post_id ); ?></div>
            <div class="post-content">
                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();
                    the_content(); 
                endwhile;
                ?>      
            </div>
            </div>
        </div>
     
    </div><!-- .content-area -->
  
<?php get_footer(); ?>