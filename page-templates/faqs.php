<?php
/*
Template Name: Faqs
*/
get_header(); ?>

<main class="main-content">

	<div class="container">

		<header>
			<h1 class="entry-title">Faqs</h1>
		</header>

		<ul class="collapsible">
			<?php
			$args = array( 'post_type' => 'faqs', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>

						<li id="post-<?php the_ID(); ?>" class="article-blog">
							<div class="collapsible-header"><i class="material-icons">filter_drama</i> <?php the_title(); ?></div>
				      <div class="collapsible-body"><span><?php the_content(); ?></span></div>
						</li>

				<?php endwhile; ?>
				
		</ul><!-- //colapsible -->
	
	</div><!-- //container -->

</main>

<?php get_footer();
