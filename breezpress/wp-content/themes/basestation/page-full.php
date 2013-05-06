<?php
/*
 * Template Name: Full width
 */

get_header(); ?>
  <?php do_action( 'basestation_content_before' ); ?>
    <div id="primary">
      <div id="content">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php do_action( 'basestation_loop_before' ); ?>
          <?php get_template_part( '/inc/parts/content', 'page' ); ?>
          <?php do_action( 'basestation_loop_after' ); ?>
          <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>

      <?php do_action( 'basestation_content_after' ); ?>
      </div><!-- #content -->
    </div><!-- #primary -->
<?php get_footer(); ?>