<?php 

/*-----------------------------------------------------------------------------------*/
/* Initializing Widgetized Areas (Sidebars)																			 */
/*-----------------------------------------------------------------------------------*/

function lectura_lite_widgets_init() {

	register_sidebar(array(
		'name'=> __('Sidebar','lectura-lite'),
		'id' => 'sidebar',
		'before_widget' => '<div class="widget %2$s" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="title-s title-widget title-widget-grey">',
		'after_title' => '</p>',
	));

	/*----------------------------------*/
	/* Homepage					 		*/
	/*----------------------------------*/
	 
	register_sidebar(array(
		'name'=> __('Homepage Content: Left Column','lectura-lite'),
		'id' => 'home-col-1',
		'before_widget' => '<div class="widget %2$s" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="title-s title-widget title-widget-blue">',
		'after_title' => '</p>',
	));

	register_sidebar(array(
		'name'=> __('Homepage Content: Right Column','lectura-lite'),
		'id' => 'home-col-2',
		'before_widget' => '<div class="widget %2$s" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="title-s title-widget title-widget-blue">',
		'after_title' => '</p>',
	));

	/*----------------------------------*/
	/* Footer					 		*/
	/*----------------------------------*/
	 
	register_sidebar(array(
		'name'=> __('Footer: Column 1','lectura-lite'),
		'id' => 'footer-col-1',
		'before_widget' => '<div class="widget %2$s" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="title-widget">',
		'after_title' => '</p>',
	));

	register_sidebar(array(
		'name'=> __('Footer: Column 2','lectura-lite'),
		'id' => 'footer-col-2',
		'before_widget' => '<div class="widget %2$s" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="title-widget">',
		'after_title' => '</p>',
	));

	register_sidebar(array(
		'name'=> __('Footer: Column 3','lectura-lite'),
		'id' => 'footer-col-3',
		'before_widget' => '<div class="widget %2$s" id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<p class="title-widget">',
		'after_title' => '</p>',
	));

} 

add_action( 'widgets_init', 'lectura_lite_widgets_init' );