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
  register_post_type( 'video',
  // CPT Options
  
      array(
          'labels' => array(
              'name' => __( 'Video' ),
              'singular_name' => __( 'Video' )
          ),
          'public' => true,
          'supports' =>  $supports,
          'has_archive' => true,
          'rewrite' => array('slug' => 'index'),
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
add_image_size('phot', 200, 800);
// Add External Link to Featured Image with Custom Field

add_action("admin_init", "admin_init");
add_action('save_post', 'save_details');

function admin_init(){
  add_meta_box("performing_arts-meta", "Performing arts", "performing_arts", "photo", "side", "low");
  add_meta_box("design-meta", "Design", "design", "photo", "side", "low");
  add_meta_box("youtube_link-meta", "YouTube Url", "youtube_link", "video", "side", "low");
}

function performing_arts(){
    global $post;
    $custom = get_post_custom($post->ID);
    $performing_arts = $custom["performing_arts"][0];
    ?>
    <label>Performing arts:</label>
    <input name="performing_arts" value="<?php echo $performing_arts; ?>" />
    <?php
  }
function design(){
    global $post;
    $custom = get_post_custom($post->ID);
    $design = $custom["design"][0];
    ?>
    <label>Design:</label>
    <input name="design" value="<?php echo $design; ?>" />
    <?php
  }
  function youtube_link(){
    global $post;
    $custom = get_post_custom($post->ID);
    $link_url = $custom["youtube_link"][0];
    ?>
    <label>YouTube Url:</label>
    <input name="youtube_link" value="<?php echo $youtube_link; ?>" />
    <?php
  }

  function save_details(){
    global $post;
  
    update_post_meta($post->ID, "link_url", $_POST["link_url"]);
    update_post_meta($post->ID, "youtube_link", $_POST["youtube_link"]);
    update_post_meta($post->ID, "performing_arts", $_POST["performing_arts"]);

  }
 

  add_action( 'after_setup_theme', 'predefined_gutenberg_css' );

  function predefined_gutenberg_css(){
 
    add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
    add_editor_style( 'gutenberg-style.css' ); // tries to include style-editor.css directly from your theme folder
   
  }