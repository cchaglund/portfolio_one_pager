<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer">

					<div class="row justify-content-center">
						
						<?php if (get_field('link_1')) : ?>
							<div class="col-auto text-center">
								<a href="<?php echo get_field('link_1')['link_1_url'] ?>">
									<?php echo get_field('link_1')['link_1_name'] ?>
								</a>
							</div>
						<?php endif; ?>

						<?php if (get_field('link_2')) : ?>
							<div class="col-auto text-center">
								<a href="<?php echo get_field('link_2')['link_2_url'] ?>">
									<?php echo get_field('link_2')['link_2_name'] ?>
								</a>
							</div>
						<?php endif; ?>

						<?php if (get_field('link_3')) : ?>
							<div class="col-auto text-center">
								<a href="<?php echo get_field('link_3')['link_3_url'] ?>">
									<?php echo get_field('link_3')['link_3_name'] ?>
								</a>
							</div>
						<?php endif; ?>

					</div>

					</div><!-- .site-info -->

				</footer><!-- end footer -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

