<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<title>Modern Family Expo</title>

<?php get_template_part( '/inc/parts/meta' ); ?>
<?php if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

<!--[if lt IE 8]>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/general_foundicons_ie7.css">
<![endif]-->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php do_action( 'basestation_head' ); ?>
<?php wp_head(); ?>

</head>

<body <?php body_class( 'off-canvas hide-extras' ); ?>>
<!--[if lt IE 8]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->


<!--
	Main header -  where header/description
	would normally go -->
		<header id="masthead" class="large-12 columns">

		</header>


	<div id="page" class="row hfeed">
		<?php do_action( 'before' ); ?>
		<?php do_action( 'basestation_header_before' ); ?>


<!--
	Displays top navigation bar if set
	in theme options -->
		<?php if ( of_get_option('basestation_show_top_navbar',1) ) {
		  get_template_part( '/inc/parts/menu', 'top' );
		} ?>

<!--
	Displays breadcrumbs if set
	in theme options -->
	<?php do_action( 'basestation_header_after' ); ?>
	<?php if ( function_exists('basestation_breadcrumbs') && !is_front_page() ) { basestation_breadcrumbs(); } ?>
	<?php do_action( 'basestation_main_before' ); ?>


	<div id="main">
		<section role="main">