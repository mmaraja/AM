
<?php
/* Template name: works */
get_header();

	while(have_posts()){
		the_post();
				
	?>
    <div class="ct"></div>
    <div class="cr"></div>
    <div class="cb"></div>
    <div class="cl"></div>
    
	  <div class="container ">
    <div class="row">
      <div class="col-lg-4 col-sm-12 page-links">
		
        <div>
            <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?>&nbsp; /</a></h2>
            <ul class="min-list">
              <li><button id="perf-art" class="link">performing arts</button></li>
              <li><button id="des" class="link">design</button></li>
            </ul>
	      </div>
  

        <?php 
        // Set the arguments for the query
        $args = array( 
        'numberposts'		=> -1, // -1 is for all
        'post_type'		=> 'performing_arts', // or 'post', 'page'
        'orderby' 		=> 'date', // or 'date', 'rand'
        'order' 		=> 'ASC', // or 'DESC'     

        );
       
        // Get the posts
        $myposts = get_posts($args);
        

        // If there are posts
        if($myposts): ?>
          <div id="performing-arts">
          <div class="col-md-12 col-sm-12 col-lg-8" style="box-shadow: 7px 7px 7px cyan; border: 1pt solid magenta;">
            <?php foreach ($myposts as $mypost): ?>
              <div><a id="post-type" href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a></div>
                <?php echo $trimmed = wp_trim_words(get_the_content($mypost->ID), ''); ?>

            <?php endforeach; wp_reset_postdata(); ?>
           
          </div>
          </div>
        <?php endif; ?>
         
     
        <?php 
        // Set the arguments for the query
        $argsDes = array( 
        'numberposts'		=> -1, // -1 is for all
        'post_type'		=> 'design', // or 'post', 'page'
        'orderby' 		=> 'date', // or 'date', 'rand'
        'order' 		=> 'ASC', // or 'DESC'     

        );
       
        // Get the posts
        $mypostsDes = get_posts($argsDes);

        // If there are posts
        if($mypostsDes):?>
        
          <div id="design" style="display: none">
          <div class="col-md-12 col-sm-12 col-lg-8" style="box-shadow: 7px 7px 7px cyan; border: 1pt solid magenta;">
              <?php foreach ($mypostsDes as $mypostDes): ?> 
              <!-- Content -->
                <div><a  id="post-type" href="<?php echo get_permalink($mypostDes->ID); ?>"><?php echo get_the_title($mypostDes->ID); ?></a></div>
                   <?php echo $trimmed = wp_trim_words(get_the_content($mypostDes->ID)); ?>
              <?php endforeach; wp_reset_postdata(); ?>
          </div>    
          </div>  
        <?php endif; ?>
        
      </div>
        <?php 
          // Set the arguments for the query
          $argsPhoto = array( 
          'numberposts'		=> -1, // -1 is for all
          'post_type'		=> 'photo', // or 'post', 'page'
          'orderby' 		=> 'date', // or 'date', 'rand'
          'order' 		=> 'ASC', // or 'DESC'     

          );
        
          // Get the posts
          $mypostsPhoto = get_posts($argsPhoto); ?>
         
          <? // If there are posts
          if($mypostsPhoto):?>
          
                
                <div class="col-sm-12 col-lg-6" style="width: 70rem; margin-left:-70px;">
                  <div class="image-grid-container"> 
                <?php foreach ($mypostsPhoto as $mypostPhoto):
                $post_content = get_post($mypostPhoto);
                $content = $post_content->post_content;
                $url = get_post_meta($mypostPhoto->ID, 'performing_arts', true);
                ?> 
                <!-- Content -->
               
                <?php echo apply_filters('the_content',$mypostPhoto->post_content); ?>
                 
                <?php endforeach; wp_reset_postdata(); ?>
                </div>
                </div>
              
         
          <?php endif; ?>
          </div>
    </div>
  
    <?php }
    

get_footer();

?>
