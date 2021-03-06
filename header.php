<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- WP HEAD -->
	<?php wp_head(); ?>

	<!-- CSS -->
  	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/style.min.css">

	<!-- HTML5 for IE -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body <?php body_class();?> >
	
	

	<div id="main">

	<!-- ——————————— -->
	<!-- NAV         -->
	<!-- ——————————— -->

	<nav class="row">
		
		<div class="column large-12">
			
		<?php 
				
			$args = array(
				'theme_location'  => 'menu-principal',
				'container'       => ''
			);

			wp_nav_menu( $args );
		
		?>

		</div>

	</nav>


	<!-- ——————————— -->
	<!-- BREADCRUMB  -->
	<!-- ——————————— -->
		
	<div class="row">
		<div class="column large-12">
			<?php get_template_part( 'template-parts/breadcrumb'); ?>
		</div>
	</div>


	

	