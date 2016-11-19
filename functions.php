<?php
function biensite_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'biensite_resources');

register_nav_menus(array(
    "header" => "Header Menu",
    "footer" => "Footer Menu"
));

function get_ancestors_top() {
    global $post;
    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

function has_children() {
    global $post;
    $pages = get_pages("child_of=" . $post->ID);
    return count($pages);
}