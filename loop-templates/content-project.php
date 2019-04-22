<div class="col-12 col-md-6 mb-4 header p-2">
	<div class="container-fluid p-0 project">
		<div class="row no-gutters">
			<div class="col-10 p-2">
				<h4 class="project_title"><?php the_title(); ?></h4>
				<em><h6><?php the_field('role'); ?></h6></em>
			</div>
			<div class="col-2 p-2 d-flex justify-content-end align-items-end">
				<?php the_field('hours'); ?>
				<br>
				hrs
			</div>
			<div class="col-12 screenshot">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="col-12 p-2">
				<?php the_field('tools'); ?>
			</div>
		</div>
	</div> <!-- end container -->
</div> <!-- end col -->