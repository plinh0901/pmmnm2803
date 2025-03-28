<aside class="academia-column-aside">
<?php if ( (is_page() || is_page_template()) && 1 == get_theme_mod( 'theme-display-dynamic-menu', 1 ) ) { get_template_part('related-pages'); } ?>

<?php if (is_active_sidebar('sidebar')) { ?>
	<?php
	if ( !dynamic_sidebar('Sidebar') ) : ?> <?php endif;
	?>
<?php } ?>
</aside><!-- .academia-column-aside -->