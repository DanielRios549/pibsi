/**
 * Live-update changed settings in real time in the Customizer preview.
 */

(function($) {
	var api = wp.customize;

	//function to set CSS variables

	var setVariable = function(propertyName, value) {
		document.documentElement.style.setProperty(propertyName, value);
	};

	//Root color

	api('root_color', function(value) {
		value.bind(function(to) {
			setVariable('--rootColor', to);
		});
	});

	//Page color

	api('body_color', function(value) {
		value.bind(function(to) {
			setVariable('--bodyColor', to);
		});
	});
	
	//Principal menu
	//Menu 01

	api('principal_menu_color_1', function(value) {
		value.bind(function(to) {
			setVariable('--menu01', to);
		});
	});

	//Menu 02

	api('principal_menu_color_2', function(value) {
		value.bind(function(to) {
			setVariable('--menu02', to);
		});
	});

	//Menu 03

	api('principal_menu_color_3', function(value) {
		value.bind(function(to) {
			setVariable('--menu03', to);
		});
	});

	//Menu 04

	api('principal_menu_color_4', function(value) {
		value.bind(function(to) {
			setVariable('--menu04', to);
		});
	});

	//Menu 05

	api('principal_menu_color_5', function(value) {
		value.bind(function(to) {
			setVariable('--menu05', to);
		});
	});

	//Social Menu
	//Facebook

	api('social_menu_color_facebook', function(value) {
		value.bind(function(to) {
			setVariable('--facebook', to);
		});
	});
	
	//Twitter

	api('social_menu_color_twitter', function(value) {
		value.bind(function(to) {
			setVariable('--twitter', to);
		});
	});
	
	//Google Plus

	api('social_menu_color_google_plus', function(value) {
		value.bind(function(to) {
			setVariable('--google', to);
		});
	});
	
	//Youtube

	api('social_menu_color_youtube', function(value) {
		value.bind(function(to) {
			setVariable('--youtube', to);
		});
	});
})(jQuery);
