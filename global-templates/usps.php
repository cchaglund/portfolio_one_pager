<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$usps = new WP_query([
	'post_type' => 'pop_usp',
	'posts_per_page' => 3
]);

if (!$usps->have_posts()) {
	return;
}

?>

<section id="wrapper-usps" class="wrapper">

	<div class="container padding-container">
		<div class="row justify-content-center">
			<div class="col-10 col-md-11 usps">

				<div class="row justify-content-center">

					<?php 
						while ($usps->have_posts()) {
							$usps->the_post();
							get_template_part('loop-templates/content', 'usp');
						}

						wp_reset_postdata();
					?>

				</div>

			</div> <!-- end col -->
		</div> <!-- end row -->
	</div> <!-- end container -->

</section><!--  end usp wrapper -->