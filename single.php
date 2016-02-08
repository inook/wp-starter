<?php get_header() ?>

	<div class="row">

		<div class="column large-6">
			<h1><?php bloginfo('title'); ?></h1>
		</div>

	</div>
	
	<div class="row">
		
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>
				
				<div class="column large-12 medium-12 small-12">
				
					<h2>
						<?php the_title(); ?>
					</h2>

					<?php the_content(); ?>

				</div>
		
			<?php endwhile;
		endif;
		?>

	</div>

<?php get_footer() ?>
