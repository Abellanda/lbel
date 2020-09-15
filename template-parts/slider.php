<div class="slider">
  <ul class="slides">

    <?php
    $args = array( 'post_type' => 'slider', 'posts_per_page' => -1 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>

    <?php if ( has_post_thumbnail($post->ID) ) {
     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
     $image = $image[0];
      } ?>

    <?php 
    $url_slider = get_field('url_slider'); 
    $img_mobile = get_field('img_mobile');
    ?>
    
    <li>
      <a href="<?php echo $url_slider; ?>">
        <div class="slide-img-desktop hide-on-med-and-down show-on-large" style="background-image: url('<?php echo $image; ?>'); background-position: center; background-repeat: no-repeat; background-size: 90%; height: 100%;"></div>

        <div class="slide-img-mobile show-on-medium-and-down" style="background-image: url('<?php echo $img_mobile; ?>'); background-position: center; background-repeat: no-repeat; background-size: 100%; height: 100%;"></div>

        <div class="caption" <?php// echo get_field('title_and_subtitle_position_'.$a); ?>>
          <h1><?php //echo get_field('title_'.$a); ?></h1>
          <h5 class="light grey-text text-lighten-3"><?php// echo get_field('subtitle_'.$a); ?></h5>
        </div>
      </a>
    </li>
  
    <?php endwhile;
    wp_reset_query(); ?>

  </ul>
</div>