/*
 * Carrega CSS
 */
var CarregarCss = function() {
	this.pagesHasCss = ['dashboard'];
};

CarregarCss.prototype.carregarPaginas = function() {
	var nome = jQuery('#main-wrap').attr('class');
	var link = '<link rel="stylesheet" href="css/'+nome+'.css" type="text/css" />';
	if(nome != undefined && this.pagesHasCss.indexOf(nome) >= 0) {
		jQuery('head').eq(0).append(link);
	}
};

CarregarCss.prototype.crossBrowser = function(css_name) {
  	var style = document.createElement('link');
	style.setAttribute('rel','stylesheet');
	style.setAttribute('type','text/css');
	style.setAttribute('href','css/'+css_name+".css");
	document.getElementsByTagName('head')[0].appendChild(style);
};

/* Carrega CSS */