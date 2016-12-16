<?php
/*
    * PIBSI customizer register
    *
    * @package WordPress
    * @subpackage PIBSI
    * @since PIBSI 1.0
*/

//Add Panels and sections

function pibsi_customize_register_panel($wp_customize) {
    //Add  panels

    $wp_customize -> add_panel('colors', array(
        'priority'    => 10,
        'title'       => __('Cores'),
    ));

    //Add sections

    $wp_customize -> add_section('page_colors', array(
        'title'       => __('Página', 'pibsi'),
        'priority'    => 10,
        'panel'       => 'colors'
    ));

    $wp_customize -> add_section('primary_menu', array(
        'title'       => __('Menu Principal', 'pibsi'),
        'priority'    => 10,
        'panel'       => 'colors'
    ));

    $wp_customize -> add_section('social_menu', array(
        'title'       => __('Menu Social', 'pibsi'),
        'priority'    => 10,
        'panel'       => 'colors'
    ));
}

add_action('customize_register', 'pibsi_customize_register_panel', 11);

//Add options in the customizer

function pibsi_customize_register_settings($wp_customize) {
	$principal_menu_color_scheme = pibsi_principal_menu_get_color_scheme();
	$social_menu_color_scheme = pibsi_social_menu_get_color_scheme();
    $page_colors_scheme = pibsi_page_get_color_scheme();

    //Add controls and settings
    //Background
    //Pre settings

    $wp_customize -> add_setting('page_color_scheme_control', array(
		'default'           => 'default',
		'sanitize_callback' => 'pibsi_page_sanitize_color_scheme',
		'transport'         => 'postMessage'
	));

	$wp_customize -> add_control('page_color_scheme_control', array(
		'label'    => __('Opções pré-definidas', 'pibsi'),
		'section'  => 'page_colors',
		'type'     => 'select',
		'choices'  => pibsi_page_get_color_scheme_choices(),
		'priority' => 1,
	));

    $wp_customize -> add_setting('root_color', array(
        'default'           => $page_colors_scheme[0],
        'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'root_color', array(
        'label'    => __('Cor do fundo', 'pibsi'),
        'section'  => 'page_colors',
    )));

    //Body

    $wp_customize -> add_setting('body_color', array(
        'default'           => $page_colors_scheme[1],
        'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'body_color', array(
        'label'    => __('Cor do corpo', 'pibsi'),
        'section'  => 'page_colors',
    )));


    //Menu Principal
    //Pre settings

    $wp_customize -> add_setting('menu_color_scheme_control', array(
		'default'           => 'default',
		'sanitize_callback' => 'pibsi_principal_menu_sanitize_color_scheme',
		'transport'         => 'postMessage'
	));

	$wp_customize -> add_control('menu_color_scheme_control', array(
		'label'    => __('Opções pré-definidas', 'pibsi'),
		'section'  => 'primary_menu',
		'type'     => 'select',
		'choices'  => pibsi_principal_menu_get_color_scheme_choices(),
		'priority' => 1,
	));

    //Menu 1.1

    $wp_customize -> add_setting('principal_menu_color_1', array(
        'default'           => $principal_menu_color_scheme[0],
        'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'principal_menu_color_1', array(
        'label'    => __('Primeiro item', 'pibsi'),
        'section'  => 'primary_menu',
    )));

    //Menu 1.2

    $wp_customize -> add_setting('principal_menu_color_2', array(
        'default'           => $principal_menu_color_scheme[1],
        'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'principal_menu_color_2', array(
        'label'    => __('Segundo item', 'pibsi'),
        'section'  => 'primary_menu',
    )));

    //Menu 1.3

    $wp_customize -> add_setting('principal_menu_color_3', array(
        'default'           => $principal_menu_color_scheme[2],
        'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'principal_menu_color_3', array(
        'label'    => __('Terceiro item', 'pibsi'),
        'section'  => 'primary_menu',
    )));

    //Menu 1.4

    $wp_customize -> add_setting('principal_menu_color_4', array(
        'default'           => $principal_menu_color_scheme[3],
        'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'principal_menu_color_4', array(
        'label'    => __('Quarto item', 'pibsi'),
        'section'  => 'primary_menu',
    )));

    //Menu 1.5

    $wp_customize -> add_setting('principal_menu_color_5', array(
        'default'           => $principal_menu_color_scheme[4],
        'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'principal_menu_color_5', array(
        'label'    => __('Quinto item', 'pibsi'),
        'section'  => 'primary_menu',
    )));

    //Menu Social
    //Pre settings

    $wp_customize -> add_setting('social_menu_color_scheme_control', array(
		'default'           => 'default',
		'sanitize_callback' => 'pibsi_social_menu_sanitize_color_scheme',
		'transport'         => 'postMessage'
	));

	$wp_customize -> add_control('social_menu_color_scheme_control', array(
		'label'    => __('Opções pré-definidas', 'pibsi'),
		'section'  => 'social_menu',
		'type'     => 'select',
		'choices'  => pibsi_social_menu_get_color_scheme_choices(),
		'priority' => 1,
	));

    //Menu 2.1

    $wp_customize -> add_setting('social_menu_color_facebook', array(
        'default'           => $social_menu_color_scheme[0],
        'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
    ));
 
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'social_menu_color_facebook', array(
        'label'    => __('Facebook', 'pibsi'),
        'section'  => 'social_menu',
    )));

    //Menu 2.2

    $wp_customize -> add_setting('social_menu_color_twitter', array(
        'default'           => $social_menu_color_scheme[1],
        'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
    ));
 
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'social_menu_color_twitter', array(
        'label'    => __('Twitter', 'pibsi'),
        'section'  => 'social_menu',
    )));

    //Menu 2.3

    $wp_customize -> add_setting('social_menu_color_google_plus', array(
        'default'           => $social_menu_color_scheme[2],
        'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
    ));
 
    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'social_menu_color_google_plus', array(
        'label'    => __('Youtube', 'pibsi'),
        'section'  => 'social_menu',
    )));

    //Menu 2.3

    $wp_customize -> add_setting('social_menu_color_youtube', array(
        'default'           => $social_menu_color_scheme[3],
        'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage'
    ));
 
    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'social_menu_color_youtube', array(
        'label'    => __('Google +', 'pibsi'),
        'section'  => 'social_menu',
    )));
}

add_action('customize_register', 'pibsi_customize_register_settings', 11);

//Add partials 

function pibsi_customize_register_partial($wp_customize) {
    
}

//add_action('customize_register', 'pibsi_customize_register_partial', 11);
?>