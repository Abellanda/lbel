<?php
/*
Template Name: Experiencias
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<h1 class="entry-title"><?php the_title(); ?></h1>

	<?php get_template_part( 'template-parts/category-grid' ); ?>

 	<?php the_content(); ?>

<?php endwhile;?>

<?php get_footer(); ?>