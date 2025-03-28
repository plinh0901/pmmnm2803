<span id="site-mobile-menu-toggle"><button onclick="lectura_lite_toggle_class('site-mobile-menu','is-visible');" class="toggle-anchor"><span class="toggle-icon icon-icomoon academia-icon-bars"></span><span class="toggle-label"><?php esc_html_e( 'Open Menu', 'lectura-lite' ); ?></span></button></span>

<div id="site-mobile-menu">

	<div class="menu-wrapper">

		<?php

		$mobile_menu_location = '';

		// If the mobile menu location is not set, use the primary and expanded locations as fallbacks, in that order.
		if ( has_nav_menu( 'mobile' ) ) {
			$mobile_menu_location = 'mobile';
		} elseif ( has_nav_menu( 'primary' ) ) {
			$mobile_menu_location = 'primary';
		}
		?>

		<nav class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'lectura-lite' ); ?>">

			<ul class="mobile-menu-ul">

			<?php
			if ( $mobile_menu_location ) {

				wp_nav_menu(
					array(
						'container'			=> '',
						'items_wrap'		=> '%3$s',
						'show_toggles'		=> true,
						'theme_location'	=> $mobile_menu_location,
						'items_wrap' 		=> '<ul id="%1$s" class="%2$s">%3$s</ul>'
					)
				);

			} 
			?>

			</ul><!-- .mobile-menu-ul -->

		</nav><!-- .mobile-menu -->

	</div><!-- .menu-wrapper -->

</div><!-- #site-mobile-menu -->