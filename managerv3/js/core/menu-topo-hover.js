/**
 * @author W8S - André Luzzardi de Carvalho
 */

var MenuTopoHover = function(settings) {
	this.userSettings = settings;
	this.settings = {
		menuId: "#nav",
		activeClass: '.menu-ativo',
		hoverElement: 'a',
		classHtmlElement: '.hover-element',
		htmlElement: '<li class="hover-element"><!-- --></li>',
		excludeElemenByClass: 'select-nav',
		animation: 'move'
	};
	for(key in this.userSettings) {
		this.settings[key] = this.userSettings[key];
	}
	this.init();
};

MenuTopoHover.prototype.init = function() {
	this.createElement();
	this.bindEvents();
};

MenuTopoHover.prototype.createElement = function() {
	var self = this;
	jQuery(self.settings.menuId).append(self.settings.htmlElement);
	var position = jQuery(self.settings.activeClass).position();
	position = position.left;
	var width = jQuery(self.settings.activeClass).width();
	jQuery(self.settings.classHtmlElement).css({
		left: position,
		width: width
	});
};

MenuTopoHover.prototype.bindEvents = function() {
	var self = this;
	var initPosition = jQuery(self.settings.activeClass).position();
	initPosition = initPosition.left;
	var initWidth = jQuery(self.settings.activeClass).width();
	var elementHover = jQuery(self.settings.classHtmlElement);
	var activeClass = self.settings.activeClass.replace('.','');
	jQuery(self.settings.menuId+' li '+self.settings.hoverElement).live({
		mouseenter:function() {
			var _self = jQuery(this);
			if(!_self.parent().hasClass(activeClass) && !_self.parent().hasClass(self.settings.excludeElemenByClass)) {
				var position = _self.parent().position();
				position = position.left;
				var width = _self.parent().width();
				if(self.settings.animation == "fade") {
					elementHover.stop(true, true).fadeOut('fast',function() {
						elementHover.css({
							left:position,
							width: width,
							opacity:0
						});
						elementHover.stop(true, true).fadeIn('fast',function() {
							elementHover.css({
								opacity:1
							});
						});
					});
				} else {
					elementHover.stop().animate({
						left:position,
						width: width
					});
				}
				
			}
		},
		mouseleave:function() {
			var _self = jQuery(this);
			if(!_self.parent().hasClass(activeClass) && !_self.parent().hasClass(self.settings.excludeElemenByClass)) {
				if(self.settings.animation == "fade") {
					elementHover.stop(true, true).fadeOut('fast',function() {
						elementHover.css({
							left:initPosition,
							width: initWidth,
							opacity:0
						});
						elementHover.stop(true, true).fadeIn('fast',function(){
							elementHover.css({
								opacity:1
							});
						});
					});
				} else {
					elementHover.stop().animate({
						left:initPosition,
						width: initWidth
					});
				}
			}
		}
	});
};