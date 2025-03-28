<?php get_header(); ?>

<div id="content">
	
	<div class="wrapper-content-main">
	
		<div id="lectura-content-columns">
			<div class="academia-column academia-column-main">

				<div class="post-meta-single">
					<h1 class="title title-l title-post-single"><?php esc_html_e('Page not found', 'lectura-lite'); ?></h1>
				</div><!-- .post-meta-single -->

				<div class="post-single">
		
					<p><?php esc_html_e( 'Apologies, but the requested page cannot be found. Perhaps searching will help find a related page.', 'lectura-lite' ); ?></p>
					
					<h3 class="title-s"><?php esc_html_e( 'Browse Categories', 'lectura-lite' ); ?></h3>
					<ul>
						<?php wp_list_categories('title_li=&hierarchical=0&show_count=1'); ?>	
					</ul>
				
					<h3 class="title-s"><?php esc_html_e( 'Monthly Archives', 'lectura-lite' ); ?></h3>
					<ul>
						<?php wp_get_archives('type=monthly&show_post_count=1'); ?>	
					</ul>
					
				</div><!-- .post-single -->	
			
			</div><!-- .academia-column .academia-column-main --><?php 
			get_sidebar();
			?>
		</div><!-- #lectura-content-columns -->
	
	</div><!-- .wrapper-content-main -->

</div><!-- #content -->

<?php get_footer(); ?>