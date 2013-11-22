var slider = "";

/* Browser Dectection */
var Browser = function() {
	this.version = jQuery.browser.version;
	this.type= this.getType();
	this.system = this.getSystem();
};

Browser.prototype.getType = function() {
	var b = navigator.userAgent;
	if(b.indexOf('MSIE') != -1) {
		return 'MSIE';
	}
	if(b.indexOf('Chrome') != -1) {
		return 'Chrome';
	}
	if(b.indexOf('Safari') != -1) {
		return 'Safari';
	}
	if(b.indexOf('Opera') != -1) {
		return 'Opera';
	}
	if(b.indexOf('Mozilla') != -1) {
		return 'Mozilla';
	}
};
Browser.prototype.getSystem = function() {
	var p = navigator.platform;
	if(p.indexOf('Win') != -1) {
		return 'Windows';
	}
	if(p.indexOf('Mac') != -1) {
		return 'Mac';
	}
	if(p.indexOf('Linux') != -1) {
		return 'Linux';
	}
};
var browser = new Browser();
/* END: Browser Detection */

/* Ajusta cor da tabela no ie8 pra baixo */
var AjustaTabelaListagemIE = function() {
	if(jQuery('.tbl-list').html() != undefined) {
		jQuery('.tbl-list tbody tr:nth-child(odd)').css({
			backgroundColor: '#d7d7d7',
			color: '#313139'
		});
		jQuery('.tbl-list tbody tr:nth-child(even)').css({
			backgroundColor: '#ffffff',
			color: '#313139'
		});
		jQuery('.tbl-list tbody tr:nth-child(even)').hover(function() {
			jQuery(this).css({
				backgroundColor: '#33333b',
				color: '#ffffff'
			})
		},
		function() {
			jQuery(this).css({
				backgroundColor: '#ffffff',
				color: '#313139'
			})
		});
		jQuery('.tbl-list tbody tr:nth-child(odd)').hover(function() {
			jQuery(this).css({
				backgroundColor: '#33333b',
				color: '#ffffff'
			})
		},
		function() {
			jQuery(this).css({
				backgroundColor: '#d7d7d7',
				color: '#313139'
			})
		});
		jQuery('.tbl-list.tbl-list-users tr th:first-child, .tbl-list.tbl-list-users tr td:first-child').addClass('first-child');
	}
};
var AjustaTabelaPermissoesIE = function() {
	if(jQuery('.tbl-permissoes').html() != undefined) {
		jQuery('.tbl-permissoes tbody tr:nth-child(even)').addClass('even')
		jQuery('.tbl-permissoes tbody tr:nth-child(odd)').addClass('odd')
		jQuery('.tbl-permissoes tbody tr td:nth-child(2)').addClass('second-child');
	}
};
/* Ajusta cor da tabela no ie8 pra baixo */

/* Função de hover dos botões de ação das listagens */
var HoverBtnAcao = function(settings) {
	this.userSettings = settings;
	this.settings = {
		showElement: '.tooltip-wrap',
		hoverElement: '.actionHover tbody tr'
	};
	this.init();
};

HoverBtnAcao.prototype.init = function() {
	for(key in this.userSettings) {
		this.settings[key] = this.userSettings[key];
	}
	this.bindEvents();
	if(browser.type == 'MSIE' && browser.version == "8.0") {
		this.adjustPosition();
	}
	jQuery(this.settings.showElement).css({
		//visibility:'visible',
		//display:'none'
	});
	if(browser.type == 'Chrome' || browser.type == 'Safari') {
		jQuery(this.settings.showElement).prev().attr('colspan', 2);
	}
};

HoverBtnAcao.prototype.adjustPosition = function() {
	var self = this;
	var position = jQuery(self.settings.showElement).prev().offset();
	var wPrev = jQuery(self.settings.showElement).prev().width();
	var wTool = jQuery(self.settings.showElement).width()
	var left = position.left + wPrev - wTool - 2;
	jQuery(self.settings.showElement).css({
		left: left,
		right: 'auto'
	});
}

HoverBtnAcao.prototype.bindEvents = function() {
	var self = this;
	jQuery(this.settings.hoverElement).live({
		mouseenter:function() {
			if(!jQuery(this).children(self.settings.showElement).hasClass('stayClose')) {
				jQuery(this).children(self.settings.showElement).css({
					//display:'block'
					visibility: 'visible'
				});
			}
		},
		mouseleave:function() {
			//jQuery(this).children(self.settings.showElement).hide();
			jQuery(this).children(self.settings.showElement).css({
					//display:'block'
					visibility: 'hidden'
				});
			self.settings.after();
		}
	});
};
HoverBtnAcao.prototype.showElements = function() {
	jQuery(this.settings.showElement).css({
		display:'block'
	});
};
HoverBtnAcao.prototype.stayClosed = function() {
	var self = this;
	jQuery(self.settings.showElement).addClass('stayClose');
}
HoverBtnAcao.prototype.removeStayClosed = function() {
	var self = this;
	jQuery(self.settings.showElement).removeClass('stayClose');
}
HoverBtnAcao.prototype.hideElements = function() {
	jQuery(this.settings.showElement).hide();
};
/* END: Função de hover dos botões de ação das listagens */

var setaAlturaLargura = function(id) {
	var width = jQuery('#'+id).width();
	var height = jQuery('#'+id).height();
	jQuery('#'+id).css({
		height: height,
		width: width
	});
};


/* Notificação */
/*
 * Caso seja passado o type (success ou error), tera um comportamento diferente, padrão: error (mantem na tela)
 * time = 1; em segundos
 */  
// Mensagem, tipo, e tempo em segundos.
// Em caso de erro ele não vai fechar automaticamente
function notificacaoDialog(texto, typeNot, time) {
	jQuery('.text-message').html(texto);
	var options = {
		modal: false,
		draggable: false,
		dialogClass: 'dialog-message-wrap',
		width: 270,
		resizable: false,
		stack: true
	};
	if(typeNot == "error") {
		options['dialogClass'] = "dialog-message-wrap dialog-message-error";
		options['modal'] = true;
	}
	jQuery( "#dialog-message" ).dialog(options);
	if(typeNot == 'success') {
		if(time == undefined) {
			time = 3;
		}
		setTimeout(function() {
			if(jQuery('#dialog-message').dialog('isOpen')) {
				jQuery('#dialog-message').parent().fadeOut(function() {
					jQuery('#dialog-message').dialog('close');
				});
			}
		}, time*1000)
	}
}
/* END: Notificão */
/* Crop */
function cropDialog() {
	jQuery( "#dialog-crop" ).dialog({
		modal: true,
		draggable: true,
		dialogClass: 'dialog-crop-wrap',
		width: 915,
		resizable: false,
		stack: false,
		open: function() {
			callCarousel();
			jQuery('#cancela-crop').bind({
				click:function(e) {
					e.preventDefault();
					jQuery('#dialog-crop').dialog('close');
				}
			});
			jQuery('.img-crop').bind({
				click:function(e) {
					e.preventDefault();
					var cloneEditando = jQuery('.editando').clone();
					jQuery('.editando').remove();
					var src = jQuery(this).attr('href');
					jQuery(this).parent().append(cloneEditando);
					callDestroyShow();
					callCarousel();
					jQuery('#imagem-crop .imagem-crop').fadeOut('fast',function() {
						jQuery(this).attr('src', src);
						jQuery(this).fadeIn('fast');
					});
				}
			});
		},
		close: function() {
			jQuery('#cancela-crop').unbind('click');
			jQuery('.img-crop').unbind('click');
			callDestroyShow();
		}
	});
}

function callCarousel() {
	slider = jQuery('.carousel-vertical ul').bxSlider({
	    mode: 'vertical',
	    pager: false,
	    infiniteLoop: false,
	    speed: 300,
	    easing: 'easeInOutQuad',
	    displaySlideQty: 100,
	    onFirstSlide: function() {
	    	jQuery('#carrousel-wrap .up').addClass('disabled');
	    },
	    onLastSlide: function() {
	    	jQuery('.down').addClass('disabled');
	    },
	    onBeforeSlide: function() {
	    	jQuery('#carrousel-wrap .up').removeClass('disabled');
	    }
	});
	jQuery('#carrousel-wrap .up').bind({
		click: function(e) {
			e.preventDefault();
			if(!jQuery(this).hasClass('disabled')) {
				slider.goToPreviousSlide();
			}
		}
	});
	jQuery('#carrousel-wrap .down').bind({
		click: function(e) {
			e.preventDefault();
			if(!jQuery(this).hasClass('disabled')) {
				slider.goToNextSlide();
			}
		}
	});
}

function callDestroyShow() {
	jQuery('.bx-next, bx-prev').remove();
	slider.destroyShow();
}
/* END: Crop */

/* Chama dialog das permissões
 * 
 */
function addPermissoes() {
	jQuery( "#dialog-add-permissoes" ).dialog({
		modal: true,
		draggable: true,
		dialogClass: 'dialog-crop-wrap',
		width: 433,
		resizable: false
	});
}
function addPermissoesUsuario() {
	jQuery( "#dialog-permissoes" ).dialog({
		modal: true,
		draggable: true,
		dialogClass: 'dialog-crop-wrap',
		width: 897,
		resizable: false
	});
}
function userListPermissoes(e) {
	jQuery( "#dialog-user-list-permissoes" ).dialog({
		modal: true,
		draggable: true,
		dialogClass: 'dialog-crop-wrap',
		width: 897,
		resizable: false
	});
}
function userAddPermissoes(e) {
	jQuery( "#dialog-user-add-permissoes" ).dialog({
		modal: true,
		draggable: true,
		dialogClass: 'dialog-crop-wrap',
		width: 897,
		resizable: false
	});
}
/* END: Chama dialog permissõe */
function setaCaminhoArquivoParaInput() {
	jQuery('.input-file').live({
		change:function(e) {
			var file = jQuery(this).val();
			file = file.match(/\\([^\\]+)$/)[1];
			jQuery(this).parent().find('input[type="text"]').val(file);
			jQuery(this).parent().find('input[type="text"]').attr('title', file)
			jQuery(this).parent().find('input[type="text"]').attr('alt', file)
		}
	});
}

/* Loader */
function showLoader() {
	jQuery('#loader').fadeIn('fast');
	jQuery('body').on("keydown",
		function(e) {
			var keyCode = e.keyCode || e.which;
			if(keyCode == 9) {
				e.preventDefault();
			}
		});
}
function hideLoader() {
	jQuery('#loader').fadeOut('fast');
	jQuery('body').off('keydown');
}
/* END: Loader */

/* Função de remover itens das permissões */
jQuery('.w-icon-remove-permi-wrap').live({
	click:function(e) {
		e.preventDefault();
		var self = this;
		var trRemove = jQuery(self).parent().parent();
		var clone = jQuery(self).clone();
		jQuery(self).parent().html('Removendo...');
		/* Chamar a função de post ou json e adicionar o que estiver abaixo apos completar a função */
		/* Casso de sucesso */
		jQuery(trRemove).fadeOut('fast', function() {
			var parent = jQuery(trRemove).parent();
			jQuery(trRemove).remove();
			var hasChildren = jQuery(parent).children('tr').size();
			if(hasChildren == 0) {
				jQuery(parent).parent().remove();
			}
			/* Passar mensagem de sucesso */
			notificacaoDialog("Mensagem de sucesso", 'success', '4');
		})
		/* Casso de erro */
		//notificacaoDialog("Mensagem de error", 'error', '4');
		//jQuery(self).parent().html(clone);
	}
});
/* END: Função de remover itens das permissõe */

/* Funcão para adicionar permissões /*
 * 
 */
jQuery('.w-icon-add-permi-wrap').live({
	click:function(e) {
		e.preventDefault();
		var self = this;
		var trRemove = jQuery(self).parent().parent();
		var clone = jQuery(self).clone();
		jQuery(self).parent().html('Adcionando...');
	}
});
/* END: Função para adicionar permissoes */

/* Placeholder */
var Placeholder = function() {
	jQuery('[placeholder]').each(function() {
		jQuery(this).val(jQuery(this).attr('placeholder'));
		jQuery(this).css({
			color: '#999'
		});
		if(!jQuery(this).hasClass('placeholder-on')) {
			jQuery(this).addClass('placeholder-on');
		}
	})
	jQuery('.placeholder-on').live({
		focusin: function(e) {
			if(jQuery(this).val() != jQuery(this).attr('placeholder')) {
				jQuery(this).css({
					color: ''
				});
			} else {
				jQuery(this).val('');
				jQuery(this).css({
					color: ''
				});
			}
		},
		focusout:function(e) {
			if(jQuery(this).val() == "" || jQuery(this).val() == jQuery(this).attr('placeholder')) {
				jQuery(this).css({
					color: '#999'
				});
				jQuery(this).val(jQuery(this).attr('placeholder'));
			}
		}
	});
};
/* END: Placeholder */

/* Permissão para Excluir */
var PutTrash = function(settings) {
	this.init();
};
PutTrash.prototype.init = function() {
	this.bindEvents();
};

PutTrash.prototype.bindEvents = function() {
	jQuery('.putTrash').live({
		click:function(e) {
			e.preventDefault();
			jQuery(this).parent().children('.trash-question').fadeIn('fast');
		}
	})
	jQuery('.trash-question .no').live({
		click:function(e) {
			e.preventDefault();
			jQuery(this).parent().fadeOut('fast');
		}
	});
	jQuery('.trash-question .yes').live({
		click:function(e) {
			e.preventDefault();
			jQuery(this).parent().fadeOut('fast');
			/* Fazer tratamento da exclusão aqui */
		}
	});
};
PutTrash.prototype.reset = function() {
	jQuery('.trash-question').fadeOut('fast');
};
/* END: Permissão para Excluir */
