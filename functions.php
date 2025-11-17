<?php

function enqueue_styles()
{
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_style('main-style', get_template_directory_uri() . '/styles/global.css', array(), filemtime(get_template_directory() . '/styles/global.css'));
}

add_action("wp_enqueue_scripts", "enqueue_styles");
