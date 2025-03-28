	</div><!-- .wrapper .wrapper-main -->
	
	<footer id="site-footer" class="site-footer">
	
		<?php if ( is_active_sidebar('footer-col-1') || is_active_sidebar('footer-col-2') || is_active_sidebar('footer-col-3') ) { ?>

		<div id="footer-main">
		
			<div class="wrapper wrapper-footer">
				<div class="lectura-footer-columns">
					<div class="academia-column academia-column-1">
						<?php
						if ( !dynamic_sidebar('Footer: Column 1') ) : ?> <?php endif;
						?>
					</div><!-- .academia-column .academia-column-1 -->
					<div class="academia-column academia-column-2">
						<?php
						if ( !dynamic_sidebar('Footer: Column 2') ) : ?> <?php endif;
						?>
					</div><!-- .academia-column .academia-column-2 -->
					<div class="academia-column academia-column-3">
						<?php
						if ( !dynamic_sidebar('Footer: Column 3') ) : ?> <?php endif;
						?>
					</div><!-- .academia-column .academia-column-3 -->
				</div><!-- .lectura-footer-columns -->
			
			</div><!-- .wrapper .wrapper-footer -->
		
		</div><!-- #footer-main -->
		
		<?php } ?>

		<div id="footer-copy">
		
			<div class="wrapper wrapper-footer-copy">
				
				<?php if ( get_theme_mod('theme-display-footer-credit', 1 ) == 1) { ?><p class="academia-credit"><?php esc_html_e('Powered by', 'lectura-lite'); ?> <a href="https://www.ilovewp.com/themes/lectura-lite/" rel="external noopener" target="_blank">Lectura Lite</a></p><?php } ?>
				<?php $copyright_default = __('Copyright &copy; ','lectura-lite') . date("Y",time()) . ' ' . get_bloginfo('name'); ?>
				<p class="copy"><?php echo esc_html(get_theme_mod( 'lectura_lite_copyright_text', $copyright_default )); ?></p>
			
			</div><!-- .wrapper .wrapper-footer-copy -->
		
		</div><!-- #footer-copy -->

	</footer><!-- .site-footer -->

</div><!-- #container -->

<?php 
wp_footer(); 
?>
</body>
</html>