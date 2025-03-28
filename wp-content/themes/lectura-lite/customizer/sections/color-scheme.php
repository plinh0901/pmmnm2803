<?php

function academiathemes_customizer_define_color_scheme_sections( $sections ) {
    $panel           = 'academiathemes' . '_color-scheme';
    $colors_sections = array();

    $colors_sections['color'] = array(
        'panel'   => $panel,
        'title'   => esc_html__( 'General', 'lectura-lite' ),
        'options' => array(

            'color-body-text' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Body Text', 'lectura-lite' ),
                ),
            ),

            'color-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link Color', 'lectura-lite' ),
                ),
            ),

            'color-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link Color on Hover', 'lectura-lite' ),
                ),
            ),

            'color-sidebar-widget-title' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Sidebar Widget Title Color', 'lectura-lite' ),
                ),
            ),

            'color-sidebar-widget-title-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Sidebar Widget Title Background', 'lectura-lite' ),
                ),
            ),

        )
    );

    $colors_sections['color-main-menu'] = array(
        'panel'   => $panel,
        'title'   => esc_html__( 'Main Menu', 'lectura-lite' ),
        'options' => array(

            'color-menu-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Menu Background', 'lectura-lite' ),
                ),
            ),

            'color-menu-border-color' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Border Color', 'lectura-lite' ),
                ),
            ),

            'color-menu-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Menu Item', 'lectura-lite' ),
                ),
            ),

            'color-menu-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Menu Item on Hover', 'lectura-lite' ),
                ),
            ),

        )
    );

    $colors_sections['color-footer'] = array(
        'panel'   => $panel,
        'title'   => esc_html__( 'Footer', 'lectura-lite' ),
        'options' => array(

            'color-footer-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Background', 'lectura-lite' ),
                ),
            ),

            'color-footer-border-color' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Border Color', 'lectura-lite' ),
                ),
            ),

            'color-footer-text' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Text', 'lectura-lite' ),
                ),
            ),

            'color-footer-widget-title' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Widget Title', 'lectura-lite' ),
                ),
            ),

            'color-footer-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link', 'lectura-lite' ),
                ),
            ),

            'color-footer-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'academiathemes_maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => esc_html__( 'Link on Hover', 'lectura-lite' ),
                ),
            ),

        )
    );

    return array_merge( $sections, $colors_sections );
}

add_filter( 'academiathemes_customizer_sections', 'academiathemes_customizer_define_color_scheme_sections' );
