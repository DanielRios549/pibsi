<?php
/*
    * PIBSI customizer functionality
    *
    * @package WordPress
    * @subpackage PIBSI
    * @since PIBSI 1.0
*/
//remove_theme_mod('link_color');
//print_r(get_theme_mods());

$customCSS = '';

require get_template_directory() . '/inc/customizer-register.php';
require get_template_directory() . '/inc/page-colors.php';
require get_template_directory() . '/inc/principal-menu-colors.php';
require get_template_directory() . '/inc/social-menu-colors.php';

function pibsi_get_all_colors_schemes() {
    $all_color_schemes = array(
        pibsi_page_get_colors_schemes(),
        pibsi_principal_menu_get_color_schemes(),
        pibsi_social_menu_get_color_schemes()
    );
    
    return $all_color_schemes;
}

function pibsi_all_colors_shemes_css() {
    global $customCSS;

    if($customCSS != '') {
        $preCSS = "
    :root {";
        $posCSS = "
    }";

    echo '<style type="text/css" id="pibsi_custom_color_css">' . $preCSS . $customCSS . $posCSS . '
</style>
    ';
    }
}

add_action('wp_head', 'pibsi_all_colors_shemes_css');

//Make the changes

function pisbi_customize_control_js() {
    wp_enqueue_script('color-scheme-control', get_template_directory_uri() . '/js/color-scheme-control.js', array('customize-controls', 'iris', 'underscore', 'wp-util'), '1.0', true);
	wp_localize_script('color-scheme-control', 'colorScheme', pibsi_get_all_colors_schemes());
}

add_action('customize_controls_enqueue_scripts', 'pisbi_customize_control_js');

//Make the preview before the changes

function pibsi_customize_preview_js() {
	wp_enqueue_script('pibsi-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array('customize-preview'), '1.0', true);
}

add_action('customize_preview_init', 'pibsi_customize_preview_js');
?>