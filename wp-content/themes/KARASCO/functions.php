<?php

function load_stylesheets()
{

wp_register_style('app-min', get_template_directory_uri() . '/css/app.min.css', array(), 1, 'all' );
wp_enqueue_style('app-min');

wp_register_style('fontawesome2', get_template_directory_uri() . '/css/fontawesome.min.css', array(), 1, 'all' );
wp_enqueue_style('fontawesome2');

wp_register_style('fontawesome', get_template_directory_uri() . '/css/all.min.css', array(), 1, 'all' );
wp_enqueue_style('fontawesome');

wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all' );
wp_enqueue_style('style');



}
add_action('wp_enqueue_scripts', 'load_stylesheets');




// Load scripts


function addjs()
{

    wp_deregister_script( 'jquery' );

    wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-3.7.1.min.js',  array() , 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('app-min', get_template_directory_uri() . '/js/app.min.js',  array() , 1, 1, 1);
    wp_enqueue_script('app-min');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js',  array() , 1, 1, 1);
    wp_enqueue_script('main');



}
add_action('wp_enqueue_scripts', 'addjs');

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' ); 
}


/*************************WEBP SUPPORT CODE************************ */
function webp_upload_mimes( $existing_mimes ) {
 // add webp to the list of mime types
 $existing_mimes['webp'] = 'image/webp';
 // return the array back to the function with our added mime type
 return $existing_mimes;
 }
 add_filter( 'mime_types', 'webp_upload_mimes' );
 //** * Enable preview / thumbnail for webp image files.*/
 function webp_is_displayable($result, $path) {
 if ($result === false) {
 $displayable_image_types = array( IMAGETYPE_WEBP );
 $info = @getimagesize( $path );
 if (empty($info)) {
 $result = false;
 } elseif (!in_array($info[2], $displayable_image_types)) {
 $result = false;
 } else {
 $result = true;
 }
 }
 return $result;
 }
 add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);
 /*************************WEBP SUPPORT CODE************************ */