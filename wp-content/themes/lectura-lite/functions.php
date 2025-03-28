<?php			

if ( ! isset( $content_width ) ) $content_width = 660;

/**
 * Define some constats
 */
if( ! defined( 'ACADEMIATHEMES_VERSION' ) ) {
	define( 'ACADEMIATHEMES_VERSION', '1.3.7' );
}
if( ! defined( 'ACADEMIATHEMES_THEME_LITE' ) ) {
	define( 'ACADEMIATHEMES_THEME_LITE', true );
}
if( ! defined( 'ACADEMIATHEMES_THEME_PRO' ) ) {
	define( 'ACADEMIATHEMES_THEME_PRO', false );
}
if( ! defined( 'ACADEMIATHEMES_DIR' ) ) {
	define( 'ACADEMIATHEMES_DIR', trailingslashit( get_template_directory() ) );
}
if( ! defined( 'ACADEMIATHEMES_DIR_URI' ) ) {
	define( 'ACADEMIATHEMES_DIR_URI', trailingslashit( get_template_directory_uri() ) );
}

/* Add javascripts and CSS used by the theme 
================================== */

function lectura_lite_scripts_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	// Loads our main stylesheet
	wp_enqueue_style( 'lectura_lite-style', get_stylesheet_uri(), array(), $theme_version );
	
	if (! is_admin()) {

		wp_enqueue_script(
			'superfish',
			get_template_directory_uri() . '/js/superfish.min.js',
			array('jquery'),
			$theme_version, 
			true
		);

		wp_enqueue_script(
			'jquery-fitvids',
			get_template_directory_uri() . '/js/jquery.fitvids.js',
			array('jquery'),
			'1.7.10',
			true
		);

		wp_enqueue_script(
			'lectura_lite-init',
			get_template_directory_uri() . '/js/init.js',
			array('jquery'),
			$theme_version, 
			true
		);

		wp_enqueue_script(
			'flexslider',
			get_template_directory_uri() . '/js/jquery.flexslider-min.js',
			array('jquery'),
			$theme_version, 
			true
		);
		
		if ( is_front_page() || is_home() ) {
			wp_enqueue_script(
				'lectura_lite-init-slider',
				get_template_directory_uri() . '/js/init-slider.js',
				array('jquery','flexslider'),
				$theme_version, 
				true
			);
		}

		/* Icomoon */
		wp_enqueue_style('ilovewp-icomoon', get_template_directory_uri() . '/css/icomoon.css', null, $theme_version);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	}

}
add_action('wp_enqueue_scripts', 'lectura_lite_scripts_styles');

/**
 * Sets up theme defaults and registers the various WordPress features that Lectura Lite supports.
 *
 * @return void
 */

function lectura_lite_setup() {

	/* Register Thumbnails Size 
	================================== */
	
	add_image_size( 'lectura_lite-thumb-slideshow', 1020, 400, true );
	add_image_size( 'lectura_lite-thumb-slideshow-mobile', 612, 240, true );
	add_image_size( 'lectura_lite-thumb-feat-page', 320, 180, true );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 200, 125, true );
	
	/* 	Register Custom Menu 
	==================================== */
	
	register_nav_menu('primary', __('Main Menu', 'lectura-lite'));
	register_nav_menu('secondary', __('Secondary (Top) Menu', 'lectura-lite'));

	/* Add support for Localization
	==================================== */
	
	load_theme_textdomain( 'lectura-lite', get_template_directory() . '/languages' );
	
	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable($locale_file) )
		require_once($locale_file);
	
	/* Add support for Custom Background 
	==================================== */
	
	add_theme_support( 'custom-background' );
	
    /* Add support for Custom Logo 
	==================================== */

    add_theme_support( 'custom-logo', array(
	   'height'      => 100,
	   'width'       => 300,
	   'flex-width'  => true,
	   'flex-height' => true,
	) );
	
	/* Add support for post and comment RSS feed links in <head>
	==================================== */
	
	add_theme_support( 'automatic-feed-links' ); 
	
	add_theme_support( 'title-tag' );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css' ) );

	/* Remove support for Block Based Widgets 
	==================================== */
	remove_theme_support( 'widgets-block-editor' );

}

add_action( 'after_setup_theme', 'lectura_lite_setup' );

/* Enable Excerpts for Static Pages
==================================== */

add_action( 'init', 'lectura_lite_excerpts_for_pages' );

function lectura_lite_excerpts_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}

/* Custom Excerpt Length
==================================== */

function lectura_lite_new_excerpt_length($length) {
	if ( is_admin() ) { return $length; }
	else { return 35; }
}
add_filter('excerpt_length', 'lectura_lite_new_excerpt_length');

/* Replace invalid ellipsis from excerpts
==================================== */

function lectura_lite_excerpt($text)
{
   return str_replace('[...]', '...', $text);
}
add_filter('the_excerpt', 'lectura_lite_excerpt');


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function lectura_lite_pingback_header() {
	if ( is_singular() && pings_open() ) {
		/* translators: pingback url */
		printf( '<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo( 'pingback_url' ) ));
	}
}
add_action( 'wp_head', 'lectura_lite_pingback_header' );

/**
 * --------------------------------------------
 * Enqueue scripts and styles for the backend.
 *
 * @package Lectura Lite
 * --------------------------------------------
 */

if ( ! function_exists( 'lectura_lite_scripts_admin' ) ) {
	/**
	 * Enqueue admin styles and scripts
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function lectura_lite_scripts_admin( $hook ) {
		// if ( 'widgets.php' !== $hook ) return;

		// Styles
		wp_enqueue_style(
			'lectura-lite-style-admin',
			get_template_directory_uri() . '/ilovewp-admin/css/ilovewp_theme_settings.css',
			'', ACADEMIATHEMES_VERSION, 'all'
		);
	}
}
add_action( 'admin_enqueue_scripts', 'lectura_lite_scripts_admin' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Lectura Lite 1.3
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function lectura_lite_body_classes( $classes ) {

	$classes[] = academiathemes_helper_get_header_style();
	$classes[] = academiathemes_helper_get_sidebar_position();

	return $classes;
}

add_filter( 'body_class', 'lectura_lite_body_classes' );

if ( ! function_exists( 'lectura_lite_the_custom_logo' ) ) {

/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since Lectura Lite 1.3
 */

	function lectura_lite_the_custom_logo() {
		
		if ( function_exists( 'the_custom_logo' ) ) {
			
			// We don't use the default the_custom_logo() function because of its automatic addition of itemprop attributes (they fail the ARIA tests)
			$site = get_bloginfo('name');
			$custom_logo_id = get_theme_mod( 'custom_logo' );

			if ( $custom_logo_id ) {

				$html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home">%2$s</a>', 
				esc_url( home_url( '/' ) ),
				wp_get_attachment_image( $custom_logo_id, 'full', false, array(
					'class'    => 'custom-logo',
					'alt' => __('Logo for ','lectura-lite') . esc_attr($site),
					) )
				);
			
				echo $html;

			}

		}

	}
}

if ( ! function_exists( 'lectura_lite_comment' ) ) :
/**
 * Template for comments and pingbacks.
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function lectura_lite_comment( $comment, $args, $depth ) {

	if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<div class="comment-body">
			<?php esc_html_e( 'Pingback:', 'lectura-lite' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( 'Edit', 'lectura-lite' ), '<span class="edit-link">', '</span>' ); ?>
		</div>

	<?php else : ?>

	<li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">

			<div class="comment-author vcard">
				<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
			</div><!-- .comment-author -->

			<header class="comment-meta">
				<?php printf( '<cite class="fn">%s</cite>', get_comment_author_link() ); ?>

				<div class="comment-metadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
						<time datetime="<?php comment_time( 'c' ); ?>">
							<?php /* translators: 1: date, 2: time */ printf( esc_html_x( '%1$s at %2$s', '1: date, 2: time', 'lectura-lite' ), get_comment_date(), get_comment_time() ); ?>
						</time>
					</a>
				</div><!-- .comment-metadata -->

				<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'lectura-lite' ); ?></p>
				<?php endif; ?>

				<div class="comment-tools">
					<?php edit_comment_link( esc_html__( 'Edit', 'lectura-lite' ), '<span class="edit-link">', '</span>' ); ?>

					<?php
						comment_reply_link( array_merge( $args, array(
							'add_below' => 'div-comment',
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<span class="reply">',
							'after'     => '</span>',
						) ) );
					?>
				</div><!-- .comment-tools -->
			</header><!-- .comment-meta -->

			<div class="comment-content">
				<?php comment_text(); ?>
			</div><!-- .comment-content -->
		</article><!-- .comment-body -->

	<?php
	endif;
}
endif; // ends check for lectura_lite_comment()

if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

/* Include WordPress Theme Customizer
================================== */

require_once( get_template_directory() . '/customizer/customizer.php');

/* Include Additional Options and Components
================================== */

require_once( get_template_directory() . '/ilovewp-admin/post-options.php');
require_once( get_template_directory() . '/ilovewp-admin/sidebars.php');
require_once( get_template_directory() . '/ilovewp-admin/helper-functions.php');

/* Include Theme Options Page for Admin
================================== */

//require only in admin!
if (is_admin()) {	
	require_once('ilovewp-admin/ilovewp-theme-settings.php');

	if (current_user_can( 'manage_options' ) ) {
		require_once(get_template_directory() . '/ilovewp-admin/admin-notices/ilovewp-notices.php');
		require_once(get_template_directory() . '/ilovewp-admin/admin-notices/ilovewp-notice-welcome.php');
		require_once(get_template_directory() . '/ilovewp-admin/admin-notices/ilovewp-notice-review.php');

		// Remove theme data from database when theme is deactivated.
		add_action('switch_theme', 'lecturalite_db_data_remove');

		if ( ! function_exists( 'lecturalite_db_data_remove' ) ) {
			function lecturalite_db_data_remove() {

				delete_option( 'lecturalite_admin_notices');
				delete_option( 'lecturalite_theme_installed_time');

			}
		}

	}

}