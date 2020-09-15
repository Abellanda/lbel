<?php 
$experience_title = get_field('title_experiences');
$experience_banner = get_field('banner_experiences');
?>

<div class="experiencias">
	<div class="experiencias-title">
		<h3><?php echo $experience_title; ?></h3>
	</div>
	<div class="experiencias-banner">
		<img src="<?php echo $experience_banner; ?>" alt="<?php echo $experience_title; ?>">
	</div>
</div>