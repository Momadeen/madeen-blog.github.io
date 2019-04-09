<?php 
 /* Topaz Support */

//Enable support for Post Thumbnails on posts and pages.
add_theme_support( 'post-thumbnails' );

// Let WordPress manage the document title. 
add_theme_support( 'title-tag' );

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

show_admin_bar(false);

/*
       * Switch default core markup for search form, comment form, and comments
       * to output valid HTML5.
       */
   add_theme_support( 'html5', array(
       'search-form',
       'comment-form',
       'comment-list',
       'gallery',
       'caption',
   ) );

   // Set up the WordPress core custom background feature.
       add_theme_support( 'custom-background', apply_filters( 'madeen_custom_background_args', array(
       'default-color' => 'ffffff',
       'default-image' => '',
       ) ) );

    // Add support for core custom logo.
   add_theme_support( 'custom-logo', array(
       'height'      => 250,
       'width'       => 250,
       'flex-width'  => true,
       'flex-height' => true,
   ) );

   // Add theme support for selective refresh for widgets.
   add_theme_support( 'customize-selective-refresh-widgets' );

   // Widgets for Topaz

   function topaz_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'topaz' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'topaz' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'topaz_widgets_init' );

function madtech_menu() {
    register_nav_menu('header-menu',__('Header Menu'));
}

add_action('init', 'madtech_menu');


/* the_excerpt */
function topaz_excerpt($length) {
	return 20;
}
add_filter('excerpt_length', 'topaz_excerpt');

function topaz_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'topaz_excerpt_more');

// Post formats.
add_theme_support( 'post-formats', array( 'video', 'gallery', 'image', 'audio' ) );