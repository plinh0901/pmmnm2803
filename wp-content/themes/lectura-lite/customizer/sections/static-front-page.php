<?php

/**
 * @param WP_Customize_Manager $wp_customize
 */
function academiathemes_customizer_staticfrontpage( $wp_customize ) {
    $section_id = 'static_front_page';
    $section    = $wp_customize->get_section( $section_id );

    $section->priority = 60;
}

add_action( 'customize_register', 'academiathemes_customizer_staticfrontpage', 20 );
