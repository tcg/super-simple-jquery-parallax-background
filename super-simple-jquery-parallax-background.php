<?php
/*
Plugin Name: Super Simple jQuery Parallax Background
Plugin URI: https://github.com/tcg/super-simple-jquery-parallax-background
Description: For themes with background images, creates a parallax effect when scrolling. Super simple; no configuration. Just works.
Author: Tommy George
Author URI: https://twitter.com/tommygeorge
Version: 1.0
*/

/**
 * Register and queue the javascript file that will activate the parallax.
 */
function super_simple_jquery_parallax_background_action() {
    // Register and queue Javascript file.
    wp_register_script(
        'super_simple_jquery_parallax_background_js',
        // dirname(__FILE__)
        plugins_url('/assets/js/super-simple-jquery-parallax-background.js', __FILE__),
        array('jquery'), // Dependency.
        false, // Specific version, if exists.
        true // Enqueue for footer instead of head.
    );
    wp_enqueue_script('super_simple_jquery_parallax_background_js');
}

add_action('wp_enqueue_scripts', 'super_simple_jquery_parallax_background_action');
