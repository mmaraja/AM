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
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style.css'; ?>">
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
              
					<ul>
						<li><a href="<?php echo site_url('/works') ?>">works</a></li>
						<li><a href="<?php echo site_url('/skladisce-172/about');?>">Skladišče 172</a></li>
						<li><a href="<?php echo site_url('/calendar');?>">calendar</a></li>
						<li><a href="<?php echo site_url('/blog');?>">blog</a></li>
						<li><a href="<?php echo site_url('/contactbio');?>">contact & biography</a></li>
						<!-- <?php echo wp_list_pages(array('title_li' => NULL,'sort_column' => 'menu_order')); ?>  -->
						<li style="padding-top: 25px; padding-bottom: 4mm;">
						<a href="https://www.instagram.com/mejacanja/?hl=en"><i class="fa fa-instagram up" style="font-size: 1.5em; color: white; padding-right:15px;" aria-hidden="true"> &nbsp;|</i></a>
						<a href="https://www.facebook.com/compania.t.flamenco" ><i class="fa fa-facebook" style="font-size: 1.5em; color: white; padding-right:20px;" aria-hidden="true"> &nbsp;|</i></a>
						<a href="https://www.youtube.com/channel/UCYq40lEvN6570R6B9l9zDTA" ><i class="fa fa-youtube-play" style="font-size: 1.5em; color: white;" aria-hidden="true"></i></a></li>
					</ul>
					
				
			</div>
			  
        </div>
	</nav>

<!--/.Navbar -->    
    </div>
 
    
        
        
