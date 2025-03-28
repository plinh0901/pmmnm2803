<?php get_header(); ?>

<div id="content">
	
	<div class="wrapper-content-main">
	
		<?php if ( (!is_home() || is_front_page()) && !is_paged() ) { get_template_part('slideshow', 'home');

		if (get_theme_mod('lectura_lite_display_feat_pages') == 1) {

			get_template_part('featured-pages');

		}

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
			
			<?php 
			} 
		} 
		?>

		<div id="lectura-content-columns">
			<div class="academia-column academia-column-main">
				<p class="title-s title-widget title-widget-blue"><?php esc_html_e('Recent Posts', 'lectura-lite'); ?></p>
				<?php
				get_template_part('loop', 'archives');
				?>
			</div><!-- .academia-column .academia-column-main --><?php 
			get_sidebar();
			?>
		</div><!-- #lectura-content-columns -->
	</div><!-- .wrapper-content-main -->

</div><!-- #content -->

<?php get_footer(); ?>