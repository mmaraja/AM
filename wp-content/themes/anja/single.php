<?php
/**
 * The template for displaying all single posts and attachments
 */
  
get_header(); ?>
    <div class="ct"></div>
    <div class="cr"></div>
    <div class="cb"></div>
    <div class="cl"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-1 puscica nazaj" ><?php do_action('back_button'); ?></div>
            <div class="col-lg-11 col-md-11 col-sm-11">
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