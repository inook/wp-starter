<?php
/*
Template Name: Search Page
*/
?>


<?php get_header() ?>

	<div class="row">

		<!-- TITRE RECHERCHE -->

		<div class="column large-12">

			<?php
				
				$nbResultat = $wp_query->found_posts;
				if( $nbResultat == 0 ) {
					echo '<h1>';
						echo 'Aucun résultat';
					echo '</h1>';
				} elseif( $nbResultat == 1) {
					echo '<h1>';
						echo '1 résultat';
					echo '</h1>';

				} elseif( $nbResultat > 1) {
					echo '<h1>';
						echo $nbResultat;
						 echo ' résultats';
					echo '</h1>';
				}
				?>
				<h2>« <?php echo get_search_query(); ?> »</h2>

		</div>



		<!-- RESULTAT RECHERCHE -->

			<?php 
			
			$args = array(
				's'           		=> get_search_query(),
				'posts_per_page'	=> '-1',
			);


			$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ):
				while ( $the_query->have_posts() ): $the_query->the_post();
					echo '<div class="column large-12">';
					
						the_title();

					echo '</div>';

				endwhile;
			endif;

			wp_reset_postdata();

			?>
			

	</div>
	


<?php get_footer() ?>
