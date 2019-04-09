<?php 

/**
 * madeen Scripts & Styles
 * 
 */

 function madeen_script_style() {
    // Styles
      wp_enqueue_style( 'style', get_stylesheet_uri());
      wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array());
      wp_enqueue_style('poppins', 'https://fonts.googleapis.com/css?family=Poppins:400,600,700,800');
      wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css');
      wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
      wp_enqueue_style('normalize', 'https://yarnpkg.com/en/package/normalize.css');
      wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');

    // Scripts
      wp_deregister_script('jquery');
      wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true);
      wp_enqueue_script('jquery');
      wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
      wp_enqueue_script('navigation.js', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
      wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array('jquery'), '4.4.6', true);
      wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'), '4.2.1', true);
      wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
      wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array(), '1.14.6', true);
      
 }
 add_action('wp_enqueue_scripts', 'madeen_script_style');