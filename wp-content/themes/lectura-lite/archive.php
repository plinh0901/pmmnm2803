<?php get_header(); ?>

<div id="content">
	
	<div class="wrapper-content-main">

		<div id="lectura-content-columns">
	
			<div class="academia-column academia-column-main">

				<div class="post-meta-single">
					<?php the_archive_title( '<h1 class="title title-l title-post-single">', '</h1>' ); ?>
					<?php the_archive_description( '<div class="category-excerpt">', '</div><!-- .category-excerpt -->' ); ?>
				</div><!-- .post-meta-single -->

				<?php get_template_part('loop'); ?>
			
			</div><!-- .academia-column .academia-column-main --><?php 
			get_sidebar();
			?>
		</div><!-- #lectura-content-columns -->
	
	</div><!-- .wrapper-content-main -->

</div><!-- #content -->

<?php get_footer(); ?>