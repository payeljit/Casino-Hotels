<?php

function casinohotel_theme_support(){
    //Add custom logo
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'casinohotel_theme_support');

// Register footer menu
function casinohotel_menus(){
    $locations = array(
      'footer' => 'Footer navigation menu' 
    );

    register_nav_menus($locations);
}
add_action('init', 'casinohotel_menus');


// Register css files external and internal
function casinohotel_register_styles() {

$version = wp_get_theme()->get( 'Version' );
wp_enqueue_style('casinohotel-style', get_template_directory_uri() . "/style.css", array('casinohotel-bootstrap'),$version , 'all');
wp_enqueue_style('casinohotel-custom-style', get_template_directory_uri() . "/assets/css/style.css", array('casinohotel-bootstrap'),$version , 'all');
wp_enqueue_style('casinohotel-responsive-style', get_template_directory_uri() . "/assets/css/mobile.css", array('casinohotel-bootstrap'),$version , 'all');
wp_enqueue_style('casinohotel-bootstrap',  "https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css", array(), '5.3.2', 'all');
wp_enqueue_style('casinohotel-fontawsome',  "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css", array(), '6.4.2', 'all');

}
add_action('wp_enqueue_scripts', 'casinohotel_register_styles');

// Register Js files external and internal
function casinohotel_register_scripts() {

wp_enqueue_script('casinohotel-bootstrap-js', "https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js", array(),'5.3.2', true );
wp_enqueue_script('casinohotel-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js", array(),'2.9.2', true );
wp_enqueue_script('casinohotel-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js", array(),'3.7.1', true );
wp_enqueue_script('casinohotel-custom', get_template_directory_uri() . "/assets/js/main.js", array(),'0.1', true );
wp_enqueue_script('casinohotel-fontawsome-js',"https://kit.fontawesome.com/48bcbf2c30.js", array(),'0.1', true );


}
add_action('wp_enqueue_scripts', 'casinohotel_register_scripts');


// Register custom post Casino Hotels
function post_type_casino_hotels() {


    $labels = array(
    
    'name' => _x('Casino Hotels', 'plural'),
    'singular_name' => _x('casino_hotels', 'singular'),
    'menu_name' => _x('Casino Hotels', 'admin menu'),
    'name_admin_bar' => _x('Casino Hotels', 'admin bar'),
    'add_new' => _x('Add Casino Hotels', 'add Casino Hotels'),
    'add_new_item' => __('Add New Casino Hotels'),
    'new_item' => __('New Casino Hotels'),
    'edit_item' => __('Edit Casino Hotels'),
    'view_item' => __('View Casino Hotels'),
    'all_items' => __('All Casino Hotels'),
    'search_items' => __('Search Casino Hotels'),
    'not_found' => __('No Casino Hotels found.'),
    
    );
    
    $args = array(
    
    
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'casino_hotels'),
    'has_archive' => true,
    'hierarchical' => false,
    
    );
    
    register_post_type('casino_hotels', $args);
    
    }
    
    add_action('init', 'post_type_casino_hotels');
?>

