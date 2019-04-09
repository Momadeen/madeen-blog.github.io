<?php 
/**
 * Topaz functions and definitions
 * 
 * @package Topaz
 */


 /**
    ** Theme Support
            - Post Thumbnails.
            - document title.
            - RSS feed
            - custom background
            - custom logo.
            - Widget
            - The excerpt
  */
  require get_template_directory() . '/inc/theme-support.php';

/**
    ** Scripts & Styles
            - jQuery
            - Bootstrap
            - navigation.js 
            - Google Fonts
 */
 require get_template_directory() . '/inc/scripts-styles.php';

 // Register Custom Navigation Walker
 require get_template_directory() . '/class-wp-bootstrap-navwalker.php';

 require get_template_directory() . '/inc/template-tags.php';

 function set_post_view($postID) {
         $count_key = 'wp_post_views_count';
         $count = get_post_meta($postID, $count_key, true);
         if($count == '') {
                 $count = 0;
                 delete_post_meta($postID, $count_key);
                 add_post_meta($postID, $count_key, '0');
         } else {
                 $count++;
                 update_post_meta($postID, $count_key, $count);
         }
 }
 remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

 function wpb_track_post_views ($post_id) {
        if ( !is_single() ) return;
        if ( empty ( $post_id) ) {
            global $post;
            $post_id = $post->ID;    
        }
        set_post_view($post_id);
    }
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_get_post_views($postID){
        $count_key = 'wpb_post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0 View";
        }
        return $count.' Views';
    }

  // Length of title
  
  function max_title($title) {
          $max = 40;
          if( strlen($title) > $max) {
                  return substr($title, 0, $max). "&hellip;";
          } else {
                  return $title;
          }
  }

  add_filter('the_title', 'max_title');