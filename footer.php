	
	<!-- —————————— -->
	<!-- FOOTER     -->
	<!-- —————————— -->	
	
	<footer>
		
		<div class="row">

			<div class="column large-4">
				<?php bloginfo('description'); ?>
			</div>

			<div class="column large-4">
				<?php get_template_part( 'template-parts/search-field'); ?>
			</div>

			<div class="column large-4">
				<?php get_template_part( 'template-parts/social'); ?>
			</div>

		</div>

	</footer>


	<!-- END #main -->
	</div>


	<!-- WP FOOTER -->
	<?php wp_footer(); ?>

	<!-- SCRIPT -->
	<script src="<?php bloginfo('template_url'); ?>/src/script.min.js"></script>

	<!-- ANALYTICS -->
	<?php if ( get_theme_mod('analytics_id') ): ?>
	
	<script>
	  
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', '<?php echo get_theme_mod("analytics_id"); ?>', 'auto');
	  ga('send', 'pageview');

	</script>

	<?php endif; ?>
		

</body>
</html>

