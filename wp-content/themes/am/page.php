<?php

get_header();

	while(have_posts()){
		the_post();
		
	} ?>

	<div class="page-banner__content container">
		<div class="square">
		<?php 
        if ( have_posts() ) {
            wp_reset_query();
            setup_postdata($post); 
            echo esc_attr(htmlentities(the_content()));
        } 
    ?>
			
</div>
