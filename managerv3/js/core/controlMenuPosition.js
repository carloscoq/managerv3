var ControlMenuPosition = function(settings) {
	this.userSettins = settings;
	this.settings = {
		
	};
	this.menu = document.getElementById('nav-wrap-interna');
	if(this.menu) {
		this.posicaoInicial = this.menu.scrollHeight+57;
		this.scrolldelay;
		this.init();
	}
};

ControlMenuPosition.prototype.init = function() {
	var self = this;
	for(key in this.userSettings) {
		this.settings[key] = this.userSettings[key];
	}
	this.resetScroll();
	if(browser.type == 'MSIE' && browser.version < 9) {
		jQuery(window).scroll(function() {
			self.verificaScroll();
		})
	} else {
		window.addEventListener('scroll', function() {self.verificaScroll();}, false);
	}
};

ControlMenuPosition.prototype.verificaScroll = function() {
	if (window.pageYOffset) {
		var vscroll = window.pageYOffset;
	} else {
    	var vscroll = (document.body.parentElement) ? document.body.parentElement.scrollTop : 0;
    }
    if(browser.type == 'MSIE' && browser.version < 9) {
    	vscroll = vscroll - 155;
    } else {
    	vscroll = vscroll - 180;
    }
	if(vscroll >= this.posicaoInicial-180) {
		this.elementScroll(vscroll)
	} else {
		this.resetScroll();
	}
};
ControlMenuPosition.prototype.resetScroll = function() {
	if(browser.type == "Chrome" || browser.type == "Safari") {
		jQuery(this.menu).stop().animate({'top':101});
	} else {
		jQuery(this.menu).stop().animate({'top':103});
	}
};

ControlMenuPosition.prototype.elementScroll = function(vscroll) {
	jQuery(this.menu).stop().animate({'top':vscroll});
};