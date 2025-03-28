<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="profile" href="//gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="container">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lectura-lite' ); ?></a>

	<div class="wrapper wrapper-main">
	
		<header id="site-masthead" role="banner" class="site-header">
		
			<div class="wrapper-header">
			
				<?php if (has_nav_menu( 'secondary' )) { ?>
				<nav id="useful-menu">
					
					<?php wp_nav_menu( array(
						'container' => '', 
						'container_class' => '', 
						'menu_class' => 'useful-menu', 
						'menu_id' => 'menu-secondary-menu', 
						'sort_column' => 'menu_order', 
						'depth' => '1', 
						'theme_location' => 'secondary')); ?>

				</nav><!-- #useful-menu -->
				<?php }	?>

				<div id="site-logo">
					<?php
					if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {
						lectura_lite_the_custom_logo();
					} else { ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php } ?>
				</div><!-- #site-logo -->
				
			</div><!-- .wrapper-header -->
		
			<div class="wrapper-menu">

				<?php
				// Output the mobile menu
				get_template_part( 'template-parts/mobile-menu' );
				?>

				<nav id="site-nav-main">

					<?php if (has_nav_menu( 'primary' )) { 
						wp_nav_menu( array(
							'container' => '', 
							'container_class' => '', 
							'menu_class' => 'navbar-nav dropdown sf-menu clearfix', 
							'menu_id' => 'lectura-menu-main',
							'sort_column' => 'menu_order', 
							'theme_location' => 'primary', 
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
						) );
					}
					else
					{

						if (current_user_can('edit_theme_options')) {
							echo '<p class="academia-notice">';
							echo __('Please set your Main Menu on this page:','lectura-lite') . '<a href="' . esc_url(get_admin_url( '', 'nav-menus.php' )) . '"> ' . __('Appearance > Menus','lectura-lite') . '</a><br>';
							echo __('Other options and theme elements can be set up on this page:','lectura-lite') . '<a href="' . esc_url(get_admin_url( '', 'customize.php' )) . '"> ' . __('Appearance > Customize','lectura-lite') . '</a>';
							echo '</p>';
						}

					}
					?>

				</nav><!-- #site-nav-main -->

			</div><!-- .wrapper-menu -->
		
		</header><!-- .site-header -->