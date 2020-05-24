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
            <div class="col-lg-12 col-sm-12" style="padding-left:200px; padding-right:50px">
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
            <!-- <div class="col-lg-5">
                <span class="border">
                
                    <a><?php echo get_the_post_thumbnail($post_id, 'phot'); ?></a>

                </span>
            </div> -->
           
        </div>        
     
    </div><!-- .content-area -->
  
<?php get_footer(); ?>