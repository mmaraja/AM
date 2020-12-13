
<?php

get_header();

	?>
    <div class="ct"></div>
    <div class="cr"></div>
    <div class="cb"></div>
    <div class="cl"></div>
	    <div class="container-fluid content-wrapper">
		<div class="row">
			<div class="offset-lg-2 offset-md-1 offset-sm-1 col-lg-4 col-sm-11 col-md-5 ">
				<div class="pagename">
                <?php $your_query = new WP_Query( 'pagename=skladisce-172' );
                    while ( $your_query->have_posts() ) : $your_query->the_post();
                     the_title();
                    endwhile;
                    // reset post data (important!)
                    wp_reset_postdata();
                ?>
                </div>
                    <?php
                        // query for the about page
                        $your_query = new WP_Query( 'pagename=skladisce-172' );
                        // "loop" through query (even though it's just one page) 
                        while ( $your_query->have_posts() ) : $your_query->the_post();
                            the_content();
                        endwhile;
                        // reset post data (important!)
                        wp_reset_postdata();
                    ?>
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
				
						
						<div class="col-sm-11" >
							<?php foreach ($mypostsSklad as $mypostSklad):
							$post_content = get_post($mypostSklad);
						
							?> 
							<!-- Content -->
							<div>
							<a class="type-sklad " href="<?php echo get_permalink($mypostSklad->ID); ?>"><?php echo get_the_title($mypostSklad->ID); ?></a></div>

							<?php endforeach; wp_reset_postdata(); ?>
						
						</div>
					
				
					<?php endif; ?>
			
				
            </div>	
            <div class=" col-lg-4 col-md-5 col-sm-10 col-12">
                <div class="offset-sm-1 contains">
                <?php
                   // Start the loop.
                    while ( have_posts() ) : the_post();
                        the_content(); 
                        endwhile;
                ?>      
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <?php 
						// Set the arguments for the query
						$argsSkladSl = array( 
						'numberposts'		=> -1, // -1 is for all
						'post_type'		=> 'skladisce_slike', // or 'post', 'page'
						'orderby' 		=> 'rand', // or 'date', 'rand'
						'order' 		=> 'ASC', // or 'DESC'     

						);
						
						// Get the posts
						$mypostsSkladSl = get_posts($argsSkladSl); ?>
						
						<? // If there are posts
						if($mypostsSkladSl):?>
                        <div class="sklad-slike">
							<?php foreach ($mypostsSkladSl as $mypostSkladSl):
							$post_content = get_post($mypostSkladSl);
						
							?> 
							<!-- Content -->
							<div><?php echo apply_filters('the_content',$mypostSkladSl->post_content); ?></div>

							<?php endforeach; wp_reset_postdata(); ?>
						
                        </div>
                    
				
					<?php endif; ?>
			
                </div>

            </div>
       
	    </div>

	<?php 

get_footer();

?>