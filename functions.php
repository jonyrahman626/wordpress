<?php
// Css and Js link code start
require 'inc/customizer.php';

function mohammad_mojibur_rahman_scripts() {
	wp_enqueue_style( 'mohammad_mojibur_rahman-bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0' );
	wp_enqueue_style( 'mohammad_mojibur_rahman-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0' );
	wp_enqueue_style( 'mohammad_mojibur_rahman-style', get_stylesheet_uri(), array(), '1.0.0' );

	wp_enqueue_script( 'mohammad_mojibur_rahman-bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'mohammad_mojibur_rahman-slick_js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'mohammad_mojibur_rahman-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'mohammad_mojibur_rahman_scripts' );

// Css and Js link code end


function mohammad_mojibur_rahman_setup() {
    // Logo code is here start

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    // Logo code is here end

    // Logo code is here end
    add_theme_support( 'post-thumbnails' );
    // Logo code is here end

    // Search code is here start
    add_theme_support(
        'html5',
        array(
            'search-form',
            'style',
            'script',
        )
    );
    // Search code is here end

    // Main Menu code is here start
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'mohammad_mojibur_rahman' ),
        )
    );
    //Main Menu code is here end

    // Footer Menu code is here start
    register_nav_menus(
        array(
            'menu-2' => esc_html__( 'Footer Menu', 'mohammad_mojibur_rahman' ),
        )
    );
    //Footer Menu code is here end


}
add_action( 'after_setup_theme', 'mohammad_mojibur_rahman_setup' );

// Right Sidebar code start here
function mohammad_mojibur_rahman_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Right Sidebar', 'mohammad_mojibur_rahman' ),
			'id'            => 'sidebar',
			'before_title'  => '<p>',
			'after_title'   => '</p>',
		)
	);
}
add_action( 'widgets_init', 'mohammad_mojibur_rahman_widgets_init' );

// Right Sidebar code start here

// Slider code start here

function wpdocs_codex_book_init() {
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'Sliders' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'Slider' ),
        'featured_image'        => _x( 'Sliders Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Banner image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'supports'           => array( 'title', 'thumbnail', ),
    );
 
    register_post_type( 'Slider', $args );
}
 
add_action( 'init', 'wpdocs_codex_book_init' );

// Slider code end here

