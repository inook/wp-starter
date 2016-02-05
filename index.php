<?php get_header() ?>
	<p class="icon icon-ic_gesture_48px">e</p>
	<main>
		
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();

				the_title();

			endwhile;
		endif;
		?>

	</main>

<?php get_footer() ?>
