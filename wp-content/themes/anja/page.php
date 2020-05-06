
<?php

get_header();

	while(have_posts()){
		the_post();
				
	?>
    <div class="ct"></div>
    <div class="cr"></div>
    <div class="cb"></div>
    <div class="cl"></div>
	  <div class="container">

            <?php get_sidebar();?>

	    <div class="container--narrow ">
				<?php the_content(); ?>
		</div>

	  </div>

	<?php }

get_footer();

?>