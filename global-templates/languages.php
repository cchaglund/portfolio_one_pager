<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$languages = new WP_query([
	'post_type' => 'pop_language',
	'posts_per_page' => 10,
	'meta_key' => 'skill_level',
	'orderby' => 'meta_value',
	'order' => 'DESC'
]);

if (!$languages->have_posts()) {
	return;
}

?>

<section id="wrapper-languages" class="wrapper">

	<div class="container padding-container">
		<div class="row justify-content-center">
			<div class="col-10 col-md-11 languages">

				<div class="mb-5 language-header">
					<h3><?php the_field('language_header') ?></h3>
				</div>

				<div class="container-fluid p-0">
					<div class="row">

						<?php while ($languages->have_posts()) : $languages->the_post(); ?>
							<?php get_template_part('loop-templates/content', 'language') ?>
						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					</div> <!-- end row -->
				</div> <!-- end container -->

			</div> <!-- end col -->
		</div> <!-- end row -->
	</div> <!-- end container -->

</section><!--  end languages wrapper -->