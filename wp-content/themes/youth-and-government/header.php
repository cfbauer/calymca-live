<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
		wp_title( '-', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
		?></title>
		
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<!-- default stylesheet -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/normalize.css">		
		
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
		
		<script type="text/javascript">

  
</script>
		<!-- end analytics -->
		
		<!-- modernizr -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.full.min.js"></script>
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

		<!-- disable crappy IE gradients in favor of CSS ones -->
		<!--[if gte IE 9]>
		  <style type="text/css">
		    .gradient {
		       filter: none;
		    }
		  </style>
		<![endif]-->

		<!-- Google Analytics Tracking Code -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-35867147-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		
	</head>
	
	<body <?php body_class(); ?>>

		<div id="top-bar-outer">
			<div id="top-bar-inner">
				<?php get_search_form(); ?>
				<div id="social-media">
					<a href="http://www.facebook.com/YOUTHandGOVERNMENT">
						<img alt="Youth & Government Facebook" height="23" width="23" src="<?php bloginfo('template_directory'); ?>/library/images/facebook.png">
					</a>
					<a href="https://twitter.com/#!/calymca/">
						<img alt="Youth & Government Twitter" height="23" width="23" src="<?php bloginfo('template_directory'); ?>/library/images/twitter.png">
					</a>
					<a href="http://www.youtube.com/user/calymca">
						<img alt="Youth & Government YouTube" height="23" width="23" src="<?php bloginfo('template_directory'); ?>/library/images/youtube.png">
					</a>
					<a href="http://s765.photobucket.com/profile/CalYMCA">
						<img alt="Youth & Government Photobucket" height="23" width="23" src="<?php bloginfo('template_directory'); ?>/library/images/photobucket.png">
					</a>
				</div>

			</div>
		</div>	
	
		<div id="container">		
			
			<header role="banner">
			
				<div id="inner-header" class="clearfix">
					<h1>California YMCA Youth & Government</h1>			
					<a id="the-y-logo" href="<?php echo home_url(); ?>">
						<img alt="YMCA Logo" src="<?php bloginfo('template_directory'); ?>/library/images/ymca-logo.png">
					</a>
					
					
					<img id="logo" alt="California YMCA Youth & Government" src="<?php bloginfo('template_directory'); ?>/library/images/california-youth-government.png">
					
					
					<nav role="navigation">
						<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
				
				</div> <!-- end #inner-header -->
			<script type="text/javascript">



</script>
			</header> <!-- end header -->