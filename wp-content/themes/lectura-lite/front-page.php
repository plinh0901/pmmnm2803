<?php
if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

?>

	<?php get_header(); ?>

<div id="content">
	
	<div class="wrapper-content-main">
	
		<?php get_template_part('slideshow', 'home'); ?>

		<?php if (get_theme_mod('lectura_lite_display_feat_pages') == 1) {
			get_template_part('featured-pages');
		}

		if ( !dynamic_sidebar('Homepage Content: Main') ) : ?> <?php endif;
		
		if (is_active_sidebar('home-col-1') || is_active_sidebar('home-col-2')) { ?>
		
		<div id="homepage-widgetized-columns">
			<div class="academia-column">
			
				<?php
				if ( !dynamic_sidebar('Homepage Content: Left Column') ) : ?> <?php endif;
				?>
			
			</div><!-- .academia-column -->
			<div class="academia-column">
			
			<?php
				if ( !dynamic_sidebar('Homepage Content: Right Column') ) : ?> <?php endif;
				?>
			
			</div><!-- .academia-column -->
		</div><!-- #homepage-widgetized-columns -->
		
		<?php } ?>
	
		<?php
			
			get_template_part('content', 'page');
		
		?>

	</div><!-- .wrapper-content-main -->

</div><!-- #content -->

<?php get_footer(); ?>

<?php endif; ?>