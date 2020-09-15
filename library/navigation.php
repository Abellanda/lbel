<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

register_nav_menus(
	array(
		'top-bar-r'  => esc_html__( 'Right Top Bar', 'foundationpress' ),
		'mobile-nav' => esc_html__( 'Mobile', 'foundationpress' ),
		'ecommerce-nav' => esc_html__( 'e-commerce Links', 'foundationpress' ),
	)
);


/**
 * Desktop navigation - right top bar
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'site_top_bar_r' ) ) {
	function site_top_bar_r() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'hide-on-med-and-down',
				'items_wrap'     => '<ul id="%1$s" class="tab %2$s">%3$s</ul>',
				'theme_location' => 'top-bar-r',
				'depth'          => 3,
				'fallback_cb'    => false,
				'walker'         => new Site_Top_Bar_Walker(),
			)
		);
	}
}


/**
 * Mobile navigation - topbar (default) or offcanvas
 */
if ( ! function_exists( 'site_mobile_nav' ) ) {
	function site_mobile_nav() {
		wp_nav_menu(
			array(
				'container'      => false,                         // Remove nav container
				'menu'           => __( 'mobile-nav', 'site' ),
				'menu_class'     => 'mobile-menu',
				'theme_location' => 'mobile-nav',
				'items_wrap'     => '<ul id="mobile-menu" class="sidenav">%3$s</ul>',
				'fallback_cb'    => false,
				'walker'         => new Site_Mobile_Walker(),
			)
		);
	}
}

/**
 * Social navigation - topbar (default) or offcanvas
 */
if ( ! function_exists( 'site_ecommerce_nav' ) ) {
	function site_ecommerce_nav() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'ecommerce-links hide-on-med-and-down',
				'items_wrap'     => '<ul id="%1$s" class="tab %2$s">%3$s</ul>',
				'theme_location' => 'ecommerce-nav',
				'depth'          => 1,
				'fallback_cb'    => false,
				'walker'         => new Site_Top_Bar_Walker(),
			)
		);
	}
}


/**
 * Add support for buttons in the top-bar menu:
 * 1) In WordPress admin, go to Apperance -> Menus.
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'foundationpress_add_menuclass' ) ) {
	function foundationpress_add_menuclass( $ulclass ) {
		$find    = array( '/<a rel="button"/', '/<a title=".*?" rel="button"/' );
		$replace = array( '<a rel="button" class="button"', '<a rel="button" class="button"' );

		return preg_replace( $find, $replace, $ulclass, 1 );
	}
	add_filter( 'wp_nav_menu', 'foundationpress_add_menuclass' );
}
