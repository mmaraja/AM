
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
		<div class="row">
			<div class="col-lg-4 col-sm-12 col-md-12 page-post">
				<div class="pagename"><?php echo get_the_title($theParent); ?></div>
				<?php the_content(); ?>
					<div class="child">
						<?php echo wpb_list_child_pages(); ?>
					</div>
					<?php 
					// Set the arguments for the query
					$args = array( 
					'numberposts'		=> -1, // -1 is for all
					'post_type'		=> 'skladisce', // or 'post', 'page'
					'orderby' 		=> 'date', // or 'date', 'rand'
					'order' 		=> 'ASC', // or 'DESC'     

					);
				
					// Get the posts
					$myposts = get_posts($args);
					

					// If there are posts
					if($myposts): ?>
					<div id="skladisce">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<?php foreach ($myposts as $mypost): ?>
						<div><a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a></div>
							<?php echo $trimmed = wp_trim_words(get_the_content($mypost->ID), ''); ?>

						<?php endforeach; wp_reset_postdata(); ?>
					
					</div>
					</div>
					<?php endif; ?>
			
				

				<!-- <?php
					$childArgs = array(
						'sort_order' => 'ASC',
						'sort_column' => 'menu_order',
						'child_of' => get_the_ID()
					);
					$childList = get_pages($childArgs);
       

    
					$pagelist = get_pages('sort_column=menu_order&sort_order=asc&parent=0');
					$pages = array();
					foreach ($pagelist as $page) {
						$pages[] += $page->ID;
					}

					$current = array_search(get_the_ID(), $pages);
					$prevID = $pages[$current-1];
					$nextID = $pages[$current+1];
					?>

					<ul class="page-nav">
						<?php if (!empty($prevID)) { ?>
							<li class="previous">
								<a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>"><span aria-hidden="true">&larr;</span> <?php echo get_the_title($prevID); ?></a>
							</li>
						<?php }
						if (!empty($nextID)) { ?>
							<li class="next">
								<a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>"><?php echo get_the_title($nextID); ?> <span aria-hidden="true">&rarr;</span></a>
							</li>
						<?php } ?>  -->
						</ul>
				
			</div>	
		
		</div>
	  </div>

	<?php }

get_footer();

?>