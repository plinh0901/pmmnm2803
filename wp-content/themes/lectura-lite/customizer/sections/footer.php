<?php

function academiathemes_customizer_define_footer_sections( $sections ) {
    $panel           = 'academiathemes' . '_footer';
    $footer_sections = array();

    $footer_sections['footer'] = array(
        'title'   => esc_html__( 'Theme Footer', 'lectura-lite' ),
        'priority' => 5000,
        'options' => array(

            'lectura_lite_copyright_text' => array(
                'setting' => array(
                    'default'           => __('Copyright &copy; ','lectura-lite') . date("Y",time()) . ' ' . get_bloginfo('name'),
                    'sanitize_callback' => 'sanitize_text_field',
                ),
                'control' => array(
                    'label'             => esc_html__( 'Copyright Text', 'lectura-lite' ),
                    'type'              => 'text',
                ),
            ),

            'theme-display-footer-credit' => array(
                'setting'               => array(
                    'sanitize_callback' => 'absint',
                    'default'           => 1
                ),
                'control'               => array(
                    'label'             => __( 'Display "Theme by AcademiaThemes"', 'lectura-lite' ),
                    'type'              => 'checkbox'
                )
            ),

        ),
    );

    return array_merge( $sections, $footer_sections );
}

add_filter( 'academiathemes_customizer_sections', 'academiathemes_customizer_define_footer_sections' );