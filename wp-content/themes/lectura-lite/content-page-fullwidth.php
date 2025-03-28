<?php 
while (have_posts()) : the_post(); 
lectura_lite_helper_display_featured_image($post);
?>
	<div class="academia-column academia-column-main">

		<div class="post-meta-single">
			<h1 class="title title-l title-post-single"><?php the_title(); ?></h1>
		</div><!-- .post-meta -->

		<div class="post-single">
		
			<?php the_content(); ?>
			
			<div class="cleaner">&nbsp;</div>
			
			<?php wp_link_pages(array('before' => '<p class="page-navigation"><strong>'.__('Pages', 'lectura-lite').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
		</div><!-- .post-single -->
		
		<?php comments_template(); ?>  
		
</div><!-- .academia-column .academia-column-main --><?php endwhile; ?>