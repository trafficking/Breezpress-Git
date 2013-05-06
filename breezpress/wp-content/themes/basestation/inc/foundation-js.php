<?php
/**
 * Load Foundation javascript modules
 *
 * @package Base Station
 * @since 0.1
 */
function basestation_foundation_js_loader() {
    /* Load the Foundation libraries */
    wp_enqueue_script('zepto.js', get_template_directory_uri().'/js/vendor/zepto.js', array(),'3.22', true );
    wp_enqueue_script('foundation.js', get_template_directory_uri().'/js/foundation.js', array('zepto.js'),'3.22', true );
    // wp_enqueue_script('foundation.cookie.js', get_template_directory_uri().'/js/foundation.cookie.js', array('zepto.js'),'3.22', true );
    wp_enqueue_script('foundation.alerts.js', get_template_directory_uri().'/js/foundation.alerts.js', array('zepto.js'),'3.22', true );
    wp_enqueue_script('foundation.clearing.js', get_template_directory_uri().'/js/foundation.clearing.js', array('zepto.js'),'3.22', true );
    wp_enqueue_script('foundation.dropdown.js', get_template_directory_uri().'/js/foundation.dropdown.js', array('zepto.js'),'3.22', true );
    wp_enqueue_script('foundation.forms.js', get_template_directory_uri().'/js/foundation.forms.js', array('zepto.js'),'3.22', true );
    wp_enqueue_script('foundation.orbit.js', get_template_directory_uri().'/js/foundation.orbit.js', array('zepto.js'),'3.22', true );
    wp_enqueue_script('foundation.placeholder.js', get_template_directory_uri().'/js/foundation.placeholder.js', array('zepto.js'),'3.22', true );
    wp_enqueue_script('foundation.reveal.js', get_template_directory_uri().'/js/foundation.reveal.js', array('zepto.js'),'3.22', true );
    wp_enqueue_script('foundation.section.js', get_template_directory_uri().'/js/foundation.section.js', array('zepto.js'),'3.22', true );
    wp_enqueue_script('foundation.tooltips.js', get_template_directory_uri().'/js/foundation.tooltips.js', array('zepto.js'),'3.22', true );
    wp_enqueue_script('foundation.topbar.js', get_template_directory_uri().'/js/foundation.topbar.js', array('zepto.js'),'3.22', true );
    wp_enqueue_script('modernizr.foundation.js', get_template_directory_uri().'/js/modernizr.foundation.js', array('zepto.js'),'3.22', true );
    // wp_enqueue_script('app.js', get_template_directory_uri().'/js/app.js', array('zepto.js'), '3.22', true );
    // wp_enqueue_script('offcanvas.js', get_template_directory_uri().'/js/jquery.offcanvas.js', array('jquery'), '3.22', true );

    /* Load the pagination helper */
    wp_enqueue_script('basestation_page-links.js', get_template_directory_uri().'/js/basestation_page-links.js', array('jquery'),'1.0', true);

    /* Initialize */
    wp_enqueue_script('init.foundation.js', get_template_directory_uri().'/js/init.foundation.js', array('jquery'), '3.22', true );
}
add_action('wp_enqueue_scripts', 'basestation_foundation_js_loader');