<?php
/*
Description: WP Functions - Theme init
Theme: Bar Sotano 303
*/




//add image in posts
add_theme_support('post-thumbnails');

define('themeDir', get_template_directory() . '/');
define('themeDirUri', get_template_directory_uri());

require(themeDir . 'functions/gallery.php');
require(themeDir . 'functions/products.php');
/* Jquery + Main */
add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", false, '2.1.3' , true);
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'main', themeDirUri . '/assets/js/main.js', '', '', true );
    wp_enqueue_script( 'tabs', themeDirUri . '/assets/js/tabs.js', '', '', true );
}
/* remove emoji comments */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/* Add Menu */
add_action('init', 'register_my_menus');
function register_my_menus()
{
    register_nav_menus(
        array(
            'menuHeader' => __('Menu Header'),
            'menuFooter' => __('Menu Footer')
        )
    );
}

/* Add Space Search Widget */
add_action('widgets_init', 'widgetSearchFooter');
function widgetSearchFooter(){
    register_sidebar(
        array(
            'id' => 'widgetSearch', /* ID unique*/
            'name' => 'widgetSearch',
            'description' => 'widget',
            'before_widget' => '<div class "SearchFooter">',
            'after_widget' => '</div>',
            'before_title' => '<strong>',
            'after_title' => '</strong>',
        )
    );
}
/* Add Custom Search */
add_filter('get_search_form', 'searchCustom');
function searchCustom() {
    $form = '<form role="search" method="get"   action="' . home_url( '/' ) . '" >
    <input type="text" placeholder="Buscar" value="" name="s" >
        <button></button>

    </form>';
    return $form;
}
if( class_exists( 'kdMultipleFeaturedImages' ) ) {

    $args = array(
        'id' => 'featured-image-2',
        'post_type' => 'page',      // Set this to post or page
        'labels' => array(
            'name'      => 'Featured image 2',
            'set'       => 'Set featured image 2',
            'remove'    => 'Remove featured image 2',
            'use'       => 'Use as featured image 2',
        )
    );

    new kdMultipleFeaturedImages( $args );
}
add_theme_support('category-thumbnails');

function override_mce_options($initArray) 
{
  $opts = '*[*]';
  $initArray['valid_elements'] = $opts;
  $initArray['extended_valid_elements'] = $opts;
  return $initArray;
 }
 add_filter('tiny_mce_before_init', 'override_mce_options');

// add rewrite

function add_query_vars($aVars)
{
    $aVars[] = "cat_galerias"; // represents the name of the product category as shown in the URL
    $aVars[] = "cat_producto";

    return $aVars;
}
add_filter('query_vars', 'add_query_vars');
function add_rewrite_rules()
{
    add_rewrite_rule('^galeria/([^/]*)/?$', 'index.php?pagename=galeria&cat_galerias=$matches[1]', 'top');
    add_rewrite_rule('^producto/([^/]*)/?$', 'index.php?pagename=producto&cat_producto=$matches[1]', 'top');
}
add_action('init', 'add_rewrite_rules');