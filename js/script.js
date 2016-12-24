(function($){
	$(document).ready(function() {
		$(this).on('scroll', function() {
			var menu = $('#menu');
			var adminBar = $('#wpadminbar');

			if ($(this).scrollTop() >= 100) {
				menu.removeClass('menu').addClass('menuFixed');

				if(adminBar.length) {
					menu.css('top', '32px');
				}
			}
			else {
				menu.removeClass('menuFixed').addClass('menu');

				if(adminBar.length) {
					menu.removeAttr('style');
				}
			}
		});
		$('.menu-item-has-children').each(function(){
			$(this).find('> a').after('<input type="checkbox" id="openSubMenu-' + $(this).attr('id') + '" class="openSubMenuInput"/><label for="openSubMenu-' + $(this).attr('id') + '" class="openSubMenu"></label>');
		});
	});
})(jQuery);