<?php
function rsorangetech_enqueue_styles() {
    wp_enqueue_style('rsorangetech-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'rsorangetech_enqueue_styles');

function rsorangetech_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'rsorangetech_theme_setup');
