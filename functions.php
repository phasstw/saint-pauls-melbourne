<?php

//Google Analytics
add_action('wp_head', 'cz_add_googleanalytics');
function cz_add_googleanalytics() { ?>
 
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126969627-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-126969627-1');
  </script>
  <?php 
}



//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

//allow Featured Images in Posts/Pages
add_theme_support( 'post-thumbnails' );

//Disable Emoji from WP Core
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

// default Media Dei scripts
function scripts_styles() {

    //Register Scripts/Styles
    wp_register_style( 'global-style', get_template_directory_uri() . '/css/global.css');
    wp_enqueue_style('global-style');
    
    wp_register_style('font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome-style');

    //Enqueue Scripts/Styles
    wp_enqueue_script('jquery'); // default jQuery

}
add_action( 'wp_enqueue_scripts', 'scripts_styles');




/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function media_dei_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'media_dei_custom_excerpt_length', 999 );

//Change excerpt text from "[...]"" to "Read more"
function media_dei_new_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read more', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'media_dei_new_excerpt_more' );


/* =BEGIN: Add Class to first Paragraph in WordPress the_content();
    Source: http://webdevbits.com/wordpress/add-class-to-first-paragraph-in-wordpress-the_content/
   ---------------------------------------------------------------------------------------------------- */
function first_paragraph($content){
  // add class to first paragraph of posts.
  if ( is_single()) {
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="drop-sc">', $content, 1);
  }
}
add_filter('the_content', 'first_paragraph');
?>
