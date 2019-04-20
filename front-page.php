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



				<div id="wrapper-hero" class="wrapper">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-10 mb-4 p-2 header bg-warning">
								Hi, I'm Chris
							</div>
							<div class="col-10 mb-4 p-2 sub-header bg-danger">
								Web Dev in Malmö
							</div>
							<div class="col-10 mb-4 p-2 about bg-success">
								<p>I'm studying full-stack web development with a CMS focus and loving it.</p>
								<p>In a previous life I worked in the Norwegian film and TV industry, coordinating and leading various productions.</p>
								<p>I bring my experience of leading media productions with me to my new career, working with agile methodologies to deliver quality CMS solutions.</p>
							</div>
						</div> <!-- end row -->
					</div> <!-- end container -->
				</div><!--  end hero wrapper -->


				<div id="wrapper-usps" class="wrapper">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-10 usps">

								<div class="usp row mb-4">
									<div class="usp-header col-auto p-2 bg-warning">
										Hardworking
									</div>
									<div class="usp-body col-12 p-2 bg-dark">
										Always work really hard
									</div>
								</div>

								<div class="usp row mb-4">
									<div class="usp-header col-auto p-2 bg-warning">
										Hardworking
									</div>
									<div class="usp-body col-12 p-2 bg-dark">
										Always work really hard
									</div>
								</div>

								<div class="usp row mb-4">
									<div class="usp-header col-auto p-2 bg-warning">
										Hardworking
									</div>
									<div class="usp-body col-12 p-2 bg-dark">
										Always work really hard
									</div>
								</div>
							</div> <!-- end col -->
						</div> <!-- end row -->
					</div> <!-- end container -->
				</div><!--  end usp wrapper -->


				<div id="wrapper-portfolio" class="wrapper">
					<div class="container">
						<div class="row justify-content-center">

							<div class="col-10 mb-4 p-0 header bg-warning">
								<div class="row no-gutters">
									<div class="col-10 p-2 bg-primary">
										<h4>Project title</h4>
										<h6>Role</h6>
									</div>
									<div class="col-2 p-2 bg-success">
										30hrs
									</div>
									<div class="col-12 p-2 bg-secondary">
										Image
									</div>
									<div class="col-12 p-2 bg-primary">
										Tech used
									</div>
								</div>
							</div> <!-- end col -->

							<div class="col-10 mb-4 p-0 header bg-warning">
								<div class="row no-gutters">
									<div class="col-10 p-2 bg-primary">
										<h4>Project title</h4>
										<h6>Role</h6>
									</div>
									<div class="col-2 p-2 bg-success">
										30hrs
									</div>
									<div class="col-12 p-2 bg-secondary">
										Image
									</div>
									<div class="col-12 p-2 bg-primary">
										Tech used
									</div>
								</div>
							</div> <!-- end col -->

							<div class="btn btn-primary">More</div>

						</div> <!-- end row -->
					</div> <!-- end container -->
				</div><!--  end portfolio wrapper -->

				<div id="wrapper-languages" class="wrapper">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-10 languages">

								<div class="language row mb-4">
									<div class="language-title col-auto p-2 bg-warning">
										Javascript
									</div>
									<div class="language-progress col-12 p-2 bg-dark">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
												<span class="sr-only">70% Complete</span>
											</div>
										</div> 
									</div>
								</div>

								<div class="language row mb-4">
									<div class="language-title col-auto p-2 bg-warning">
										PHP
									</div>
									<div class="language-progress col-12 p-2 bg-dark">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:55%">
												<span class="sr-only">55% Complete</span>
											</div>
										</div> 
									</div>
								</div>

								<div class="language row mb-4">
									<div class="language-title col-auto p-2 bg-warning">
										Laravel
									</div>
									<div class="language-progress col-12 p-2 bg-dark">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:45%">
												<span class="sr-only">70% Complete</span>
											</div>
										</div> 
									</div>
								</div>

							</div> <!-- end col -->
						</div> <!-- end row -->
					</div> <!-- end container -->
				</div><!--  end languages wrapper -->


				<div id="wrapper-testimonials" class="wrapper">
					<div class="container">

						<div class="row testimonial mb-4 justify-content-center">
							<div class="col-10 p-2 header bg-warning">
								<h5>"Chris has been an amazing worker and blabla. You can count on him for anything."</h5>
							</div>
							<div class="col-10 p-2 sub-header bg-danger text-right">
								<em>- Mother</em>
							</div>
						</div> <!-- end row -->

						<div class="row testimonial mb-4 justify-content-center">
							<div class="col-10 p-2 header bg-warning">
								<h5>"Chris has been an amazing worker and blabla. You can count on him for anything."</h5>
							</div>
							<div class="col-10 p-2 sub-header bg-danger text-right">
								<em>- Mother</em>
							</div>
						</div> <!-- end row -->

						<div class="row testimonial mb-4 justify-content-center">
							<div class="col-10 p-2 header bg-warning">
								<h5>"Chris has been an amazing worker and blabla. You can count on him for anything."</h5>
							</div>
							<div class="col-10 p-2 sub-header bg-danger text-right">
								<em>- Mother</em>
							</div>
						</div> <!-- end row -->

					</div> <!-- end container -->
				</div><!--  end testimonials wrapper -->

				<?php get_template_part('global-templates/contact'); ?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
