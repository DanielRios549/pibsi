<?php
/*
    * PIBSI customizer functionality
    *
    * @package WordPress
    * @subpackage PIBSI
    * @since PIBSI 1.0
*/

/**********************
	Principal Menu
**********************/

function pibsi_principal_menu_get_color_css($number, $colors) {
    $colors = wp_parse_args($colors, array(
		'menu01' => '',
		'menu02' => '',
		'menu03' => '',
		'menu04' => '',
		'menu05' => ''
	));

	if($number == 1) {
		$css = "
		--menu01: $colors[menu01];";
	}
	elseif($number == 2) {
		$css = "
		--menu02: $colors[menu02];";
	}
	elseif($number == 3) {
		$css = "
		--menu03: $colors[menu03];";
	}
	elseif($number == 4) {
		$css = "
		--menu04: $colors[menu04];";
	}
	elseif($number == 5) {
		$css = "
		--menu05: $colors[menu05];";
	}

	return $css;
}

//Get all the colors schemes possibles to social menu, you can add as much you want

function pibsi_principal_menu_get_color_schemes() {
	$menu_colors = array(
		'default' => array(
			'label'  => __('Padrão', 'pibsi'),
			'colors' => array(
				'#7c6200',
				'#cc3333',
				'#4b7000',
				'#2578cc',
				'#32324a'
			)
		),
		'gray' => array(
			'label'  => __('Cinza', 'pibsi'),
			'colors' => array(
				'#464646',
				'#464646',
				'#464646',
				'#464646',
				'#464646'
			)
		),
		'light' => array(
			'label'  => __('Cores Vivas', 'pibsi'),
			'colors' => array(
				'#0DFF68',
				'#32DCFF',
				'#FFF632',
				'#995DFF',
				'#FF9F3D'
			)
		)
	);
	return apply_filters('pibsi_principal_menu_color_schemes', $menu_colors);
}

//Get the selected color scheme

function pibsi_principal_menu_get_color_scheme() {
    $color_scheme_option = get_theme_mod('menu_color_scheme_control', 'default');
    $color_schemes = pibsi_principal_menu_get_color_schemes();

    if (array_key_exists($color_scheme_option, $color_schemes)) {
        return $color_schemes[$color_scheme_option]['colors'];
    }
    
	return $color_schemes['default']['colors'];
}

//Get the scheme options to select

function pibsi_principal_menu_get_color_scheme_choices() {
	$color_schemes = pibsi_principal_menu_get_color_schemes();
	$color_scheme_control_options = array();

	foreach ($color_schemes as $color_scheme => $value) {
		$color_scheme_control_options[$color_scheme] = $value['label'];
	}

	return $color_scheme_control_options;
}

function pibsi_principal_menu_sanitize_color_scheme($value) {
	$color_schemes = pibsi_principal_menu_get_color_scheme_choices();

	if (!array_key_exists($value, $color_schemes)) {
		return 'default';
	}

	return $value;
}

//Save the CSS for first menu ites when is selected itself color

function pibsi_principal_menu01_color_css() {
	global $customCSS;
	$color_scheme = pibsi_principal_menu_get_color_schemes();
	$mennu_default_color = $color_scheme['default']['colors'][0];
	$menu_color = get_theme_mod('principal_menu_color_1');

	if ($mennu_default_color == $menu_color) {
		return;
	}

	$colors = array(
		'menu01' => $menu_color,
	);

	$customCSS .= pibsi_principal_menu_get_color_css(1, $colors);
}

add_action('customize_preview_init', pibsi_principal_menu01_color_css());

//Save the CSS for second menu item when is changed itself color

function pibsi_principal_menu02_color_css() {
	global $customCSS;
	$color_scheme = pibsi_principal_menu_get_color_schemes();
	$mennu_default_color = $color_scheme['default']['colors'][1];
	$menu_color = get_theme_mod('principal_menu_color_2');

	if ($mennu_default_color == $menu_color) {
		return;
	}

	$colors = array(
		'menu02' => $menu_color,
	);

	$customCSS .= pibsi_principal_menu_get_color_css(2, $colors);
}

add_action('customize_preview_init', pibsi_principal_menu02_color_css());

//Save the CSS for third menu item when is changed itself color

function pibsi_principal_menu03_color_css() {
	global $customCSS;
	$color_scheme = pibsi_principal_menu_get_color_schemes();
	$mennu_default_color = $color_scheme['default']['colors'][2];
	$menu_color = get_theme_mod('principal_menu_color_3');

	if ($mennu_default_color == $menu_color) {
		return;
	}

	$colors = array(
		'menu03' => $menu_color,
	);

	$customCSS .= pibsi_principal_menu_get_color_css(3, $colors);
}

add_action('customize_preview_init', pibsi_principal_menu03_color_css());

//Save the CSS for fourth menu item when is changed itself color

function pibsi_principal_menu04_color_css() {
	global $customCSS;
	$color_scheme = pibsi_principal_menu_get_color_schemes();
	$mennu_default_color = $color_scheme['default']['colors'][3];
	$menu_color = get_theme_mod('principal_menu_color_4');

	if ($mennu_default_color == $menu_color) {
		return;
	}

	$colors = array(
		'menu04' => $menu_color,
	);

	$customCSS .= pibsi_principal_menu_get_color_css(4, $colors);
}

add_action('customize_preview_init', pibsi_principal_menu04_color_css());

//Save the CSS for fifth menu item when is changed itself color

function pibsi_principal_menu05_color_css() {
	global $customCSS;
	$color_scheme = pibsi_principal_menu_get_color_schemes();
	$mennu_default_color = $color_scheme['default']['colors'][4];
	$menu_color = get_theme_mod('principal_menu_color_5');

	if ($mennu_default_color == $menu_color) {
		return;
	}

	$colors = array(
		'menu05' => $menu_color,
	);

	$customCSS .= pibsi_principal_menu_get_color_css(5, $colors);
}

add_action('customize_preview_init', pibsi_principal_menu05_color_css());
?>