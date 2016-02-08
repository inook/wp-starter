		
		<?php 

			$socials = array(

				array(
			        'title' => "Facebook",
			        'url' => get_theme_mod('social_facebook'),
			        'iconClass' => 'icon-social-facebook'
			    ),
			    
			    array(
			        'title' => "Twitter",
			        'url' => get_theme_mod('social_twitter'),
			        'iconClass' => 'icon-social-twitter'
			    ),

			    array(
			        'title' => "Instagram",
			        'url' => get_theme_mod('social_instagram'),
			        'iconClass' => 'icon-social-instagram'
			    ),

			    array(
			        'title' => "Linkedin",
			        'url' => get_theme_mod('social_linkedin'),
			        'iconClass' => 'icon-social-linkedin'
			    ),

			    array(
			        'title' => "Google +",
			        'url' => get_theme_mod('social_googleplus'),
			        'iconClass' => 'icon-social-google-plus'
			    ),

			    array(
			        'title' => "Youtube",
			        'url' => get_theme_mod('social_youtube'),
			        'iconClass' => 'icon-social-youtube'
			    ),
			);
		?>

		

		<?php

			$count = 0;

			foreach ($socials as $social) :
				
				if( $socials[$count]['url'] ):
					echo '<a class="btn btn--wire" href="'. $socials[$count]['url'] .'" alt="'. $socials[$count]['title'] .'">';
						echo '<span class="icon '. $socials[$count]['iconClass'] .'"></span>';
						echo '<span class="text">'. $socials[$count]['title'] .'</span>';
					echo '</a>';
				endif;

				$count += 1;
			
			endforeach;
		?>