/* Função sorteable tabela de listagem
 * @param settings
 */ 
var PosicaoDeItens = function(settings) {
	this.userSettings = settings;
	this.settings = {
		
	};
	this.init();
};
/* Funcao inicial
 * @param callback
 * Se for passado alguma funcão sera, executada apos a execução da função
 * na chamada do objeto
 */
PosicaoDeItens.prototype.init = function(callback, startCalback) {
	var self = this;
	for(key in this.userSettings) {
		this.settings[key] = this.userSettings[key];
	}
	jQuery(function() {
		jQuery('.sort tbody').sortable({
			forceHelperSize: true,
			change: function( event, ui ) {
				if(self.settings.changeCallback != undefined) {
					self.settings.changeCallback();
				}
			},
			start:function(event, ui) {
				if(self.settings.startCallback != undefined) {
					self.settings.startCallback();
				}
			},
			stop: function(event, ui) {
				if(self.settings.stopCallback != undefined) {
					self.settings.stopCallback();
				}
			}
		});
	});
};
/* END: Função sorteable tabela de listagem */