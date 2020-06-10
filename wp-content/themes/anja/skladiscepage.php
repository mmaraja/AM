
<?php
/* Template name: skladiscepage */
get_header();

	while(have_posts()){
		the_post();
				
	?>
    <div class="ct"></div>
    <div class="cr"></div>
    <div class="cb"></div>
    <div class="cl"></div>
	  <div class="container-fluid content-wrapper">
		<div class="row">
			<div class="offset-lg-2 offset-1 col-lg-4 col-sm-10 col-md-10 ">
				<div class="pagename"><?php echo get_the_title($theParent); ?></div>
				<?php the_content() ?>
					<?php 
						// Set the arguments for the query
						$argsSklad = array( 
						'numberposts'		=> -1, // -1 is for all
						'post_type'		=> 'warehouse', // or 'post', 'page'
						'orderby' 		=> 'date', // or 'date', 'rand'
						'order' 		=> 'ASC', // or 'DESC'     

						);
						
						// Get the posts
						$mypostsSklad = get_posts($argsSklad); ?>
						
						<? // If there are posts
						if($mypostsSklad):?>
				
						
						<div class="col-sm-12 col-lg-4 col-md-10" >
							<?php foreach ($mypostsSklad as $mypostSklad):
							$post_content = get_post($mypostSklad);
						
							?> 
							<!-- Content -->
							<div><a class="type-sklad" href="<?php echo get_permalink($mypostSklad->ID); ?>"><?php echo get_the_title($mypostSklad->ID); ?></a></div>

							<?php endforeach; wp_reset_postdata(); ?>
						
						</div>
					
				
					<?php endif; ?>
			
				
			</div>	
			
		</div>
	  </div>

	<?php }

get_footer();

?>