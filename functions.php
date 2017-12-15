<?php

// Add Custom Menu

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( array(
      			'header-menu' => __( 'Main Menu', 'theme-text-domain' ),
      			'extra-menu' => __( 'Footer Menu' , 'theme-text-domain'),
      			'menu_class'     => __('primary-menu', 'theme-text-domain')
    ) );
        } endif;

add_theme_support( 'post-thumbnails' );
add_image_size( 'post-thumb', 620, 207, true );
add_image_size( 'home-thumb', 300, 300, true );


// Changing excerpt length
function new_excerpt_length($length) {
	return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');
 
// Changing excerpt more
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home left sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function home_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home About Widget',
		'id'            => 'home_about_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'home_widgets_init' );

function home_port_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home Portfolio Widget',
		'id'            => 'home_port_',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'home_port_widgets_init' );


//
add_filter('show_admin_bar', '__return_false');
show_admin_bar(false);
