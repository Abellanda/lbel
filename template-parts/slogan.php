<?php 
$slogan_title = get_field('slogan-title');
$slogan_text = get_field('slogan-text');
?>

<div class="slogan">
	<div class="slogan-title-container">
		<h1 class="slogan-title">
			<?php echo $slogan_title; ?>
		</h1>
	</div>
	<div class="slogan-text-container">
		<p class="slogan-text"><?php echo $slogan_text; ?></p>
	</div>
</div>