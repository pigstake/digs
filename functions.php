<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

// Custom excerpts
function my_excerpt($excerpt_length = 55, $id = false, $echo = true) {

    $text = '';

          if($id) {
                $the_post = & get_post( $my_id = $id );
                $text = ($the_post->post_excerpt) ? $the_post->post_excerpt : $the_post->post_content;
          } else {
                global $post;
                $text = ($post->post_excerpt) ? $post->post_excerpt : get_the_content('');
    }

                $text = strip_shortcodes( $text );
                $text = apply_filters('the_content', $text);
                $text = str_replace(']]>', ']]&gt;', $text);
          $text = strip_tags($text);

                $excerpt_more = ' ' . '[...]';
                $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
                if ( count($words) > $excerpt_length ) {
                        array_pop($words);
                        $text = implode(' ', $words);
                        $text = $text . $excerpt_more;
                } else {
                        $text = implode(' ', $words);
                }
        if($echo)
  echo apply_filters('the_content', $text);
        else
        return $text;
}

function get_my_excerpt($excerpt_length = 55, $id = false, $echo = false) {
 return my_excerpt($excerpt_length, $id, $echo);
}
