<?php get_header(); ?>



<div class="container">
	 <?php while ( have_posts() ) : the_post(); ?>
	 	<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php //comments_template(); ?>
		<?php endwhile;?>
</div>

<?php get_footer(); ?>