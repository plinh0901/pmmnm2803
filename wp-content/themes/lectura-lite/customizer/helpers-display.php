<?php


function academia_get_css_rules(){
    return array(

        'color-rules' => array(
            array(
                'id' => 'color-body-text',
                'selector' => 'body',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-link',
                'selector' => 'a, .academia-featured-page .title-post a',
                'rule' => 'color'
            ),

            array(
                'id' => 'color-link-hover',
                'selector' => 'a:hover, a:focus, .academia-featured-page .title-post a:hover, .academia-featured-page .title-post a:focus, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, h1 a:focus, h2 a:focus, h3 a:focus, h4 a:focus, h5 a:focus, h6 a:focus, #logo a:hover, #logo a:focus, #useful-menu .current-menu-item a, #useful-menu a:hover, #useful-menu a:focus, #lectura-menu-main .sub-menu .current-menu-item > a, #lectura-menu-main .sub-menu a:hover, .academia-column-aside .widget_nav_menu .current-menu-item > a, .academia-column-aside .widget_nav_menu a:hover, .academia-column-aside .widget_nav_menu a:focus, .academia-related-pages .current-menu-item a, .academia-related-pages .academia-related-page a:hover, .academia-related-pages .academia-related-page a:focus, #academia-slideshow .title-post a:hover, #academia-slideshow .title-post a:focus, #lectura-menu-main .sub-menu .current-menu-item > a', 
                'rule' => 'color'
            ),

            array(
                'id' => 'color-link-hover',
                'selector' => '.flex-control-paging li a.flex-active', 
                'rule' => 'background-color'
            ),
            
			// Main Menu

            array(
                'id' => 'color-menu-background',
                'selector' => '.wrapper-menu, #content .title-widget-blue, .pagination .current, .pagination a:hover, .pagination a:focus',
                'rule' => 'background'
            ),

            array(
                'id' => 'color-menu-background',
                'selector' => '.pagination .current, .pagination a:hover, .pagination a:focus',
                'rule' => 'border-color'
            ),

            array(
                'id' => 'color-menu-background',
                'selector' => '.pagination a',
                'rule' => 'color'
            ),

            array(
                'id' => 'color-menu-border-color',
                'selector' => '.sf-menu > li',
                'rule' => 'border-right-color'
            ),

            array(
                'id' => 'color-menu-link',
                'selector' => '#lectura-menu-main a, .pagination .current, .pagination a',
                'rule' => 'color'
            ),

            array(
                'id' => 'color-menu-link-hover',
                'selector' => '#lectura-menu-main a:hover, #lectura-menu-main a:focus, #lectura-menu-main .current-menu-item > a',
                'rule' => 'color'
            ),

            // Sidebar

            array(
                'id' => 'color-sidebar-widget-title',
                'selector' => '#content .title-widget-grey',
                'rule' => 'color'
            ),

            array(
                'id' => 'color-sidebar-widget-title-background',
                'selector' => '#content .title-widget-grey',
                'rule' => 'background-color'
            ),

            // Footer

            array(
                'id' => 'color-footer-background',
                'selector' => '#site-footer',
                'rule' => 'background'
            ),
            array(
                'id' => 'color-footer-border-color',
                'selector' => '#site-footer .title-widget, .wrapper-footer',
                'rule' => 'border-color'
            ),
            array(
                'id' => 'color-footer-text',
                'selector' => '#site-footer',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-footer-widget-title',
                'selector' => '#site-footer .title-widget',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-footer-link',
                'selector' => '#footer-main a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-footer-link-hover',
                'selector' => '#footer-main .current-menu-item a, #footer-main a:hover, #footer-main a:focus',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-footer-widget-title',
                'selector' => '#site-footer .title-widget',
                'rule' => 'color'
            ),
            

        ),

    );
}
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * This function reads in the options from theme mods and determines whether a CSS rule is needed to implement an
 * option. CSS is only written for choices that are non-default in order to avoid adding unnecessary CSS. All options
 * are also filterable allowing for more precise control via a child theme or plugin.
 *
 * Note that all CSS for options is present in this function except for the CSS for fonts and the logo, which require
 * a lot more code to implement.
 *
 * @return void
 */
function academia_css_add_rules() {
    /**
     * Colors section
     */

    $rules = academia_get_css_rules();
    
    foreach($rules['color-rules'] as $color_rule) {
		academia_css_add_simple_color_rule($color_rule['id'], $color_rule['selector'], $color_rule['rule']);
    }
}

add_action( 'academia_css', 'academia_css_add_rules' );

function academia_css_add_simple_color_rule( $setting_id, $selectors, $declarations ) {
    $value = academiathemes_maybe_hash_hex_color( get_theme_mod( $setting_id, academiathemes_get_default( $setting_id ) ) );

    if ( $value === academiathemes_get_default( $setting_id ) ) {
        return;
    }
    
    if ( strtolower( $value ) === strtolower( academiathemes_get_default( $setting_id ) ) ) {
        return;
    }

    if ( is_string( $selectors ) ) {
        $selectors = array( $selectors );
    }

    if ( is_string( $declarations ) ) {
        $declarations = array(
            $declarations => $value
        );
    }

    academia_get_css()->add( array(
        'selectors'    => $selectors,
        'declarations' => $declarations
    ) );
}
