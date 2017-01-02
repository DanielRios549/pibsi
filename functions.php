<?php
/*
    * PIBSI functions and definitions
    *
    * @package WordPress
    * @subpackage PIBSI
    * @since PIBSI 1.0
*/

//Remove when site is complete

function login_check() {
	if(!is_user_logged_in()) {
        wp_redirect(get_bloginfo('siteurl').'/wp-login.php');
    }
}

add_action('get_header', 'login_check');

//Theme support

add_theme_support('post-thumbnails');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('post-formats',
    array(
        'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat'
    )
);
add_theme_support('custom-logo',
    array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	)
);
//add_theme_support('customize-selective-refresh-widgets');

add_image_size('1000', '350');

//Theme functions

function pibsi_event_widget() {
    if(!function_exists('widgetopts_install')) {
        add_option('Event', 'activate');
    }
}

add_action('init', 'pibsi_event_widget');

function pibsi_register_sidebar() {
    register_sidebar(array(
		'name' => __('Programação', 'pibsi'),
        'id' => 'sidebar-program',
		'description' => __('Mostra a programação', 'pibsi'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}

add_action('widgets_init', 'pibsi_register_sidebar');

function pibsi_register_nav_menu() {
    register_nav_menus(
        array(
            'primary' => __('Menu Principal', 'pibsi'),
            'social' => __('Menu Social', 'pibsi')
        )
    );
}

add_action('init', 'pibsi_register_nav_menu');

//CSS queue

function pibsi_styles() {
	wp_enqueue_style('dashicons');
}

add_action('wp_enqueue_scripts', 'pibsi_styles');

//Javascript queue

function pibsi_scripts() {
    wp_enqueue_script('pibsi-function', get_template_directory_uri() . '/js/functions.js', array(), '1.0', true);
    wp_enqueue_script('pibsi-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'pibsi_scripts');

//Change jquery to bower

function pibsi_change_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/lib/jquery.js', false, '2.1.4');
    wp_enqueue_script('jquery');
}

add_action('init', 'pibsi_change_jquery');

require get_template_directory() . '/inc/customizer.php';
