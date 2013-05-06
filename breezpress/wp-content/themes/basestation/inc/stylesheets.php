<?php
/**
 * Register and enqueue the front end CSS
 *
 * @package Base Station
 * @since 1.0
 */

/* Load Foundation and theme styles */
function basestation_theme_styles() {

    $basestation = wp_get_theme();

    wp_enqueue_style( 'foundation', basestation_locate_template_uri( 'css/foundation.css' ), array(), $basestation['Version'], 'all' );

    wp_enqueue_style( 'offcanvas', basestation_locate_template_uri( 'css/offcanvas.css' ), array( 'foundation' ), $basestation['Version'], 'all' );

    wp_enqueue_style( 'custom', basestation_locate_template_uri( 'custom/custom.css' ), array(), $basestation['Version'], 'all' );

    wp_enqueue_style( 'basestation-glyphs', basestation_locate_template_uri( 'css/entypo-glyphs.css' ), array(), $basestation['Version'], 'all' );

    wp_enqueue_style( 'basestation-style', get_stylesheet_uri(), array( 'foundation' ), $basestation['Version'], 'all' );
}
add_action( 'wp_enqueue_scripts', 'basestation_theme_styles' );