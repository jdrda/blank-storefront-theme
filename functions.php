<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * Load styles
 */
function child_theme_enqueue_styles()
{

    /**
     * Parent style
     */
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    /**
     * Child style
     */
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ),
        wp_get_theme()->get('Version')
    );
}