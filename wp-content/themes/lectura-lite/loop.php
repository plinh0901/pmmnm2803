<ul class="academia-posts-archive academia-loop-posts">
	
	<?php 
	while (have_posts()) : the_post();

	$classes = array('academia-post','academia-loop-post');
	if ( !has_post_thumbnail() ) {
		$classes[] = 'post-nothumbnail';
	} else {
		$classes[] = 'has-post-thumbnail';
	}	
	?>

	<li <?php post_class($classes); ?>>

		<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-cover"><?php 
			echo '<a href="' . esc_url( get_permalink() ) . '">';
			the_post_thumbnail('post-thumbnail');
			echo '</a>'; ?>
		</div><!-- .post-cover --><?php } ?>
		<div class="post-content">
			<h2 class="title-ms title-post"><a href="<?php echo esc_url ( get_permalink() ); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'lectura-lite' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
			<p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
			<p class="post-meta"><span class="datetime"><time datetime="<?php echo esc_attr(get_the_time("Y-m-d")); ?>" pubdate><?php echo esc_html(get_the_time(get_option('date_format'))); ?></time></span><span class="category"><?php the_category(', '); ?></span></p>
		</div><!-- .post-content -->=
		
	</li><!-- .academia-post -->
	
	<?php endwhile; ?>
	
</ul><!-- .academia-posts-archive .academia-loop-posts -->

<?php get_template_part( 'pagination'); ?>