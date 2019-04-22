<?php
/**
 * hero page.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$img = get_field('image');

?>

<section id="wrapper-hero" class="wrapper">

	<div class="container padding-container">
		<div class="row no-gutters hero justify-content-center justify-content-md-between">
			
			<div class="col-10 col-md-6">
				<article class="column container-fluid">
					<div class="row">
						<div class="col-auto mb-4 p-2 greeting">
							<h2><?php echo get_field('greeting'); ?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-auto mb-4 p-2 sub-header">
							<h4><?php echo get_field('subtitle'); ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-auto mb-4 p-2 about">
							<h5><?php echo get_field('about'); ?></h5>
						</div>
					</div>
				</article>
			</div> <!-- end primary row -->

			<div class="column d-none d-md-flex justify-content-center align-items-center col-md-4" id="featimg">
				<img class="img-fluid" src="<?php echo $img['url'] ?>">
			</div>
			
		</div> <!-- end row -->
	</div> <!-- end container -->
</section><!--  end hero wrapper -->