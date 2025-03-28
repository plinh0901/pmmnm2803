<?php 
if (get_theme_mod('lectura_lite_page_feat_1') != 'none' || get_theme_mod('lectura_lite_page_feat_2') != 'none' || get_theme_mod('lectura_lite_page_feat_3') != 'none') {

	$page_ids = array();
	if ( absint(get_theme_mod( 'lectura_lite_page_feat_1', false )) != 0 ) { $page_ids[] = absint(get_theme_mod( 'lectura_lite_page_feat_1', false )); }
	if ( absint(get_theme_mod( 'lectura_lite_page_feat_2', false )) != 0 ) { $page_ids[] = absint(get_theme_mod( 'lectura_lite_page_feat_2', false )); }
	if ( absint(get_theme_mod( 'lectura_lite_page_feat_3', false )) != 0 ) { $page_ids[] = absint(get_theme_mod( 'lectura_lite_page_feat_3', false )); }
	$page_count = 0;
	$page_count = count($page_ids);

	if ( $page_count > 0 ) {
		$custom_loop = new WP_Query( array( 'post_type' => 'page', 'post__in' => $page_ids, 'orderby' => 'post__in' ) );

		if ( $custom_loop->have_posts() ) { ?>

		<div class="section-academia-featured-pages">
			<ul class="academia-featured-pages">
				<?php 
				$i = 0;
				while ( $custom_loop->have_posts() ) : $custom_loop->the_post(); $i++;
				?><li class="academia-featured-page">
			
				<?php if ( has_post_thumbnail() ) { ?>
				<div class="post-cover"><?php 
					echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">';
					the_post_thumbnail('lectura_lite-thumb-feat-page');
					echo '</a>'; ?>
				</div><!-- .post-cover --><?php } ?>

				<div class="post-content">
					<h2 class="title-m title-post"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'lectura-lite' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h2>
					<?php if ( 1 === get_theme_mod( 'theme-display-featured-pages-excerpts', 1 ) ) { ?><p class="post-excerpt"><?php echo get_the_excerpt(); ?></p><?php } ?>
				</div><!-- .post-content -->
				</li>
			<?php endwhile; ?>
			</ul><!-- .academia-featured-pages -->
		</div><!-- .section-academia-featured-pages -->
		<?php
		} // if have_posts()
		wp_reset_postdata();
	} // if page_count > 0
} // if get_theme_mods()