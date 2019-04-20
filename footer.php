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

<div class="wrapper bg-primary" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer">

					<div class="row">
						<div class="col text-center">
							<i class="fab fa-linkedin-in">text</i>
						</div>
						<div class="col text-center">
							<i class="fab fa-linkedin-in">text</i>
						</div>
						<div class="col text-center">
							<i class="fab fa-linkedin-in">text</i>
						</div>
						<div class="col text-center">
							<i class="fab fa-linkedin-in">text</i>
						</div>
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

