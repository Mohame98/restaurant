<?php
function restauproject_enqueue_assets() {
    wp_enqueue_style('restauproject-style', get_stylesheet_uri());
    wp_enqueue_script('restauproject-script', get_template_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'restauproject_enqueue_assets');
 
// for menu
add_theme_support('custom-logo');
add_theme_support('menus');
add_theme_support('widgets');
function my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header nav'),
            'footer-menu' => __('Footer nav')
        )
    );
}
add_action('init', 'my_menus');

// for featured image
function enable_featured_img(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'enable_featured_img');

// all custom post types
$posttypes = array('meal', 'testimonial', 'infinite_carousel');
function restauproject_register_post_type($post_type) {
    $labels = array(
        'name' => $post_type,
        'singular_name' => 'New ' . $post_type,
        'add_new' => 'Add New ' . $post_type,
        'add_new_item' => 'Add New ' . $post_type,
        'edit_item' => 'Edit ' . $post_type
    );
    $args = array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => $post_type . 's'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-users',
        'labels' => $labels
    );
    register_post_type($post_type, $args);
}

add_action('init', function() use ($posttypes) {
    foreach ($posttypes as $posttype) {
        restauproject_register_post_type($posttype);
    }
});
?>