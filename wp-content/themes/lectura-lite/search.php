<?php get_header(); ?>

<div id="content">
	
	<div class="wrapper-content-main">

		<div id="lectura-content-columns">
	
			<div class="academia-column academia-column-main">

				<div class="post-meta-single">
					<h1 class="title title-l title-post-single"><?php esc_html_e('Search Results for', 'lectura-lite');?>: <strong><?php the_search_query(); ?></strong></h1>
				</div><!-- .post-meta-single -->

				<?php get_template_part('loop'); ?>
			
			</div><!-- .academia-column .academia-column-main --><?php 
			get_sidebar();
			?>

		</div><!-- #lectura-content-columns -->
	
	</div><!-- .wrapper-content-main -->

</div><!-- #content -->

<?php get_footer(); ?>