<?php
/*
Template Name: Galería
*/
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

 	<?php the_content(); ?>

  <div class="photos-gallery">
  	<?php
  	  for( $i = 0; $i < 30; $i++) {
  	    $a = $i + 1;
  	    $image = get_field('magazine_'.$a);
  	    if( ($image) ) : ?>
  	    	<figure>
  	    		<img src="<?php echo $image; ?>" class="materialboxed" width="200" />
  	    	</figure>
  	  <?php endif; ?>
    <?php } ?>
  </div>
 
<?php endwhile;
wp_reset_query();?>

<?php get_footer(); ?>