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
       
  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
         the_post_thumbnail(); 
            the_content();
  
        endwhile;
        ?>
  
     
    </div><!-- .content-area -->
  
<?php get_footer(); ?>