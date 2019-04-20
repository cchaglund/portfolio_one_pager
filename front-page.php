<?php
/**
 * The template for displaying front page.
 *
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>



<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php get_template_part('global-templates/intro') ?>
				<?php get_template_part('global-templates/usps') ?>
				<?php get_template_part('global-templates/portfolio') ?>
				<?php get_template_part('global-templates/languages') ?>
				<?php get_template_part('global-templates/testimonials') ?>
				<?php get_template_part('global-templates/contact'); ?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
