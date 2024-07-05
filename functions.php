<?php

function tonyTheme_theme_support() {
// Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}

add_action('after_setup_theme', 'tonyTheme_theme_support');

function tonyTheme_menus() {
    $locations = array (
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}

add_action('init', 'tonyTheme_menus');

function tonyTheme_register_styles() {

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('tonyTheme-style', get_template_directory_uri() . '/style.css', array('tonyTheme-bootstrap'), $version, 'all');
    wp_enqueue_style('tonyTheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('tonyTheme-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');

}

add_action('wp_enqueue_scripts', 'tonyTheme_register_styles');

function tonyTheme_register_scripts() {

    wp_enqueue_script('tonyTheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('tonyTheme-mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '4.4.1', true);

}

add_action('wp_enqueue_scripts', 'tonyTheme_register_scripts');


function tonyTheme_widget_areas() {
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
        );

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
                'name' => 'Footer Area',
                'id' => 'footer-1',
                'description' => 'Footer Widget Area'
            )
            );
}

add_action('widgets_init', 'tonyTheme_widget_areas');

?>