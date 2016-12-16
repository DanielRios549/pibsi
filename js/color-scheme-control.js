/* global colorScheme, Color */
/**
 * Add a listener to the Color Scheme control to update other color controls to new values/defaults.
 * Also trigger an update of the Color Scheme CSS when a color is changed.
 */

(function(api) {
	api.controlConstructor.select = api.Control.extend({
		ready: function() {

			//Page

			if ('page_color_scheme_control' == this.id) {
				this.setting.bind('change', function(value) {
					var colors = colorScheme[0][value].colors;

					//Root Color

					var color = colors[0];

					api('root_color').set(color);
					api.control('root_color').container.find('.color-picker-hex').data('data-default-color', color)
					.wpColorPicker('defaultColor', color);

					//Body Color

					var color = colors[1];

					api('body_color').set(color);
					api.control('body_color').container.find('.color-picker-hex').data('data-default-color', color)
					.wpColorPicker('defaultColor', color);
				});
			}

			//Principal menu

			if ('menu_color_scheme_control' == this.id) {
				this.setting.bind('change', function(value) {
					var colors = colorScheme[1][value].colors;

					//Menu 01

					var color = colors[0];

					api('principal_menu_color_1').set(color);
					api.control('principal_menu_color_1').container.find('.color-picker-hex').data('data-default-color', color)
					.wpColorPicker('defaultColor', color);

					//Menu 02

					var color = colors[1];

					api('principal_menu_color_2').set(color);
					api.control('principal_menu_color_2').container.find('.color-picker-hex').data('data-default-color', color)
					.wpColorPicker('defaultColor', color);

					//Menu 03

					var color = colors[2];

					api('principal_menu_color_3').set(color);
					api.control('principal_menu_color_3').container.find('.color-picker-hex').data('data-default-color', color)
					.wpColorPicker('defaultColor', color);

					//Menu 04

					var color = colors[3];

					api('principal_menu_color_4').set(color);
					api.control('principal_menu_color_4').container.find('.color-picker-hex').data('data-default-color', color)
					.wpColorPicker('defaultColor', color);

					//Menu 05

					var color = colors[4];

					api('principal_menu_color_5').set(color);
					api.control('principal_menu_color_5').container.find('.color-picker-hex').data('data-default-color', color)
					.wpColorPicker('defaultColor', color);
				});
			}

			//Social menu

			if ('social_menu_color_scheme_control' == this.id) {
				this.setting.bind('change', function(value) {
					var colors = colorScheme[2][value].colors;

					//Facebook

					var color = colors[0];

					api('social_menu_color_facebook').set(color);
					api.control('social_menu_color_facebook').container.find('.color-picker-hex').data('data-default-color', color)
					.wpColorPicker('defaultColor', color);

					//Twitter

					var color = colors[1];

					api('social_menu_color_twitter').set(color);
					api.control('social_menu_color_twitter').container.find('.color-picker-hex').data('data-default-color', color)
					.wpColorPicker('defaultColor', color);

					//Google Plus

					var color = colors[2];

					api('social_menu_color_google_plus').set(color);
					api.control('social_menu_color_google_plus').container.find('.color-picker-hex').data('data-default-color', color)
					.wpColorPicker('defaultColor', color);

					//Youtube

					var color = colors[3];

					api('social_menu_color_youtube').set(color);
					api.control('social_menu_color_youtube').container.find('.color-picker-hex').data('data-default-color', color)
					.wpColorPicker('defaultColor', color);
				});
			}
		}
	});
})(wp.customize);
