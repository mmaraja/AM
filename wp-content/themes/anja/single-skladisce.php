<?php
/**
 * The template for displaying all single posts and attachments
 *
 */
  
get_header(); ?>
    <div class="ct"></div>
    <div class="cr"></div>
    <div class="cb"></div>
    <div class="cl"></div>
    <div class="container">
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="pagename"><?php echo get_the_title( $post_id ); ?></div>
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
  
<?php get_footer(); ?>