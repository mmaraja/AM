<?php get_header();?>
  <div class="ct"></div>
  <div class="cr"></div>
  <div class="cb"></div>
  <div class="cl"></div>

      <div class="container">
        <div class="col-sm-12 col-lg-12">
       
         <?php 
        // Set the arguments for the query
        $argsDes = array( 
        'numberposts'		=> -1, // -1 is for all
        'post_type'		=> 'video', // or 'post', 'page'
        'orderby' 		=> 'date', // or 'date', 'rand'
        'order' 		=> 'ASC', // or 'DESC'     

        );
       
        // Get the posts
        $mypostsVid = get_posts($argsVid);

        // If there are posts
        if($mypostsVid):?>
        <div class="square">
        
            <?php  foreach ($mypostsVid as $mypostVid):
            $values = get_post_custom_values("youtube_link");
            $youtube_id = $values[0];
           
            ?>
           
               
               
            <?php   endforeach; wp_reset_postdata(); ?>
         </div>
              
          
        <?php endif; ?>

       
        

            </div>
      </div>
<?php get_footer(); ?>