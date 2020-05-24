<html>
<head>
<title>Anja Mejac</title>
   
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-3.5.0.min.js'; ?>">
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
    </script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/scripts.js'; ?>">
    </script>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
        
		<?php wp_head(); ?>
</head>

<body>

    <div class="jumbotron">
        <a class ="logo" href="<?php echo site_url() ?>">anja mejac</a>  
 <!--Navbar -->
	<nav>
	    <div class="dropdown">
            <i class="fa fa-bars fa-2x burger-menu" ></i>  
            <div class="dropdown-content">
              <?php 
				if ( has_nav_menu( 'primary-menu' ) ) :
					wp_nav_menu( array( 
						'container' 		=> '',
						'theme_location' 	=> 'primary-menu'
					) ); 
				else : ?>
					<ul>
						<li><a href="<?php echo site_url('/works') ?>">works</a></li>
						<li><a href="<?php echo site_url('/skladisce-172');?>">skladišče 172</a></li>
						<li><a href="<?php echo site_url('/calendar');?>">calendar</a></li>
						<li><a href="<?php echo site_url('/contactbio');?>">contact&bio</a></li>
						<li style="padding-top: 25px; padding-bottom: 4mm;">
						<a href="#"><i class="fa fa-instagram up" style="font-size: 1.5em; color: white; padding-right:15px;" aria-hidden="true"> &nbsp;|</i></a>
						<a href="#" ><i class="fa fa-facebook" style="font-size: 1.5em; color: white; padding-right:20px;" aria-hidden="true"> &nbsp;|</i></a>
						<a href="#" ><i class="fa fa-youtube-play" style="font-size: 1.5em; color: white;" aria-hidden="true"></i></a></li>
					</ul>
					<?php 
				endif;
				
				?>
				
			</div>
			  
        </div>
	</nav>

<!--/.Navbar -->    
    </div>
 
    
        
        
