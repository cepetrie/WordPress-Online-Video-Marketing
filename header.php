<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
    <head>
   
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name='keywords' content='Marketing, Online Marketing, Online Video, Video Testimonials, Client Videos, Video Marketing, Video production, YouTube marketing' />
        
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
      
<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
        
                   
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />




		<?php /*?> Always have wp_head() inside the </head> tag 
           of your theme. Many plugins use this hook to add elements 
            to <head> such as styles, scripts, and meta tags.
          <?php */?>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />

 	</head>
 
 <body <?php body_class(); ?>>   
		
<div id="wrapper">

	<header>		       
            
        <!--START LOGO-->
        <h1 id="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <span><?php bloginfo('name'); ?></span><!-- for SEO -->
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/videoguide.gif" alt="<?php bloginfo('name'); ?>">
        </a>
        </h1>
        <!--END LOGO-->
        
        
         
        <!--START SOCIAL NAVIGATION-->
        <nav id="social"> 
    	<?php wp_nav_menu( array( 
			'theme_location' => 'social-menu',
			'menu' => 'Social Media Menu',
			'container'  => 'ul'

		) ); ?>
         
         </nav>
         <!--END SOCIAL NAVIGATION-->

    </header>
    
    
    <!-- START MAIN NAVIGATION -->
	<nav id="nav-main">
        <?php wp_nav_menu( array( 
			'theme_location' => 'main-menu',
			'menu' => 'Main Menu',
			'container'  => 'ul' 

		) ); ?>

    </nav>
	<!-- END MAIN NAVIGATION -->
			
 <div id="middle">         
          
	