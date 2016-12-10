<?php

// Include stylesheet in the theme
function biensite_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'biensite_resources');

// Get ancestor's top id
function get_ancestors_top() {
    global $post;
    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

// Check if post has children
function has_children() {
    global $post;
    $pages = get_pages("child_of=" . $post->ID);
    return count($pages);
}

// Customize excerpt length
function custom_excerpt_length() {
    return 30;
}

add_filter("excerpt_length", "custom_excerpt_length");

// Theme setup
function biensite_setup() {

    // Register navigation menus
    register_nav_menus(array(
        "header" => "Header Menu",
        "footer" => "Footer Menu"
    ));

    // Add featured image support
    add_theme_support("post-thumbnails");

    // Add image sizes
    add_image_size("small-thumbnail", 180, 120, true);
    add_image_size("banner-image", 920, 210, array("left", "top"));

    // Enable post formats
    add_theme_support("post-formats", array("aside", "gallery", "link"));
}

// Register widgets support
function biensite_widgets() {
    register_sidebar(array(
        "name" => "Sidebar",
        "id" => "sidebar1",
        "before_widget" => "<div class='widget-item'>",
        "after_widget" => "</div>",
        "before_title" => "<h3 class='widget-title'>",
        "after_title" => "</h3>"
    ));
    register_sidebar(array(
        "name" => "Footer Area 1",
        "id" => "footer1",
        "before_widget" => "<div class='widget-item'>",
        "after_widget" => "</div>",
        "before_title" => "<h3 class='widget-title'>",
        "after_title" => "</h3>"
    ));
    register_sidebar(array(
        "name" => "Footer Area 2",
        "id" => "footer2",
        "before_widget" => "<div class='widget-item'>",
        "after_widget" => "</div>",
        "before_title" => "<h3 class='widget-title'>",
        "after_title" => "</h3>"
    ));
    register_sidebar(array(
        "name" => "Footer Area 3",
        "id" => "footer3",
        "before_widget" => "<div class='widget-item'>",
        "after_widget" => "</div>",
        "before_title" => "<h3 class='widget-title'>",
        "after_title" => "</h3>"
    ));
    register_sidebar(array(
        "name" => "Footer Area 4",
        "id" => "footer4",
        "before_widget" => "<div class='widget-item'>",
        "after_widget" => "</div>",
        "before_title" => "<h3 class='widget-title'>",
        "after_title" => "</h3>"
    ));
}

add_action("after_setup_theme", "biensite_setup");
add_action("widgets_init", "biensite_widgets");