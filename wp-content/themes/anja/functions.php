<?php 
function files() {
  wp_enqueue_script('main-university-javascript', get_theme_file_uri('/js/bootstrap.bundle.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'files');


// Our custom post type function
function create_posttype() {
  $supports = ['title', 'editor', 'revisions', 'page-attributes', 'thumbnail'];
  register_post_type( 'performing_arts',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Performing arts' ),
              'singular_name' => __( 'Performing arts' )
          ),
          'supports' => $supports,
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'works/performing_arts'),
          'show_in_rest' => true,
          'publicly_queryable' => true,
          'query_var' => true,
      )
  );
 
  register_post_type( 'design',
  // CPT Options
  
      array(
          'labels' => array(
              'name' => __( 'Design' ),
              'singular_name' => __( 'Design' )
          ),
          'public' => true,
          'supports' =>  $supports,
          'has_archive' => true,
          'rewrite' => array('slug' => 'works/design'),
          'show_in_rest' => true,
          'publicly_queryable' => true,
          'query_var' => true,
      )
  );
  register_post_type( 'photo',
  // CPT Options
  
      array(
          'labels' => array(
              'name' => __( 'Photo' ),
              'singular_name' => __( 'Photo' )
          ),
          'public' => true,
          'supports' =>  $supports,
          'has_archive' => true,
          'rewrite' => array('slug' => 'works/photo'),
          'show_in_rest' => true,
          'publicly_queryable' => true,
          'query_var' => true,
      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
// Add theme support for featured image / thumbnails
add_theme_support('post-thumbnails');
add_image_size('phot', 300, 500);
// Add External Link to Featured Image with Custom Field

add_action("admin_init", "admin_init");
add_action('save_post', 'save_details');

function admin_init(){
  add_meta_box("link_url-meta", "Post Url", "link_url", "photo", "side", "low");
}

function link_url(){
    global $post;
    $custom = get_post_custom($post->ID);
    $link_url = $custom["link_url"][0];
    ?>
    <label>Post Url:</label>
    <input name="link_url" value="<?php echo $link_url; ?>" />
    <?php
  }

  function save_details(){
    global $post;
  
    update_post_meta($post->ID, "link_url", $_POST["link_url"]);

  }

function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
  $post_content = get_post($post_id);
  $content = $post_content->post_content;
 
  
  $html = '<a href="' . apply_filters('the_content',$content)  . '" tittle="' . esc_attr( get_the_content( $post_id ) ) . '">' . $html . '</a>';
  return $html;
  }
  add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );
  

