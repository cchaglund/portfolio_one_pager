<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$projects = new WP_query([
	'post_type' => 'pop_project',
	'posts_per_page' => 4
]);

if ( !$projects->have_posts() ) {
	return;
}

?>

<div id="wrapper-portfolio" class="wrapper">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10 col-md-11 projects">
				<div class="container-fluid p-0">
					<div class="row portfolio">

						<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
							<?php get_template_part('loop-templates/content', 'project') ?>
						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					</div>
				</div>
			</div>

		</div> <!-- end row -->
	</div> <!-- end container -->
</div><!--  end portfolio wrapper -->