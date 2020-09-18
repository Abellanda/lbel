<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
		<script src="https://kit.fontawesome.com/9aba606a5c.js" crossorigin="anonymous"></script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header" role="banner">

		<div class="navbar-fixed">
			<nav>
		    <div class="nav-wrapper">
		    	<div class="icon-wrapper">
		    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		    			<img class="logotipo" src="http://35.239.4.49/wp-content/uploads/2020/09/rectangle.png" alt="<?php bloginfo( 'name' ); ?>" width="70">
		    		</a>
		    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		    			<img class="logotipo" src="http://35.239.4.49/wp-content/uploads/2020/09/rectangle.png" alt="<?php bloginfo( 'name' ); ?>" width="70">
		    		</a>
		    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		    			<img class="logotipo" src="http://35.239.4.49/wp-content/uploads/2020/09/rectangle.png" alt="<?php bloginfo( 'name' ); ?>" width="70">
		    		</a>
		    	</div>

		      <?php site_top_bar_r(); ?>

		      <!-- a href="https://http://35.239.4.49/carrito/">
		        <i id="cart-mobile" class="material-icons show-on-medium-and-down hide-on-med-and-up">shopping_basket</i>
		      </a -->

		      <span class="right hide-on-large-only text-darken-1">
		        <i class="material-icons sidenav-trigger" data-target="mobile-menu">menu</i>
		      </span>

		    </div>
		  </nav>
		</div>

		<?php site_mobile_nav(); ?>
		
	</header>

	<!-- Modal Structure -->
	  <div id="search-box">
  		<div id="form-search">
  			<div id="search-close"><i class="far fa-times-circle"></i></div>
        <?php echo get_search_form(); ?>
      </div>
	  </div>

    <div id="nav-wrapper-ecommerce">
    	<?php //start cart count and link in header ?>
    	<?php if ( WC()->cart->get_cart_contents_count() !== 0 ) { ?>  
    	    <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d ', '%d ', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
    	    </a>
    	<?php } ?>
    	<?php //end cart count and link in header ?>
      <?php site_ecommerce_nav(); ?>
    </div>

		