<?php get_header();?>
  <div class="ct"></div>
  <div class="cr"></div>
  <div class="cb"></div>
  <div class="cl"></div>

      <div class="container-fluid content-wrapper">
        <div class="row">
          <div class="col-lg-12 col-12">
        
          <?php 
          // Set the arguments for the query
          $argsVid = array( 
          'numberposts'		=> 1, // -1 is for all
          'post_type'		=> 'video', // or 'post', 'page'
          'orderby' 		=> 'rand', // or 'date', 'rand'
          'order' 		=> 'ASC', // or 'DESC'     

          );
        
          // Get the posts
          $mypostsVid = get_posts($argsVid);

          // If there are posts
          if($mypostsVid):?>
              <div class="video-border" >
                <?php  foreach ($mypostsVid as $mypostVid):
                  $post_content = get_post($mypostVid);
                  $content = $post_content->post_content;
                  echo apply_filters('the_content',$mypostVid->post_content); 

                endforeach; wp_reset_postdata(); ?>
              </div>
          <?php endif; ?>
          </div>
        </div>  
      </div>
<?php get_footer(); ?>