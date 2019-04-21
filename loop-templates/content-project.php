<div class="col-12 col-md-6 mb-4 header">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-10 p-2 bg-primary">
				<h4><?php the_title(); ?></h4>
				<h6><?php the_field('role'); ?></h6>
			</div>
			<div class="col-2 p-2 bg-success">
				<?php the_field('hours'); ?>
			</div>
			<div class="col-12 p-2 bg-secondary">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="col-12 p-2 bg-primary">
				<?php the_field('tools'); ?>
			</div>
		</div>
	</div>
</div> <!-- end col -->