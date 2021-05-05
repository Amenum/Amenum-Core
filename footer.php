<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amenum_Core
 */

?>

	<footer id="site-footer" class="site-footer bg-light">
  		<div id="footer-main" class="container text-md-left">
			<div class="row py-3">
				<div class="col-md-6 mt-md-0 mt-3">
					<h5 class="text-uppercase"><?php echo get_bloginfo ( 'name' ); ?></h5>
					<p>Here you can use rows and columns to organize your footer content.</p>
				</div>
				<hr class="clearfix w-100 d-md-none pb-3">
				<div class="col-md-3 mb-md-0 mb-3">
					<h5 class="text-uppercase"><?php echo wp_get_nav_menu_name('menu-1') ?></h5>
					<?php
					wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'	 => 'navbar-nav',
								)
							);
							?>
				</div>
			<div class="col-md-3 mb-md-0 mb-3">
				<h5 class="text-uppercase"><?php echo wp_get_nav_menu_name('footer-1') ?></h5>
				<?php
				wp_nav_menu(
							array(
								'theme_location' => 'footer-1',
								'menu_id'        => 'footer-1',
								'menu_class'	 => 'navbar-nav',
							)
						);
						?>

			</div>
			</div>
			</div>
		</div> <!-- .footer-main -->

		<div class="site-info footer-copyright text-center bg-dark text-light py-3">
			<?php printf( esc_html__( 'Copyright &copy; %1$s %2$s', 'amenum-core' ), date("Y"), get_bloginfo ( 'name' ) ); ?>
			<span class="sep"> &middot; </span>
			<?php printf( esc_html__( 'Website by %s', 'amenum-core' ), '<a href="http://www.amenum.com">Amenum</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
