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
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
            the_content(); 
        endwhile;
        ?>      
    </div>
  
<?php get_footer(); ?>