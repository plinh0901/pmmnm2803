<?php

// Get Header Style
if( ! function_exists( 'academiathemes_helper_get_header_style' ) ) {
	function academiathemes_helper_get_header_style() {

		$themeoptions_header_style = esc_attr(get_theme_mod( 'theme-header-style', 'left' ));

		if ( $themeoptions_header_style == 'left' ) {
			$default_style = 'page-header-left';
		} elseif ( $themeoptions_header_style == 'centered' ) {
			$default_style = 'page-header-centered';
		}

		return $default_style;
	}
}

// Get Sidebar Position for Current Page or Post
if( ! function_exists( 'academiathemes_helper_get_sidebar_position' ) ) {
	function academiathemes_helper_get_sidebar_position() {

		global $post;

		$themeoptions_sidebar_position = esc_attr(get_theme_mod( 'theme-sidebar-position', 'right' ));

		if ( $themeoptions_sidebar_position == 'left' ) {
			$default_position = 'page-sidebar-left';
		} elseif ( $themeoptions_sidebar_position == 'right' ) {
			$default_position = 'page-sidebar-right';
		}

		return $default_position;
	}
}

// Page/Post Title
if( ! function_exists( 'lectura_lite_helper_display_featured_image' ) ) {
	function lectura_lite_helper_display_featured_image($post) {

		if( ! is_object( $post ) ) return;

		$themeoptions_display_post_featured_image = esc_attr(get_theme_mod( 'theme-display-post-featured-image', 0 ));
		if ( $themeoptions_display_post_featured_image == 0 ) {
			return;
		}

		if ( has_post_thumbnail() ) {
			echo '<div class="entry-inner-thumbnail">';
			the_post_thumbnail('lectura_lite-thumb-slideshow');
			echo '</div><!-- .entry-inner-thumbnail -->';
		}
		
	}
}

/**
 * Adds a Sub Nav Toggle to the Expanded Menu and Mobile Menu.
 *
 * @param stdClass $args  An object of wp_nav_menu() arguments.
 * @param WP_Post  $item  Menu item data object.
 * @param int      $depth Depth of menu item. Used for padding.
 * @return stdClass An object of wp_nav_menu() arguments.
 */
function lectura_lite_add_sub_toggles_to_main_menu( $args, $item, $depth ) {

	// Add sub menu toggles to the Expanded Menu with toggles.
	if ( isset( $args->show_toggles ) && $args->show_toggles ) {

		$args->after  = '';

		if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {

			$args->after .= '<button onclick="lectura_lite_toggle_class(\'menu-item-' . $item->ID .'\',\'is-visible\');" class="sub-menu-toggle toggle-anchor"><span class="screen-reader-text">' . __( 'Show sub menu', 'lectura-lite' ) . '</span><span class="icon-icomoon academia-icon-chevron-down"></span></span></button>';

		}
	} 

	return $args;

}

add_filter( 'nav_menu_item_args', 'lectura_lite_add_sub_toggles_to_main_menu', 10, 3 );