<?php

  $home = 'Accueil'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<li class="current">'; // tag before the current crumb
  $after = '</li>'; // tag after the current crumb
  
  global $post;
  
  $homeLink = get_bloginfo('url');

    
  echo '<ul class="breadcrumb">';
  	echo '<li><a href="' . $homeLink . '">' . $home . '</a></li>';
    
    // ARCHIVES CATEGORY
    if ( is_category() ) {
      
      $thisCat = get_category(get_query_var('cat'), false);
      
      if ($thisCat->parent != 0) :
      	echo '<li>';
      		echo get_category_parents($thisCat->parent, TRUE);
      	echo '</li>';
      endif;

      echo $before . 'Catégorie "' . single_cat_title('', false) . '"' . $after;
    
    // RECHERCHE
    } elseif ( is_search() ) {
      
      echo $before . 'Résultats pour "' . get_search_query() . '"' . $after;
    
   	// PAGE / POST
    } elseif ( is_single() && !is_attachment() ) {

    	if ($showCurrent == 1) echo $before . get_the_title() . $after;

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      	$post_type = get_post_type_object(get_post_type());
      	echo $before . $post_type->labels->singular_name . $after;
    
      // ATTACHEMENT
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li>';
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
    }

    // PAGE NIVEAU 1
    elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
    }

    // PAGE NIVEAU 2+
    elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
      }
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
    
    // TAG
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
    
    // AUTEUR
    } elseif ( is_author() ) {
      global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles publié par ' . $userdata->display_name . $after;
    
    //404
    } elseif ( is_404() ) {
      echo $before . 'Page introuvable' . $after;
    }
    
    // PAGINATION
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
    

    echo '</ul>';



?>