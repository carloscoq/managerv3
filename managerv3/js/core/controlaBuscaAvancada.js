/* Controla busca avançada
 * @param
 */
var ControlaBuscaAvancada = function(settings) {
	this.userSettings = settings;
	this.settings = {
		animation: 'slide',
		handler: '#pesquisa-avancada',
		contreledElement: '.advanced-search',
		openClass: 'opened',
		closeClass: 'closed',
		searchInput: '.search-input'
	};
	for(key in this.userSettings) {
		this.settings[key] = this.userSettings[key];
	}
	this.init();
};
ControlaBuscaAvancada.prototype.init = function() {
	var self = this;
	var handler = this.settings.handler;
	var contreledElement = this.settings.contreledElement;
	jQuery(handler).live({
		click:function(e) {
			e.preventDefault();
			if(jQuery(contreledElement).hasClass(self.settings.closeClass) && 
			!jQuery(this).hasClass('opening') &&
			!jQuery(this).hasClass('closing') ) {
				jQuery(this).addClass(self.settings.openClass)
					.removeClass(self.settings.closeClass);
				self.animateOpen();
			} else if (jQuery(contreledElement).hasClass(self.settings.openClass) && 
			!jQuery(this).hasClass('opening') &&
			!jQuery(this).hasClass('closing') ) {
				self.animateClose();
				jQuery(this).removeClass(self.settings.openClass)
					.addClass(self.settings.closeClass);
			}
		}
	});
};
ControlaBuscaAvancada.prototype.animateOpen = function() {
	var self = this;
	var handler = this.settings.hander;
	var contreledElement = this.settings.contreledElement;
	var animation = this.settings.animation;
	switch (animation) {
		case 'fade': fadeAnimation();
					 break;
		case 'slide': slideAnimation();
					 break;
		default: slideAnimation();
				 break;
	}
	function fadeAnimation() {
		if(jQuery(contreledElement).hasClass(self.settings.closeClass)) {
			jQuery(self.settings.handler).addClass('opening');
			jQuery(self.settings.searchInput).addClass(self.settings.openClass);
			jQuery(contreledElement).fadeIn('fast', function() {
				jQuery(contreledElement).removeClass(self.settings.closeClass)
					.addClass(self.settings.openClass);
					jQuery(self.settings.handler).removeClass('opening');
			});
		} else if (jQuery(contreledElement).hasClass(self.settings.openClass)) {
			jQuery(self.settings.handler).addClass('closing');
			jQuery(self.settings.searchInput).removeClass(self.settings.openClass);
			jQuery(contreledElement).fadeOut('fast', function() {
				jQuery(contreledElement).removeClass(self.settings.openClass)
					.addClass(self.settings.closeClass);
					jQuery(self.settings.handler).removeClass('closing');
			});
		}
	}
	function slideAnimation() {
		if(jQuery(contreledElement).hasClass(self.settings.closeClass)) {
			jQuery(self.settings.handler).addClass('opening');
			jQuery(self.settings.searchInput).addClass(self.settings.openClass);
			jQuery(contreledElement).slideToggle('fast', function() {
					jQuery(contreledElement).removeClass(self.settings.closeClass)
						.addClass(self.settings.openClass);
						jQuery(self.settings.handler).removeClass('opening');
			});
		} else if (jQuery(contreledElement).hasClass(self.settings.openClass)) {
			jQuery(self.settings.handler).addClass('closing');
			jQuery(self.settings.searchInput).removeClass(self.settings.openClass);
			jQuery(contreledElement).slideToggle('fast', function() {
				jQuery(contreledElement).removeClass(self.settings.openClass)
					.addClass(self.settings.closeClass);
					jQuery(self.settings.handler).removeClass('closing');
			});
		}
	}
};
ControlaBuscaAvancada.prototype.animateClose = function() {
	var self = this;
	var handler = this.settings.hander;
	var contreledElement = this.settings.contreledElement;
	var animation = this.settings.animation;
	switch (animation) {
		case 'fade': fadeAnimation();
					 break;
		case 'slide': slideAnimation();
					 break;
		default: slideAnimation();
				 break;
	}
	function fadeAnimation() {
		if(jQuery(contreledElement).hasClass(self.settings.closeClass)) {
			jQuery(self.settings.handler).addClass('opening');
			jQuery(self.settings.searchInput).addClass(self.settings.openClass);
			jQuery(contreledElement).fadeIn('fast', function() {
				jQuery(contreledElement).removeClass(self.settings.closeClass)
					.addClass(self.settings.openClass);
					jQuery(self.settings.handler).removeClass('opening');
			});
		} else if (jQuery(contreledElement).hasClass(self.settings.openClass)) {
			jQuery(self.settings.handler).addClass('closing');
			jQuery(self.settings.searchInput).removeClass(self.settings.openClass);
			jQuery(contreledElement).fadeOut('fast', function() {
				jQuery(contreledElement).removeClass(self.settings.openClass)
					.addClass(self.settings.closeClass);
					jQuery(self.settings.handler).removeClass('closing');
			});
		}
	}
	function slideAnimation() {
		if(jQuery(contreledElement).hasClass(self.settings.closeClass)) {
			jQuery(self.settings.handler).addClass('opening');
			jQuery(self.settings.searchInput).addClass(self.settings.openClass);
			jQuery(contreledElement).slideToggle('fast', function() {
					jQuery(contreledElement).removeClass(self.settings.closeClass)
						.addClass(self.settings.openClass);
						jQuery(self.settings.handler).removeClass('opening');
			});
		} else if (jQuery(contreledElement).hasClass(self.settings.openClass)) {
			jQuery(self.settings.handler).addClass('closing');
			jQuery(self.settings.searchInput).removeClass(self.settings.openClass);
			jQuery(contreledElement).slideToggle('fast', function() {
				jQuery(contreledElement).removeClass(self.settings.openClass)
					.addClass(self.settings.closeClass);
					jQuery(self.settings.handler).removeClass('closing');
			});
		}
	}
};
/* END: Controla busca avançada */