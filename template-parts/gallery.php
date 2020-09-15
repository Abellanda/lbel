<div class="photos-gallery">
	<?php
	  for( $i = 0; $i < 55; $i++) {
	    $a = $i + 1;
	    $image = get_field('magazine_'.$a);
	    if( ($image) ) : ?>
	    	<figure>
	    		<img src="<?php echo $image; ?>" class="materialboxed" width="270" />
	    	</figure>
	  <?php endif; ?>
  <?php } ?>
</div>