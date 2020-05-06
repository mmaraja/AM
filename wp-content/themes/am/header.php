<! DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <script type="text/javascript" src="wp-content/themes/am/js/scripts.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
        <a class="logo-text float-left" href="<?php echo site_url() ?>">anja mejac</a>    
        <div class="dropdown">  
        <button onclick="myFunction()" class="dropbtn fa fa-bars" ></button>
              <div id="myDropdown"  class="dropdown-content">
                <a href="<?php echo site_url('/works')?>">works</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
              </div>
</div>
       
     
    </header>