<?php
/**
 * Intro page.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$img = get_field('image');

?>

<div id="wrapper-intro" class="wrapper">
	<div class="container">

		<div class="row no-gutters intro justify-content-center">
			<div class="col-10 col-md-7">
				<div class="container-fluid">
					<div class="row">
						<div class="col-auto mb-4 p-2 header bg-warning">
							<h2><?php echo get_field('greeting'); ?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-auto mb-4 p-2 sub-header bg-danger">
							<h4><?php echo get_field('subtitle'); ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-auto mb-4 p-2 about bg-success">
							<h5><?php echo get_field('about'); ?></h5>
						</div>
					</div>
				</div>
			</div> <!-- end primary row -->

			<div class="d-none d-md-flex justify-content-center align-items-center col-md-4">
				<img class="img-fluid" src="<?php echo $img['url'] ?>">
			</div>
			
		</div> <!-- end row -->
	</div> <!-- end container -->
</div><!--  end intro wrapper -->