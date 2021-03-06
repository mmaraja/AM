<?php 
function files() {
  wp_enqueue_script('main-javascript', get_theme_file_uri('/js/bootstrap.bundle.js'), NULL, '1.0', true);
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
          'menu_icon' => 'dashicons-art',
      )
  );
 
  register_post_type( 'visual_arts',
  // CPT Options
  
      array(
          'labels' => array(
              'name' => __( 'Visual arts' ),
              'singular_name' => __( 'Visual arts' )
          ),
          'supports' => $supports,
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'works/visual_arts'),
          'show_in_rest' => true,
          'hierarchical' => true,
          'query_var' => true,
          'publicly_queryable' => true,
          'menu_icon' => 'dashicons-welcome-view-site',
          
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
          'menu_icon' => 'dashicons-camera',
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
          'menu_icon' => 'dashicons-controls-play',
      )
  );
  

  
  
  register_post_type( 'warehouse',
  // CPT Options
  
      array(
          'labels' => array(
              'name' => __( 'Skladisce' ),
              'singular_name' => __( 'Skladisce' )
          ),
          'public' => true,
          'supports' =>  $supports,
          'has_archive' => true,
          'rewrite' => array('slug' => 'skladisce-172'),
          'show_in_rest' => true,
          'publicly_queryable' => true,
          'query_var' => true,
      )
  );
  register_post_type( 'skladisce_slike',
  // CPT Options
  
      array(
          'labels' => array(
              'name' => __( 'Skladisce slike' ),
              'singular_name' => __( 'Skladisce slike' )
          ),
          'public' => true,
          'supports' =>  $supports,
          'has_archive' => true,
          'rewrite' => array('slug' => 'skladisce-172x'),
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



 

  add_action( 'after_setup_theme', 'predefined_gutenberg_css' );

  function predefined_gutenberg_css(){
 
    add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
    add_editor_style( 'gutenberg-style.css' ); // tries to include style-editor.css directly from your theme folder
   
  }
  add_action( 'back_button', 'wpse221640_back_button' );
function wpse221640_back_button()
{
    if ( wp_get_referer() )
    {
        $back_text = __( '&#60; ' );
        $button    = "\n<button style='color: rgba(0, 0, 0, 0.5); font-family: Arial, Helvetica, sans-serif ; font-size: 31; position: relative;' 
        id='my-back-button' class='btn button my-back-button' onclick='javascript:history.back()'>$back_text</button>";
        echo ( $button );
    }
}

//ADD CUSOM STYLES GUTENBERG
remove_filter( 'the_content', 'wptexturize' );
add_action('init', function() {
  $inline_css = '.is-style-crtice, .editor-styles-wrapper .is-style-crtice { color: magenta; font-family: Arial, Helvetica, sans-serif;
    font-style: bold; font-size: 40pt; }';
  register_block_style('core/paragraph', [
    'name' => 'crtice',
    'label' => __('Crtice', 'txtdomain'),
    'inline_style' => $inline_css
  ]);
});
add_action('init', function() {
  $inline_css = '.is-style-h4, .editor-styles-wrapper .is-style-h4 { font-family: Arial, Helvetica, sans-serif; text-decoration: underline;
    font-size: 21pt; color:magenta; }';
  register_block_style('core/heading', [
    'name' => 'h4',
    'label' => __('H4', 'txtdomain'),
    'inline_style' => $inline_css
  ]);
});
add_action('init', function() {
  $inline_css = '.is-style-h3, .editor-styles-wrapper .is-style-h3 { 
    font-family: Arial, Helvetica, sans-serif;
    font-style: italic;
    font-size: 14pt;
    color: rgb(40,78,153);
    line-height: 21pt;
    padding-top: 21pt;
    text-decoration: none !important; }';
  register_block_style('core/heading', [
    'name' => 'h3',
    'label' => __('H3', 'txtdomain'),
    'inline_style' => $inline_css
  ]);
});
add_action('init', function() {
  $inline_css = '.is-style-h2, .editor-styles-wrapper .is-style-h2 { 
    text-decoration: underline;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 21pt;}';
  register_block_style('core/heading', [
    'name' => 'h2',
    'label' => __('H2', 'txtdomain'),
    'inline_style' => $inline_css
  ]);
});
add_action('init', function() {
  $inline_css = '.is-style-team, .editor-styles-wrapper .is-style-team { 
    font-family: Arial, Helvetica, sans-serif;
    font-size: 10.5pt;
    line-height:16pt;}';
  register_block_style('core/paragraph', [
    'name' => 'team',
    'label' => __('Team', 'txtdomain'),
    'inline_style' => $inline_css
  ]);
});
add_action('init', function() {
  $inline_css = '.is-style-post, .editor-styles-wrapper .is-style-post { 
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16pt;
    line-height:21pt;
    color: black; }';
  register_block_style('core/paragraph', [
    'name' => 'post',
    'label' => __('Post', 'txtdomain'),
    'inline_style' => $inline_css
  ]);
});

function wpb_list_child_pages() { 

  global $post; 

  if ( is_page() && $post->post_parent )    
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' .$post->post_parent . '&echo=0' );
  else
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

  if ( $childpages ) {    
      $string = '<ul>' . $childpages . '</ul>';
  }

  return $string;
}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');