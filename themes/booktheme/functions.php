<?php
//nav setup
function bookTheme_nav_setup(){
    register_nav_menus(array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}
add_action( 'after_setup_theme','bookTheme_nav_setup');

//add support for featured image for posts
add_theme_support( 'post-thumbnails' );

//footer setup
?>