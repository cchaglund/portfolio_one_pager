<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$testimonials = new WP_query([
	'post_type' => 'pop_testimonial',
	'posts_per_page' => 3
]);

if (!$testimonials->have_posts()) {
	return;
}

?>

<div id="wrapper-testimonials" class="wrapper">
	<div class="container">
		<div class="row testimonials mb-4 justify-content-center">
			<div class="col-10 col-md-11">
				<div class="container-fluid p-0">

					<div class="row justify-content-center">
						<?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
							<?php get_template_part('loop-templates/content', 'testimonial') ?>
						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>
					</div>

				</div>
			</div>
		</div>
	</div> <!-- end container -->
</div><!--  end testimonials wrapper -->