<?php
/*
Template Name: Faqs
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<main class="main-content">

	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>	

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

						<ul class="collapsible">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
				      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
				    </li>
				    <li>
				      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
				      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
				    </li>
				    <li>
				      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
				      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
				    </li>
				  </ul>

				<div class="entry-content">
					<?php the_content(); ?>
					<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
				</div>
				<footer>
					<?php
						wp_link_pages(
							array(
								'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
								'after'  => '</p></nav>',
							)
						);
					?>
					<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
				</footer>
			</article>
	</div>

<?php endwhile;?>
</main>

<?php get_footer();
