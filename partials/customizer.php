<?php
function lesson_customizer($wp_customize)
{
      /*
    ------------------------------------------------------------
    SECTION: Header
    ------------------------------------------------------------
    */

    $wp_customize->add_section('section_header', array(
        'title' => esc_html__('Header', 'lesson'),
        'description' => esc_html__('Choose Your Header style'),
        'priority' => 1
    ));
    /*
        Header Styles
        */
        $wp_customize->add_setting( 'header_styles', array(
            'default' => 'style_1',
            'type' => 'theme_mod', // or 'option'
            'capability' => 'edit_theme_options',
            'theme_supports' => '', // Rarely needed.
            'transport' => 'refresh', // or postMessage
            'sanitize_callback' => '',
            'sanitize_js_callback' => '', // Basically to_json.
        ));
        $wp_customize->add_control( 'header_styles', array(
            'label'      => esc_html__( 'Header Styles', 'lesson' ),
            'section'    => 'section_header',
            'type'       => 'select',
            'class'      => 'my-header-styles',
            'choices'    => array(
                'style_1'    => esc_html__('Header 1', 'lesson'),
                'style_2'    => esc_html__('Header 2', 'lesson'),
                'style_3'    => esc_html__('Header 3', 'lesson'),
            ),
        ));
}

add_action('customize_register', 'lesson_customizer');
