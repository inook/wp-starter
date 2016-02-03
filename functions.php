<?php


show_admin_bar( false );

// THUMBNAILS
// Manage thumbnails size
// -------------------------------------------------

add_theme_support( 'post-thumbnails' );

/*
add_image_size( 'thumbnail-projet', 600, 600, true );
add_image_size( 'thumbnail-grid', 700, 9999 );
*/


// REMOVE COMMENTS
// Removes comment from admin menu
// -------------------------------------------------

add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}



?>