<?php

function academiathemes_customizer_define_general_sections( $sections ) {
    $panel           = 'academiathemes' . '_general';
    $general_sections = array();

    $theme_header_style = array(
        'left' => esc_html__('Left', 'lectura-lite'),
        'centered' => esc_html__('Centered', 'lectura-lite')
    );

    $theme_sidebar_positions = array(
        'left'      => esc_html__('Left', 'lectura-lite'),
        'right'     => esc_html__('Right', 'lectura-lite')
    );

    $general_sections['general'] = array(
        'panel'     => $panel,
        'title'     => esc_html__( 'General Settings', 'lectura-lite' ),
        'priority'  => 4900,
        'options'   => array(

            'theme-header-style'     => array(
                'setting' => array(
                    'default' => 'left',
                    'sanitize_callback' => 'academiathemes_sanitize_text'
                ),
                'control' => array(
                    'label' => esc_html__( 'Header Layout', 'lectura-lite' ),
                    'type'  => 'radio',
                    'choices' => $theme_header_style
                ),
            ),

            'theme-sidebar-position'    => array(
                'setting'               => array(
                    'default'           => 'right',
                    'sanitize_callback' => 'academiathemes_sanitize_text'
                ),
                'control'           => array(
                    'label'         => esc_html__( 'Default Sidebar Position', 'lectura-lite' ),
                    'type'          => 'radio',
                    'choices'       => $theme_sidebar_positions
                ),
            ),

            'theme-display-dynamic-menu' => array(
                'setting'               => array(
                    'sanitize_callback' => 'absint',
                    'default'           => 1
                ),
                'control'               => array(
                    'label'             => __( 'Display the Dynamic Menu in Sidebar of Pages', 'lectura-lite' ),
                    'type'              => 'checkbox'
                )
            ),

            'theme-display-post-featured-image' => array(
                'setting'               => array(
                    'sanitize_callback' => 'absint',
                    'default'           => 0
                ),
                'control'               => array(
                    'label'             => __( 'Display Featured Images in Posts and Pages', 'lectura-lite' ),
                    'type'              => 'checkbox'
                )
            ),

        ),
    );

    $general_sections['general-homepage'] = array(
        'panel'     => $panel,
        'title'     => esc_html__( 'Homepage Settings', 'lectura-lite' ),
        'priority'  => 4900,
        'options'   => array(

            'lectura_lite_display_slideshow' => array(
                'setting'               => array(
                    'sanitize_callback' => 'absint',
                    'default'           => 0
                ),
                'control'               => array(
                    'label'             => __( 'Display Slideshow', 'lectura-lite' ),
                    'type'              => 'checkbox'
                )
            ),

            'lectura_lite_display_feat_pages'    => array(
                'setting'               => array(
                    'sanitize_callback' => 'absint',
                    'default'           => 0
                ),
                'control'               => array(
                    'label'             => __( 'Display Featured Pages on Homepage', 'lectura-lite' ),
                    'type'              => 'checkbox'
                )
            ),

            'theme-display-featured-pages-excerpts'    => array(
                'setting'               => array(
                    'sanitize_callback' => 'absint',
                    'default'           => 1
                ),
                'control'               => array(
                    'label'             => __( 'Display the excerpts of Featured Pages', 'lectura-lite' ),
                    'type'              => 'checkbox'
                )
            ),

            'lectura_lite_page_feat_1'  => array(
                'setting'               => array(
                    'default'           => 'none',
                    'sanitize_callback' => 'lectura_lite_sanitize_pages'
                ),
                'control'               => array(
                    'label'             => esc_html__( 'Featured Page #1', 'lectura-lite' ),
                                            /* translators: Link to dashboard pages page */
                    'description'       => sprintf( wp_kses( __( 'This list is populated with <a href="%1$s">Pages</a>.', 'lectura-lite' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'edit.php?post_type=page' ) ) ),
                    'type'              => 'select',
                    'choices'           => lectura_lite_get_pages()
                ),
            ),

            'lectura_lite_page_feat_2'  => array(
                'setting'               => array(
                    'default'           => 'none',
                    'sanitize_callback' => 'lectura_lite_sanitize_pages'
                ),
                'control'               => array(
                    'label'             => esc_html__( 'Featured Page #2', 'lectura-lite' ),
                    'type'              => 'select',
                    'choices'           => lectura_lite_get_pages()
                ),
            ),

            'lectura_lite_page_feat_3'  => array(
                'setting'               => array(
                    'default'           => 'none',
                    'sanitize_callback' => 'lectura_lite_sanitize_pages'
                ),
                'control'               => array(
                    'label'             => esc_html__( 'Featured Page #3', 'lectura-lite' ),
                    'type'              => 'select',
                    'choices'           => lectura_lite_get_pages()
                ),
            ),

        ),
    );

    return array_merge( $sections, $general_sections );
}

add_filter( 'academiathemes_customizer_sections', 'academiathemes_customizer_define_general_sections' );
