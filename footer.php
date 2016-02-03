	
	<?php if( !is_page_template( 'galerie.php' ) ): ?>
	<footer>
		
		<div class="row align-center">
			
			<!-- Description -->
			<div class="column large-3 small-12">
				<span><?php echo get_bloginfo('description'); ?><br>
			</div>

			<!-- Newsletter -->
			<div class="column large-3 small-12">
				<p class="footer-icon"><img src="<?php bloginfo('template_url'); ?>/img/icon-mail.png" width="40" height="40" alt="Adresse">Newsletter</p>
				<span><?php echo get_theme_mod('footer_newsletter'); ?></span>
				<form class="newsletter" id="newletter-form">
					<input type="email" placeholder="Votre adresse e-mail" name="email" id="newsletter-email" required data-list="ff322d3955"/>
					<input type="submit" value="S'inscrire" title="S'inscrire à la newsletter" class="white" id="newsletter-send">
					<div class="newsletter-valid">Vous êtes désormais inscrit à la newsletter Maison du Qi Gong</div>
					<div class="newsletter-error">Merci d'entrer une adresse e-mail valide</div>
				</form>
			</div>
			
			<!-- Adresse -->
			<div class="column large-3 small-12">
				<p class="footer-icon"><img src="<?php bloginfo('template_url'); ?>/img/icon-pin.png" width="40" height="40" alt="Adresse">Adresse</p>
				<span><a href="https://www.google.com/maps?q=maison+du+qi+gong" target="_blank"><?php echo get_theme_mod('footer_adresse'); ?></a></span><br><br>
				<span><?php echo get_theme_mod('footer_telephone'); ?><br>
				<a href="<?php bloginfo('url'); ?>/contact/" target="_blank">E-mail</a></span>
			</div>
			
			
			<!-- Facebook -->
			<div class="column large-3 small-12">
				<p class="footer-icon"><img src="<?php bloginfo('template_url'); ?>/img/icon-facebook.png" width="40" height="40" alt="Facebook">Facebook</p>
				<span><a href="https://www.facebook.com/Maison-du-Qi-Gong-222606837749439/" target="_blank">Rejoignez-nous<br>
				sur Facebook</a></span>
			</div>

		</div>
		
	</footer>
	<?php endif; ?>

	
</div>

	<!-- WP FOOTER -->
	<?php wp_footer(); ?>

	<!-- SCRIPT -->
	<script src="<?php bloginfo('template_url'); ?>/src/script.min.js"></script>

	<!-- ANALYTICS -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-337733-13', 'auto');
	  ga('send', 'pageview');

	</script>
		

</body>
</html>

