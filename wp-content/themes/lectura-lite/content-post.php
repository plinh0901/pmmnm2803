<div class="wrapper-content-main">

	<?php 
	while (have_posts()) : the_post(); 
	lectura_lite_helper_display_featured_image($post);
	?>
	<div id="lectura-content-columns">
		<div class="academia-column academia-column-main">

			<div class="post-meta-single">
				<h1 class="title title-l title-post-single"><?php the_title(); ?></h1>
				<p class="post-meta"><span class="datetime"><time datetime="<?php echo esc_attr(get_the_time("Y-m-d")); ?>" pubdate><?php echo esc_html(get_the_time(get_option('date_format'))); ?></time></span><span class="category"><?php the_category(', '); ?></span></p>
			</div><!-- .post-meta -->

			<div class="post-single">
			
				<?php the_content(); ?>
				
				<div class="cleaner">&nbsp;</div>
				
				<?php wp_link_pages(array('before' => '<p class="page-navigation"><strong>'.__('Pages', 'lectura-lite').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p class="post-meta"><strong>'.__('Tags', 'lectura-lite').':</strong> ', ', ', '</p>'); ?>
				
			</div><!-- .post-single -->
			
			<?php comments_template(); ?>  
			
		</div><!-- .academia-column .academia-column-main --><?php 
		endwhile; 
		
		get_sidebar();
		?>
	</div><!-- #lectura-content-columns -->

</div><!-- .wrapper-content-main -->