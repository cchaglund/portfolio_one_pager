<?php 

	$skill_level_percent = get_field('skill_level') * 20;

?>

<div class="col-12 col-lg-6">
	<div class="container">
		<div class="language row mb-4">
			<div class="language-title col-auto p-2">
				<?php the_title(); ?>
			</div>
			<div class="language-progress col-12 p-2">
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skill_level_percent ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $skill_level_percent ?>%">
						<span class="sr-only"><?php echo $skill_level_percent ?>% Complete</span>
					</div>
				</div> 
			</div>
		</div>
	</div>
</div>