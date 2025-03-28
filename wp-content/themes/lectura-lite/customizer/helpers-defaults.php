<?php

function academiathemes_option_defaults() {
    $defaults = array(

        /**
         * Color Scheme
         */
        // General
        'color-body-text'                     => '#111111',
        'color-link'                          => '#0064cc',
        'color-link-hover'                    => '#cc0000',

        // Main Menu
        'color-menu-background'               => '#204070',
        'color-menu-border-color'             => '#325282',
        'color-menu-link'                     => '#ffffff',
        'color-menu-link-hover'               => '#f0c030',

        // Sidebar
        'color-sidebar-widget-title'            => '#111111',
        'color-sidebar-widget-title-background' => '#e3e3e3',

        // Footer
        'color-footer-background'             => '#204070',
        'color-footer-border-color'           => '#325282',
        'color-footer-text'                   => '#c0d0e0',
        'color-footer-widget-title'           => '#ffffff',
        'color-footer-link'                   => '#f0c030',
        'color-footer-link-hover'             => '#ffffff',

        /* translators: This is the copyright notice that appears in the footer of the website. */
        'footer-text'                         => sprintf( esc_html__( 'Copyright &copy; %1$s %2$s.', 'lectura-lite' ), date( 'Y' ), get_bloginfo( 'name' ) ),
    );

    return $defaults;
}

function academiathemes_get_default( $option ) {
    $defaults = academiathemes_option_defaults();
    $default  = ( isset( $defaults[ $option ] ) ) ? $defaults[ $option ] : false;

    return $default;
}