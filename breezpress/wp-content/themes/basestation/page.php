<?php
/*
 * The template is for displaying all pages.
 */
get_header(); ?>

<!-- Main -->
  <?php do_action( 'basestation_content_before' ); ?>
  <div class="row">
    <div id="content" class="<?php echo apply_filters( 'basestation_content_container_class', 'large-9 columns' ); ?>">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php do_action( 'basestation_loop_before' ); ?>
            <?php get_template_part( '/inc/parts/content', 'page' ); ?>
            <?php do_action( 'basestation_loop_after' ); ?>
            <?php comments_template( '', true ); ?>

            <?php endwhile; // end of the loop. ?>

    <?php do_action( 'basestation_content_after' ); ?>
    </div><!-- #content -->
    <?php get_sidebar(); ?>
  </div><!-- .row -->
<?php get_footer(); ?>