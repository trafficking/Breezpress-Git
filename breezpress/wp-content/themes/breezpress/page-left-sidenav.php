<?php
/*
 * Template Name: Left Side Nav with Parent / Child pages
 */

get_header(); ?>

<!-- Main -->
  <?php do_action( 'basestation_content_before' ); ?>
  <div class="row">
    <div id="content" class="<?php echo apply_filters( 'basestation_content_container_class', 'large-9 columns push-3' ); ?>">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php do_action( 'basestation_loop_before' ); ?>
            <?php get_template_part( '/inc/parts/content', 'page' ); ?>
            <?php do_action( 'basestation_loop_after' ); ?>
            <?php comments_template( '', true ); ?>

            <?php endwhile; // end of the loop. ?>

    <?php do_action( 'basestation_content_after' ); ?>
    </div><!-- #content -->

    <div id="left-side-nav" class="<?php echo apply_filters( 'basestation_side_nav_container_class', 'large-3 columns pull-9' ); ?>">
      <?php do_action( 'basestation_side_nav' ); ?>
    </div>

  </div><!-- .row -->
<?php get_footer(); ?>