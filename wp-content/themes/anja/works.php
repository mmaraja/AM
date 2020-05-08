
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
	  <div class="container">

      <div class="page-links">
		
        <div>
            <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?>/</a></h2>
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
       
            <?php foreach ($myposts as $mypost): ?>
              <div class="post-type"><a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a></div>
                <?php echo $trimmed = wp_trim_words(get_the_content($mypost->ID), ''); ?>

            <?php endforeach; wp_reset_postdata(); ?>
          
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
              <?php foreach ($mypostsDes as $mypostDes): ?> 
              <!-- Content -->
                <div class="post-type"><a href="<?php echo get_permalink($mypostDes->ID); ?>"><?php echo get_the_title($mypostDes->ID); ?></a></div>
                   <?php echo $trimmed = wp_trim_words(get_the_content($mypostDes->ID)); ?>
              <?php endforeach; wp_reset_postdata(); ?>
              
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
          $mypostsPhoto = get_posts($argsPhoto);

          // If there are posts
          if($mypostsPhoto):?>
          
           
                <?php foreach ($mypostsPhoto as $mypostPhoto):
                $post_content = get_post($mypostPhoto);
                $content = $post_content->post_content;
                $url = get_post_meta($mypostPhoto->ID, 'link_url');
 
                             

                ?> 
                <!-- Content -->
                lalal
                <?php echo $url[0] ?>
                <?php echo "ddd" ?>
                  <div class="photos"><a href="<?php apply_filters('the_content',$content) ?>">
                  <?php echo get_the_post_thumbnail($mypostPhoto, 'phot'); ?></a>
                  </div>
                    
                <?php endforeach; wp_reset_postdata(); ?>
                
         
          <?php endif; ?>
          
    </div>
  
    <?php }
    

get_footer();

?>