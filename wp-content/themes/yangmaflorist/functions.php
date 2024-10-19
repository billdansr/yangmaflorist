<?php

function yangmaflorsit_files() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'yangmaflorsit_files');

function yangmaflorist_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'yangmaflorist_features');
