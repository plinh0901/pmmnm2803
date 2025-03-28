<?php
/**
 * Define Constants
 */
if( ! defined( 'ACADEMIATHEMES_SHORTNAME' ) ) {
	define( 'ACADEMIATHEMES_SHORTNAME', 'lectura-lite' );
}
if( ! defined( 'ACADEMIATHEMES_PAGE_BASENAME' ) ) {
	define( 'ACADEMIATHEMES_PAGE_BASENAME', 'lectura-lite-doc' );
}
if( ! defined( 'ACADEMIATHEMES_THEME_DETAILS' ) ) {
	define( 'ACADEMIATHEMES_THEME_DETAILS', 'https://www.ilovewp.com/themes/lectura-lite/?utm_source=dashboard&utm_medium=doc-page&utm_campaign=lectura-lite&utm_content=theme-details-link' );
}
if( ! defined( 'ACADEMIATHEMES_THEME_DEMO' ) ) {
	define( 'ACADEMIATHEMES_THEME_DEMO', 'https://demo.academiathemes.com/?theme=lectura-lite&utm_source=dashboard&utm_medium=doc-page&utm_campaign=lectura-lite&utm_content=demo-link' );
}
if( ! defined( 'ACADEMIATHEMES_THEME_VIDEO_GUIDE' ) ) {
	define( 'ACADEMIATHEMES_THEME_VIDEO_GUIDE', 'https://youtu.be/TPgI4GcOFtY');
}
if( ! defined( 'ACADEMIATHEMES_THEME_DOCUMENTATION_URL' ) ) {
	define( 'ACADEMIATHEMES_THEME_DOCUMENTATION_URL', 'https://www.ilovewp.com/documentation/lectura-lite/?utm_source=dashboard&utm_medium=doc-page&utm_campaign=lectura-lite&utm_content=documentation-link' );
}
if( ! defined( 'ACADEMIATHEMES_THEME_SUPPORT_FORUM_URL' ) ) {
	define( 'ACADEMIATHEMES_THEME_SUPPORT_FORUM_URL', 'https://wordpress.org/support/theme/lectura-lite/' );
}
if( ! defined( 'ACADEMIATHEMES_THEME_REVIEW_URL' ) ) {
	define( 'ACADEMIATHEMES_THEME_REVIEW_URL', 'https://wordpress.org/support/theme/lectura-lite/reviews/#new-post' );
}
if( ! defined( 'ACADEMIATHEMES_THEME_UPGRADE_URL' ) ) {
	define( 'ACADEMIATHEMES_THEME_UPGRADE_URL', 'https://www.ilovewp.com/themes/lectura-lite/?utm_source=dashboard&utm_medium=doc-page&utm_campaign=lectura-lite&utm_content=upgrade-button' );
}
if( ! defined( 'ACADEMIATHEMES_THEME_DEMO_IMPORT_URL' ) ) {
	define( 'ACADEMIATHEMES_THEME_DEMO_IMPORT_URL', false );
}

/**
 * Specify Hooks/Filters
 */
add_action( 'admin_menu', 'academiathemes_add_menu' );

/**
* The admin menu pages
*/
function academiathemes_add_menu(){
	
	add_theme_page( __('Lectura Lite Theme','lectura-lite'), __('Lectura Lite Theme','lectura-lite'), 'edit_theme_options', ACADEMIATHEMES_PAGE_BASENAME, 'academiathemes_settings_page_doc' ); 

}

// ************************************************************************************************************

/*
 * Theme Documentation Page HTML
 * 
 * @return echoes output
 */
function academiathemes_settings_page_doc() {
	// get the settings sections array
	$theme_data = wp_get_theme();
	?>
	
	<div class="academiathemes-wrapper">
		<div class="academiathemes-header">
			<div id="academiathemes-theme-info">
				<div class="academiathemes-message-image">
					<img class="academiathemes-screenshot" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.jpg" alt="<?php esc_attr_e( 'Lectura Lite Theme Screenshot', 'lectura-lite' ); ?>" />
				</div><!-- ws fix
				--><p><?php 

					echo sprintf( 
					/* translators: Theme name and version */
					__( '<span class="theme-name">%1$s Lite Theme</span> <span class="theme-version">(version %2$s)</span>', 'lectura-lite' ), 
					esc_html($theme_data->name),
					esc_html($theme_data->version)
					); ?></p>
					<p class="theme-buttons"><a class="button button-primary" href="<?php echo esc_url(ACADEMIATHEMES_THEME_DETAILS); ?>" rel="noopener" target="_blank"><?php esc_html_e('Theme Details','lectura-lite'); ?></a>
				<a class="button button-primary" href="<?php echo esc_url(ACADEMIATHEMES_THEME_DEMO); ?>" rel="noopener" target="_blank"><?php esc_html_e('Theme Demo','lectura-lite'); ?></a>
				<?php if ( ACADEMIATHEMES_THEME_VIDEO_GUIDE ) { ?><a class="button button-primary academiathemes-button academiathemes-button-youtube" href="<?php echo esc_url(ACADEMIATHEMES_THEME_VIDEO_GUIDE); ?>" rel="noopener" target="_blank"><span class="dashicons dashicons-youtube"></span> <?php esc_html_e('Theme Video Tutorial','lectura-lite'); ?></a><?php } ?></p>
			</div><!-- #academiathemes-theme-info -->
		</div><!-- .academiathemes-header -->
		
		<div class="academiathemes-documentation">

			<ul class="academiathemes-doc-columns clearfix">
				<li class="academiathemes-doc-column academiathemes-doc-column-1">
					<div class="academiathemes-doc-column-wrapper">
						<div class="doc-section">
							<h3 class="column-title"><span class="academiathemes-icon dashicons dashicons-editor-help"></span><span class="academiathemes-title-text"><?php esc_html_e('Documentation and Support','lectura-lite'); ?></span></h3>
							<div class="academiathemes-doc-column-text-wrapper">
								<?php if ( ACADEMIATHEMES_THEME_LITE && ACADEMIATHEMES_THEME_SUPPORT_FORUM_URL ) { ?><p><?php 
								echo sprintf( 
								/* translators: Theme name and link to WordPress.org Support forum for the theme */
								__( 'Support for %1$s Theme is provided in the official WordPress.org community support forums. ', 'lectura-lite' ), 
								esc_html($theme_data->name)	); ?></p><?php } elseif ( ACADEMIATHEMES_THEME_PRO ) { ?>
									<p><?php esc_html_e('The usual response time is less than 45 minutes during regular work hours, Monday through Friday, 9:00am - 6:00pm (GMT+01:00). <br>Response time can be slower outside of these hours.','lectura-lite'); ?></p>
								<?php } ?>

								<p class="doc-buttons"><a class="button button-primary" href="<?php echo esc_url(ACADEMIATHEMES_THEME_DOCUMENTATION_URL); ?>" rel="noopener" target="_blank"><?php esc_html_e('View Lectura Lite Documentation','lectura-lite'); ?></a><?php if ( ACADEMIATHEMES_THEME_SUPPORT_FORUM_URL ) { ?> <a class="button button-secondary" href="<?php echo esc_url(ACADEMIATHEMES_THEME_SUPPORT_FORUM_URL); ?>" rel="noopener" target="_blank"><?php esc_html_e('Go to Lectura Lite Support Forum','lectura-lite'); ?></a><?php } ?></p>

							</div><!-- .academiathemes-doc-column-text-wrapper-->
						</div><!-- .doc-section -->
						<?php if ( ACADEMIATHEMES_THEME_VIDEO_GUIDE ) { ?>
						<div class="doc-section">

							<h3 class="column-title"><span class="academiathemes-icon dashicons dashicons-youtube"></span><span class="academiathemes-title-text"><?php esc_html_e('Theme Video Tutorial','lectura-lite'); ?></span></h3>
							<div class="academiathemes-doc-column-text-wrapper">
							
								<p><strong><?php esc_html_e('Click the image below to open the video guide in a new browser tab.','lectura-lite'); ?></strong></p>
								<p><a href="<?php echo esc_url(ACADEMIATHEMES_THEME_VIDEO_GUIDE); ?>" rel="noopener" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/ilovewp-admin/images/lectura-lite-video-preview.jpg" class="video-preview" alt="<?php esc_attr_e('Lectura Lite Theme Video Tutorial','lectura-lite'); ?>" /></a></p>

							</div><!-- .academiathemes-doc-column-text-wrapper-->

						</div><!-- .doc-section -->
						<?php } ?>
					</div><!-- .academiathemes-doc-column-wrapper -->
				</li><!-- .academiathemes-doc-column --><li class="academiathemes-doc-column academiathemes-doc-column-2">
					<div class="academiathemes-doc-column-wrapper">
						<div class="doc-section">
							<?php
							$current_user = wp_get_current_user();

							?>
							<h3 class="column-title"><span class="academiathemes-icon dashicons dashicons-email-alt"></span><span class="academiathemes-title-text"><?php esc_html_e('Subscribe to our newsletter','lectura-lite'); ?></span></h3>
							<div class="academiathemes-doc-column-text-wrapper">
							
								<form action="https://ilovewp.us14.list-manage.com/subscribe/post?u=b9a9c29fe8fb1b02d49b2ba2b&amp;id=18a2e743db" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
									<p class="newsletter-description"><?php esc_html_e('We send out the newsletter once every few months. It contains information about our new themes and important theme updates.','lectura-lite'); ?></p>
									<div id="mc_embed_signup_scroll" style="margin: 24px 0; ">
										<input type="email" value="<?php echo esc_attr($current_user->user_email); ?>" name="EMAIL" class="email" id="mce-EMAIL" style="min-width: 250px; padding: 2px 8px;" placeholder="email address" required="">
										<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2e4ed535a2db4d9381275cebe_08bd553137" tabindex="-1" value=""></div>
										<input type="submit" value="<?php esc_attr_e('Subscribe','lectura-lite'); ?>" name="subscribe" id="mc-embedded-subscribe" class="button button-primary">
									</div><!-- #mc_embed_signup_scroll -->
									<p class="newsletter-disclaimer" style="font-size: 14px;"><?php esc_html_e('We use Mailchimp as our marketing platform. By clicking above to subscribe, you acknowledge that your information will be transferred to Mailchimp for processing.','lectura-lite'); ?></p>
								</form>

							</div><!-- .academiathemes-doc-column-text-wrapper-->
						</div><!-- .doc-section -->
						<?php if ( ACADEMIATHEMES_THEME_REVIEW_URL ) { ?>
						<div class="doc-section">
							<h3 class="column-title"><span class="academiathemes-icon dashicons dashicons-awards"></span><span class="academiathemes-title-text"><?php esc_html_e('Leave a Review','lectura-lite'); ?></span></h3>
							<div class="academiathemes-doc-column-text-wrapper">
								<p><?php esc_html_e('If you enjoy using Lectura Lite Theme, please leave a review for it on WordPress.org. It helps us continue providing updates and support for it.','lectura-lite'); ?></p>

								<p class="doc-buttons"><a class="button button-primary" href="<?php echo esc_url(ACADEMIATHEMES_THEME_REVIEW_URL); ?>" rel="noopener" target="_blank"><?php esc_html_e('Write a Review for Lectura Lite','lectura-lite'); ?></a></p>

							</div><!-- .academiathemes-doc-column-text-wrapper-->
						</div><!-- .doc-section -->
						<?php } ?>
					</div><!-- .academiathemes-doc-column-wrapper -->
				</li><!-- .academiathemes-doc-column -->
			</ul><!-- .academiathemes-doc-columns -->

		</div><!-- .academiathemes-documentation -->

	</div><!-- .academiathemes-wrapper -->

<?php }