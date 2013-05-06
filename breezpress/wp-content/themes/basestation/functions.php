<?php
/**
 * Set the content width based on the theme's design and stylesheet.
 * @since Base Station 0.1
 */
if ( ! isset( $content_width ) )
  $content_width = 940; /* pixels */


if ( ! function_exists( 'basestation_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function basestation_setup() {

  /* Custom template tags for this theme. */
  locate_template('/inc/template-tags.php', true);

  /* Clean up header output */
  locate_template('/inc/cleanup.php', true);

  /* Register the navigation menus. */
  locate_template('/inc/menus.php', true);

  /* Register sidebars */
  locate_template('/inc/sidebars.php', true);

  /* Header image */
  locate_template('/inc/header-image.php', true);

    /* Load theme options framework */
  locate_template('/inc/options-panel.php', true);

  /* Breadcrumbs */
  if ( of_get_option('basestation_breadcrumbs',1) ) {
    locate_template('/inc/breadcrumbs.php', true);
  }

  /* Custom functions that act independently of the theme templates */
  locate_template('/inc/tweaks.php', true);

  /* Load the CSS */
  locate_template('/inc/stylesheets.php', true);

  /* Load Foundation javascript */
  locate_template('/inc/foundation-js.php', true);

  /* Load Theme Layouts extension and add theme support for desired layouts */
  locate_template('/inc/theme-layouts.php', true);
  add_theme_support( 'theme-layouts', array( '1c', '2c-l', '2c-r' ) );

  /**
   * Make theme available for translation
   * Translations can be filed in the /languages/ directory
   * If you're building a theme based on basestation, use a find and replace
   * to change 'basestation' to the name of your theme in all the template files
   */
  load_theme_textdomain( 'basestation', get_template_directory() . '/languages' );


  /* Add default posts and comments RSS feed links to head */
  add_theme_support( 'automatic-feed-links' );


  /* Add support for post-thumbnails */
  add_theme_support('post-thumbnails');


  /* Add support for post formats. To be styled in later release. */
  add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ));

}
endif; // basestation_setup
add_action( 'after_setup_theme', 'basestation_setup' );


/*
 * Allow "a", "embed" and "script" tags in theme options text boxes
 */
function optionscheck_change_sanitize() {
  remove_filter( 'of_sanitize_text', 'sanitize_text_field' );
  add_filter( 'of_sanitize_text', 'custom_sanitize_text' );
}
add_action( 'admin_init','optionscheck_change_sanitize', 100 );

function custom_sanitize_text($input) {
  global $allowedposttags;
  $custom_allowedtags["a"] = array(
    "href" => array(),
    "target" => array(),
    "id" => array(),
    "class" => array() );
    $custom_allowedtags = array_merge($custom_allowedtags, $allowedposttags);
    $output = wp_kses( $input, $custom_allowedtags);
  return $output;
}



/**
 * Snatched from future release code in WordPress repo.
 *
 * Retrieve the URI of the highest priority template file that exists.
 *
 * Searches in the stylesheet directory before the template directory so themes
 * which inherit from a parent theme can just overload one file.
 *
 * @param string|array $template_names Template file(s) to search for, in order.
 * @return string The URI of the file if one is located.
 */
if ( ! function_exists( 'basestation_locate_template_uri' ) ):
function basestation_locate_template_uri( $template_names ) {
 $located = '';
 foreach ( (array) $template_names as $template_name ) {
   if ( !$template_name )
     continue;
   if ( file_exists(get_stylesheet_directory() . '/' . $template_name)) {
     $located = get_stylesheet_directory_uri() . '/' . $template_name;
     break;
   } else if ( file_exists(get_template_directory() . '/' . $template_name) ) {
     $located = get_template_directory_uri() . '/' . $template_name;
     break;
   }
 }

 return $located;
}
endif;


function basestation_wp_title( $title, $sep ) {
  global $paged, $page;

  if ( is_feed() )
    return $title;

  // Add the site name.
  $title .= get_bloginfo( 'name' );

  // Add the site description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    $title = "$title $sep $site_description";

  // Add a page number if necessary.
  if ( $paged >= 2 || $page >= 2 )
    $title = "$title $sep " . sprintf( __( 'Page %s', 'basestation' ), max( $paged, $page ) );

  return $title;
}
add_filter( 'wp_title', 'basestation_wp_title', 10, 2 );

function basestation_layouts_strings() {
    $strings = array(
      'default'           => __( 'Default', 'basestation' ),
      '2c-l'              => __( 'Content left. Sidebar right.', 'basestation' ),
      '2c-r'              => __( 'Content right. Sidebar left.', 'basestation' ),
      '1c'                => __( 'Full width. No sidebar.', 'basestation' ),
    );
    return $strings;
}
add_filter( 'theme_layouts_strings', 'basestation_layouts_strings' );



/**
 * Load custom editor styles
 */
function basestation_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'basestation_add_editor_styles' );