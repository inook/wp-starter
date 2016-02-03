<?php

// ADMIN BAR
// hide / show admin bar
// -------------------------------------------------

	show_admin_bar( false );


// THUMBNAILS
// Manage thumbnails size
// -------------------------------------------------

	add_theme_support( 'post-thumbnails' );

	/*
	add_image_size( 'thumbnail-projet', 600, 600, true );
	add_image_size( 'thumbnail-grid', 700, 9999 );
	*/


// MENU(S)
// -------------------------------------------------

	add_action( 'init', 'register_my_menus' );

    function register_my_menus() {
      register_nav_menus(
        array(
          'main-menu' => __( 'Menu principal' )
        )
      );
    }


// REMOVE COMMENTS
// Removes comment from admin menu
// -------------------------------------------------

	add_action( 'admin_menu', 'my_remove_admin_menus' );

	function my_remove_admin_menus() {
	    remove_menu_page( 'edit-comments.php' );
	}

// MEDIA
// set default image link location to 'None'
// -------------------------------------------------	

	update_option('image_default_link_type','none');


// EMOJI
// remove emoji junk
// -------------------------------------------------	
	
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

?>