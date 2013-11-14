/* Tootip Tabela */
var Tooltip = function(settings) {
	this.userSettings = settings;
	this.settings = {
		position: { // altura: center, top, bottom; base: center, left, right
			altura: 'center',
			base: 'afterRight'
		},
		marginTop: 0,
		marginRight:0,
		marginBottom:0,
		marginLeft: 0,
		bindType: 'disappear'
	};
	
	this.top = 0;
	this.left = 0;
	this.init();
};
Tooltip.prototype.init = function() {
	if(this.settings.position.altura == 'center' && this.settings.position.base == 'center') {
		this.settings.position.base = 'right';
	}
	for(key in this.userSettings) {
		this.settings[key] = this.userSettings[key];
	}
	this.createElement();
	this.bindEvents();
};
Tooltip.prototype.createElement = function(text) {
	var self = this;
	this.div = document.createElement('div');
	this.div.setAttribute('id','w-tooltip');
	this.span = document.createElement('span');
	this.span.setAttribute('id','w-tooltip-text');
	this.div.appendChild(this.span);
	document.body.appendChild(this.div);
}
Tooltip.prototype.bindEvents = function() {
	var self = this;
	if(self.settings.bindType == 'disappear') {
		jQuery(self.settings.bindElement).live({
			mouseenter: function(e) {
				var element = this;
				self.showTooltip(element);
			},
			mouseleave:function(e) {
				var element  = this;
				self.hideTooltip(element);
			}
		});
	}
};
Tooltip.prototype.getPositionTooltip = function(element) {
	var self = this;
	switch(browser) {
		case 'MSIE'	  : getMarginPosition();
					 	break;
		case 'Chrome' : getMarginPosition();
						break;
		case 'Safari' : getMarginPosition();
						break;
		case 'Mozilla': getPosition();
						break;
		case 'Opera'  : getPosition();
						break;
		default		  : getMarginPosition();
						break;
			
	}
	function getPosition() {
		if(jQuery(element).css('position') == 'static' || jQuery(element).css('position') == 'relative') {
			var pos = jQuery(element).offset();
		} else {
			var pos = jQuery(element).position();
		}
		var t = 0;
		var l = 0;
		if(jQuery(element).css('display')== 'table-cell') {
			var pLeft = window.getComputedStyle(element, null).getPropertyValue('padding-left')
			var pRight = window.getComputedStyle(element, null).getPropertyValue('padding-right')
			var pTop = window.getComputedStyle(element, null).getPropertyValue('padding-top')
			var pBottom = window.getComputedStyle(element, null).getPropertyValue('padding-bottom')
			pLeft = pLeft.replace('px','');
			pRight = pRight.replace('px','');
			pLeft = parseInt(pLeft);
			pRight = parseInt(pRight);
			pTop = pTop.replace('px','');
			pBottom = pBottom.replace('px','');
			pTop = parseInt(pTop);
			pBottom = parseInt(pBottom);
		} else {
			var pLeft = 0;
			var pRight = 0;
			var pTop = 0;
			var pBottom = 0;
		}
		switch(self.settings.position.altura) {			
			case 'top': t = pos.top-(jQuery(element).height()-self.settings.marginBottom);
						if(t - jQuery('#w-tooltip').height() <= 0) {
							t = pos.top+(jQuery(element).height()+self.settings.marginTop);
						}
						break;
			case 'center':
						t = pos.top + ((jQuery(element).height()/2 - jQuery('#w-tooltip').height()/2)) + self.settings.marginBottom + self.settings.marginTop +pTop;
					   	break;
			case 'bottom': t = pos.top+(jQuery(element).height()+self.settings.marginTop);
						   if(t > jQuery(window).height()) {
						   		t = pos.top-(jQuery(element).height()-self.settings.marginBottom);					   	
						   }
						   break;
			default: t = pos.top-(jQuery(element).height()-self.settings.marginBottom);
					 break;	 
		};
		switch(self.settings.position.base) {
			case 'left': l = pos.left-(jQuery('#w-tooltip').width()-self.settings.marginRight);
						if(l - jQuery('#w-tooltip').width() <= 0) {
							l = pos.left+(jQuery(element).width()+self.settings.marginLeft);
						}
						break;
			case 'beforeLeft': l = pos.left-(jQuery('#w-tooltip').width()-self.settings.marginRight);
						if(l < jQuery('#w-tooltip').width() <= 0) {
							l = pos.left+(jQuery(element).width()+self.settings.marginLeft);
						}
						break;
			case 'center': l = pos.left-((jQuery(element).width() - jQuery(self.settings.elementId+'.w-tooltip').width()) / 2);
						break;
			case 'right': l = pos.left+(jQuery(element).width()+self.settings.marginRight);
						if(l + jQuery('#w-tooltip').width() <= 0) {
							l = pos.left-(jQuery('#w-tooltip').width()-self.settings.marginRight);
						}
						break;
			case 'afterRight':
						l = pos.left+(jQuery(element).width());
						if(l + jQuery('#w-tooltip').width() > jQuery(window).width()) {
							l = pos.left-(jQuery('#w-tooltip').width() + self.settings.marginRight);
						}
						break;
			default: l = pos.left-(jQuery(element).width()-self.settings.marginRight);
						if(l - jQuery('#w-tooltip').width() <= 0) {
							l = pos.left+(jQuery(element).width()+self.settings.marginLeft);
						}
						break;
		}
		self.setTop(t);
		self.setLeft(l);
	}
	function getMarginPosition() {
		if(jQuery(element).css('position') == 'static' || jQuery(element).css('position') == 'relative') {
			var pos = jQuery(element).offset();
		} else {
			var posL =jQuery(element).css('margin-left');
			posL = posL.replace('px','');
			posL = parseInt(posL);
			var posT =jQuery(element).css('margin-top');
			posT = posT.replace('px','');
			posT = parseInt(posT);
			var pos = {
				top: posT,
				left: posL
			};
		}
		var pLeft = window.getComputedStyle(element, null).getPropertyValue('padding-left')
		var pRight = window.getComputedStyle(element, null).getPropertyValue('padding-right')
		var pTop = window.getComputedStyle(element, null).getPropertyValue('padding-top')
		var pBottom = window.getComputedStyle(element, null).getPropertyValue('padding-bottom')
		pLeft = pLeft.replace('px','');
		pRight = pRight.replace('px','');
		pLeft = parseInt(pLeft);
		pRight = parseInt(pRight);
		pTop = pTop.replace('px','');
		pBottom = pBottom.replace('px','');
		pTop = parseInt(pTop);
		pBottom = parseInt(pBottom);
		switch(self.settings.position.altura) {
			case 'top': t = pos.top-(jQuery(element).height()-self.settings.marginBottom);
						if(t - jQuery('#w-tooltip').height() <= 0) {
							t = pos.top+(jQuery(element).height()+self.settings.marginTop);
						}
						break;
			case 'center': t = pos.top +(jQuery(element).height()/2) - (jQuery('#w-tooltip').height()/2) + self.settings.marginBottom + self.settings.marginTop+pTop;
					   	   break;
			case 'bottom': t = pos.top+(jQuery(element).height()+self.settings.marginTop);
						   if(t > jQuery(window).height()) {
						   		t = pos.top-(jQuery(element).height()-self.settings.marginBottom);					   	
						   }
						   break;
			default: t = pos.top-(jQuery(element).height()-self.settings.marginBottom);
					 if(t - jQuery('#w-tooltip').height() <= 0) {
						t = pos.top+(jQuery(element).height()+self.settings.marginTop);
					 }
					 break; 
		};
		switch(self.settings.position.base) {
			case 'left': l = pos.left-(jQuery('#w-tooltip').width()-self.settings.marginRight);
						if(l - jQuery('#w-tooltip').width() <= 0) {
							l = pos.left+(jQuery(element).width()+self.settings.marginLeft);
						}
						break;
			case 'beforeLeft': l = pos.left-(jQuery('#w-tooltip').width()-self.settings.marginRight);
						if(l < jQuery('#w-tooltip').width() <= 0) {
							l = pos.left+(jQuery(element).width()+self.settings.marginLeft);
						}
						break;
			case 'center': l = pos.left-((jQuery(element).width() - jQuery('#w-tooltip').width())/2);
						break;
			case 'right': l = pos.left+((jQuery(element).width()+self.settings.marginRight)-jQuery(self.settings.elementId+'.w-tooltip').width());
						if(l + jQuery('#w-tooltip').width() <= 0) {
							l = pos.left-(jQuery('#w-tooltip').width() - self.settings.marginRight);
						}
						break;
			case 'afterRight':
						l = pos.left+(jQuery(element).width()+self.settings.marginRight+pRight+pLeft);
						if(l + jQuery('#w-tooltip').width() > jQuery(window).width()) {
							l = pos.left-(jQuery('#w-tooltip').width() + self.settings.marginRight);
						}
						break;
			default: l = pos.left-(jQuery(element).width()-self.settings.marginRight);
						if(l - jQuery('#w-tooltip').width() <= 0) {
							l = pos.left+(jQuery(element).width()+self.settings.marginLeft);
						}
						break;
		}
	}
	self.setTop(t);
	self.setLeft(l);
};
Tooltip.prototype.setTop = function(param) {
	this.top = param;
};
Tooltip.prototype.getTop = function() {
	return this.top
};
Tooltip.prototype.setLeft = function(param) {
	this.left = param;
};
Tooltip.prototype.getLeft = function() {
	return this.left
};
Tooltip.prototype.showTooltip = function(element) {
	var self = this;
	this.title = jQuery(element).attr('title');
	jQuery(element).removeAttr('title')
	jQuery('#w-tooltip-text').html(this.title);
	self.getPositionTooltip(element);
	jQuery('#w-tooltip').css({
		top: self.getTop(),
		left: self.getLeft(),
		zIndex: 99999,
		display: 'none',
		visibility: 'visible',
		opacity: 1
	});
	jQuery('#w-tooltip').stop().show();
}
Tooltip.prototype.hideTooltip = function(element) {
	var self = this;
	jQuery(element).attr('title',this.title);
	jQuery('#w-tooltip').hide('fast',function() {
		jQuery(this).css({
			visibility: 'hidden',
			display: 'block'
		});
	});
}
/* END: Tootip Tabela */