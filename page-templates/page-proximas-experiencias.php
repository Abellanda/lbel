<?php
/*
Template Name: Proximas Experiencias 
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap full-width">
	<main class="main-content">
		<?php get_template_part( 'template-parts/upcoming-meetings' ); ?>
	</main>
</div>
<?php get_footer();
