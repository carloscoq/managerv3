/**
 * @author W8S André Luzzardi de Carvalho
 */

var MenuStyleSelect = function() {
	this.bindEvents();
};

MenuStyleSelect.prototype.bindEvents = function() {
	var self = this;
	self.unbindDocument();
	/* Evento de click para o icone */
	jQuery('.menu-text, .icon-menu').live({
		click:function(e) {
			jQuery(this).parent().children('.menu-wrapper').css({
				visibility: 'visible'
			});
			jQuery(this).parent().children('.menu-wrapper').addClass('open');
			setTimeout(function() {
				self.bindDocument();
			},200);
		}
	});
	
};

MenuStyleSelect.prototype.bindDocument = function() {
	var self = this;
	jQuery('html').bind({
		click:function(e) {
			if(jQuery('.menu-wrapper').hasClass('open')) {
				var clicked = e.srcElement || e.target;
				if(jQuery(clicked).parent().hasClass('menu-configuracao')) {
					
				}
				jQuery('.menu-wrapper.open').css({
					visibility: 'hidden'
				});
				jQuery('.menu-wrapper').removeClass('open');
				self.bindEvents();
			}
		}
	});
};

MenuStyleSelect.prototype.unbindDocument = function() {
	jQuery('html').unbind('click');
};