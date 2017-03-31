<?php
/*
    * PIBSI customizer functionality
    *
    * @package WordPress
    * @subpackage PIBSI
    * @since PIBSI 1.0
*/
//Get the page color schemes

function pibsi_page_get_color_css($number, $colors) {
    $colors = wp_parse_args($colors, array(
		'root' => '',
		'body' => ''
	));

	if($number == 'root') {
		$css = "
		--rootColor: $colors[root];";
	}
	elseif($number == 'body') {
		$css = "
		--bodyColor: $colors[body];";
	}

	return $css;
}

//Get all the colors schemes possibles to social menu, you can add as much you want

function pibsi_page_get_colors_schemes() {
    //The order is root, body

    $pages_colors = array(
        'default' => array(
            'label' => __('Padrão', 'pibsi'),
            'colors' => array(
                '#ffffff',
                '#ffffff'
            )
        ),
        'night' => array(
            'label' => __('Noturno', 'pibsi'),
            'colors' => array(
                '#141414',
                '#141414'
            )
        ),
        'gray' => array(
            'label' => __('Gray Scale', 'pibsi'),
            'colors' => array(
                '#b5b5b5',
                '#f2f2f2'
            )
        )
    );
    return apply_filters('pibsi_pages_color_schemes', $pages_colors);
}

//Get the selected color scheme

function pibsi_page_get_color_scheme() {
    $color_scheme_option = get_theme_mod('page_color_scheme_control', 'default');
    $color_schemes = pibsi_page_get_colors_schemes();

    if (array_key_exists($color_scheme_option, $color_schemes)) {
        return $color_schemes[$color_scheme_option]['colors'];
    }
    
	return $color_schemes['default']['colors'];
}

//Get the scheme options to select

function pibsi_page_get_color_scheme_choices() {
	$color_schemes = pibsi_page_get_colors_schemes();
	$color_scheme_control_options = array();

	foreach ($color_schemes as $color_scheme => $value) {
		$color_scheme_control_options[$color_scheme] = $value['label'];
	}

	return $color_scheme_control_options;
}

function pibsi_page_sanitize_color_scheme($value) {
	$color_schemes = pibsi_page_get_color_scheme_choices();

	if (!array_key_exists($value, $color_schemes)) {
		return 'default';
	}

	return $value;
}

//Save the CSS for root when is changed itself color

function pibsi_page_root_color_css() {
	global $customCSS;
	$color_scheme = pibsi_page_get_colors_schemes();
	$mennu_default_color = $color_scheme['default']['colors'][0];
	$menu_color = get_theme_mod('root_color');

	if ($mennu_default_color == $menu_color) {
		return;
	}

	$colors = array(
		'root' => $menu_color,
	);

	$customCSS .= pibsi_page_get_color_css('root', $colors);
}

add_action('customize_preview_init', pibsi_page_root_color_css());

//Save the CSS for root when is changed itself color

function pibsi_page_body_color_css() {
	global $customCSS;
	$color_scheme = pibsi_page_get_colors_schemes();
	$mennu_default_color = $color_scheme['default']['colors'][1];
	$menu_color = get_theme_mod('body_color');

	if ($mennu_default_color == $menu_color) {
		return;
	}

	$colors = array(
		'body' => $menu_color,
	);

	$customCSS .= pibsi_page_get_color_css('body', $colors);
}

add_action('customize_preview_init', pibsi_page_body_color_css());
?>