</section>
	<section id="mainside" role="complementary">
		<nav id="sideMenu" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => false, 'menu_class' => '', 'items_wrap' => '<ul class="nav-bar">%3$s</ul>', 'fallback_cb' => false ) ); ?>
		</nav>
	</section>

</div><!-- #Main -->

<?php do_action( 'basestation_main_after' ); ?>

	<div id="footer-container">
		<div id="footer-row" class="row footerwidget">
			<?php dynamic_sidebar("Footer"); ?>
		</div>
	</div>

</div><!-- #Page -->

<?php do_action( 'basestation_footer_before' ); ?>

<footer class="fixed-footer">
	<div class="row">
		<div class="large-12 columns">
			<?php widgets_on_template('test'); ?>
		</div>
	</div>
</footer>

<?php do_action( 'basestation_footer_after' ); ?>
<?php wp_footer(); ?>
<?php do_action( 'basestation_footer' ); ?>
</body>
</html>