		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		
		    <input type="search" class="search-field" placeholder="Votre recherche" value="<?php echo get_search_query() ?>" name="s" title="Votre recherche" />
		    <button type="submit" class="search-submit icon icon-search" value="" /></button>
		
		</form>