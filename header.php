<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- WP HEAD -->
	<?php wp_head(); ?>

	<!-- FONT -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<!-- CSS -->
  	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/style.min.css">

	<!-- HTML5 for IE -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body <?php body_class();?> >
	

	<!-- —————————— -->
	<!-- NAV        -->
	<!-- —————————— -->
	<nav>
	
		<?php 
				
			$args = array(
				'theme_location'  => 'menu-principal',
				'container'       => ''
			);

			wp_nav_menu( $args );
		
		?>

	</nav>

	