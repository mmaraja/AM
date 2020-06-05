
<?php

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
			<div class="offset-lg-2 offset-sm-1 offset-md-1 col-lg-6 col-sm-10 col-md-10 ">
				<div class="pagename"><?php echo get_the_title($theParent); ?></div>
				<div class="page-content">
					<?php the_content(); ?>
				</div>
				
			</div>	
			
		</div>
	  </div>

	<?php }

get_footer();

?>