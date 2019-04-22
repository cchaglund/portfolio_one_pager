<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<section id="wrapper-contact" class="wrapper">

	<div class="container padding-container">
		<div class="row justify-content-center">
			<div class="col-10 col-md-11 mb-4 header ">
				<div class="container-fluid p-0">

					<div class="row no-gutters">
						<div class="col-12 mb-4">
							<h2 class="m-0" id="contact-title"><?php the_field('contact_title') ?></h2>
						</div>
						<div id="contact-form" class="col-12 p-0 d-flex justify-content-center">
							<?php the_field('contact_form') ?>
						</div>
					</div>

				</div> <!-- end container -->
			</div> <!-- end col -->
		</div> <!-- end row -->
	</div> <!-- end container -->

</section>