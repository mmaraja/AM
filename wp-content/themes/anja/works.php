
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
    
	  <div class="container-fluid content-wrapper">
    <div class="row">
      <div class="offset-1 col-lg-3 col-sm-8 col-md-7 col-10">
            <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?>&nbsp; /</a></h2>
            <ul class="min-list">
              <li><button id="perf-art" class="link">performing arts</button></li>
              <li><button id="vis-art" class="link">visual arts</button></li>
            </ul>
	     
  

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
          <div class="col-lg-11 col-md-9 col-sm-12" style="box-shadow: 7px 7px 7px cyan; border: 1pt solid magenta; ">
            <?php foreach ($myposts as $mypost): ?>
              <div><a id="post-type" href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a></div>
                <?php echo $trimmed = wp_trim_words(get_the_content($mypost->ID), ''); ?>

            <?php endforeach; wp_reset_postdata(); ?>
           
          </div>
          </div>
        <?php endif; ?>
         
     
        <?php 
        // Set the arguments for the query
        $argsVis = array( 
        'numberposts'		=> -1, // -1 is for all
        'post_type'		=> 'visual_arts', // or 'post', 'page'
        'orderby' 		=> 'date', // or 'date', 'rand'
        'order' 		=> 'ASC', // or 'DESC'   
          

        );
       
        // Get the posts
        $mypostsVis = get_posts($argsVis);

        // If there are posts
        if($mypostsVis):?>
        
          <div id="visual-arts" style="display: none">
          <div class="col-lg-10 col-md-9 col-sm-12" style="box-shadow: 7px 7px 7px cyan; border: 1pt solid magenta;">
              <?php foreach ($mypostsVis as $mypostVis): ?> 
              <!-- Content -->
                <div><a  id="post-type" href="<?php echo get_permalink($mypostVis->ID); ?>"><?php echo get_the_title($mypostVis->ID); ?></a></div>
                   <?php echo $trimmed = wp_trim_words(get_the_content($mypostVis->ID)); ?>
              <?php endforeach; wp_reset_postdata(); ?>
          </div>    
          </div>  
        <?php endif; ?>
        
      </div>
        <?php 
          // Set the arguments for the query
          $argsPhoto = array( 
          'numberposts'		=> 6, // -1 is for all
          'post_type'		=> 'photo', // or 'post', 'page'
          'orderby' 		=> 'date', // or 'date', 'rand'
          'order' 		=> 'ASC', // or 'DESC'     

          );
        
          // Get the posts
          $mypostsPhoto = get_posts($argsPhoto); ?>
         
          <? // If there are posts
          if($mypostsPhoto):?>
          
                
                <div class="col-sm-12 col-lg-6 col-md-12" style="margin-bottom:70px">
                  <div class="image-grid-container"> 
                    <?php foreach ($mypostsPhoto as $mypostPhoto):
                    $post_content = get_post($mypostPhoto);
                    if (get_field('arts', $mypostPhoto) == 'perf_arts') {
                      $per= "performing-arts";
                    } else  {
                            $per= "visual-arts";
                    } ?>
                  
                    <!-- Content -->
                      
                    <div class="<?php echo $per; ?>"><?php echo apply_filters('the_content',$mypostPhoto->post_content); ?></div>
                    <?php endforeach; wp_reset_postdata(); ?>
                    
                  </div>
                </div>
          <?php endif; ?>
          
          
          </div>
    </div>
  
    <?php }
    

get_footer();

?>
